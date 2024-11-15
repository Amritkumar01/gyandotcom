<?php
session_start(); // Start the session to access the stored user data

// Database connection details
$servername = "localhost";
$username = "root";
$password = "ak@AK123";
$dbname = "mentors_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to handle any formatting if needed
// For example, if you want to format the time to 24-hour format
function convertTo24Hour($time) {
    return date("H:i:s", strtotime($time));
}

// Check if the session has the stored user data
if (isset($_SESSION['edu_form_data'])) {
    // Retrieve the form data from the session
    $formData = $_SESSION['edu_form_data'];

    // Prepare the SQL insert statement
    $stmt = $conn->prepare("INSERT INTO edu (fullName, emailAddress, phoneNumber, curredu, stream, optionSelected, specificA, anyreq, availabilityTime)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $fullName, $emailAddress, $phoneNumber, $curredu, $stream, $optionSelected, $specificA, $anyreq, $availabilityTime);

    // Set parameters using session data
    $fullName = $formData['fullName'];
    $emailAddress = $formData['emailAddress'];
    $phoneNumber = $formData['phoneNumber'];
    $curredu = $formData['curredu'];
    $stream = $formData['stream'];
    $optionSelected = $formData['optionSelected'];
    $specificA = $formData['specificA'] ?? null;
    $anyreq = $formData['anyreq'] ?? null;
    $availabilityTime = $formData['availabilityTime'] ?? null;  // If time needs conversion, you can do it like below
    // $availabilityTime = convertTo24Hour($formData['availabilityTime']);

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
    echo "Error: No form data found. Please go back and submit the form.";
}

// Close the connection
$conn->close();
?>
