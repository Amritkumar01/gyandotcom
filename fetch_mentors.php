<?php
// Database connection
$servername = "localhost"; // Your server
$username = "root"; // Your username
$password = "ak@AK123"; // Your password
$dbname = "mentors_db"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data from AJAX request
$availabilityDay = $_POST['availabilityDay'];
$availabilityTime = $_POST['availabilityTime'];
$occupation = $_POST['occupation'];

// Prepare and bind the SQL statement
$sql = "SELECT id, name, availability_day, availability_time FROM mentors WHERE availability_day = ? AND availability_time = ? AND occupation = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $availabilityDay, $availabilityTime, $occupation);
$stmt->execute();
$result = $stmt->get_result();

// Fetch data and store in an array
$mentors = [];
while ($row = $result->fetch_assoc()) {
    // Include the availability day and time
    $mentors[] = [
        'id' => $row['id'],
        'name' => $row['name'],
        'availability_day' => $row['availability_day'],
        'availability_time' => $row['availability_time']
    ];
}

// If no matching mentors found, fetch 3 random mentors based on the availability day
if (empty($mentors)) {
    // Prepare a new SQL statement to fetch random mentors based on the availability day
    $sql_random = "SELECT id, name, availability_day, availability_time FROM mentors WHERE availability_day = ? ORDER BY RAND() LIMIT 3";
    
    // Check if the current availability day is "Today" or "Tomorrow" to fetch the next day if necessary
    $nextDay = ($availabilityDay === 'Today') ? 'Today' : 'Tomorrow';
    $stmt_random = $conn->prepare($sql_random);
    
    // Bind the day parameter and execute
    $stmt_random->bind_param("s", $nextDay);
    $stmt_random->execute();
    $result_random = $stmt_random->get_result();

    // Fetch the random mentors
    while ($row = $result_random->fetch_assoc()) {
        // Include the availability day and time
        $mentors[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'availability_day' => $row['availability_day'],
            'availability_time' => $row['availability_time']
        ];
    }

    // Close the random statement
    $stmt_random->close();
}

// Close the connection
$stmt->close();
$conn->close();

// Return JSON response
echo json_encode($mentors);
?>