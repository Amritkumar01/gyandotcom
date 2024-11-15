<?php
session_start(); // Start the session to access the stored user data

// Database connection
$servername = "localhost";
$username = "root";
$password = "ak@AK123";
$dbname = "mentors_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to convert 12-hour format to 24-hour format
function convertTo24Hour($time) {
    return date("H:i:s", strtotime($time));
}

// Check if the session has the stored user data
if (isset($_SESSION['user_data'])) {
    // Retrieve the form data from the session
    $user_data = $_SESSION['user_data'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO mentor_submit (fullName, emailAddress, mobileNumber, dob, communicationType, availabilityDay, availabilityTime, preferredLanguage, gender, requirements, whyUs, hobbies, areaOfInterest, occupation, mentorSelect) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssssss", $fullName, $emailAddress, $mobileNumber, $dob, $communicationType, $availabilityDay, $availabilityTime, $preferredLanguage, $gender, $requirements, $whyUs, $hobbies, $areaOfInterest, $occupation, $mentorSelect);

    // Set parameters using session data
    $fullName = $user_data['fullName'];
    $emailAddress = $user_data['emailAddress'];
    $mobileNumber = $user_data['mobileNumber'];
    $dob = $user_data['dob'];
    $communicationType = $user_data['communicationType'];
    $availabilityDay = $user_data['availabilityDay'];
    $availabilityTime = convertTo24Hour($user_data['availabilityTime']);
    $preferredLanguage = $user_data['preferredLanguage'];
    $gender = $user_data['gender'];
    $requirements = $user_data['requirements'];
    $whyUs = $user_data['whyUs'];
    $hobbies = $user_data['hobbies'];
    $areaOfInterest = $user_data['areaOfInterest'];
    $occupation = $user_data['occupation'];
    $mentorSelect = $user_data['mentorSelect'];  // Assuming the session has the mentorSelect data

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
        header("Location: feedback.php"); // Redirect to feedback page after success
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // If session data is not available
    echo "Error: No user data found. Please go back and complete the payment.";
}

// Close the connection
$conn->close();
?>
