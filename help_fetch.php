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

// Prepare and bind the SQL statement
$sql = "SELECT id, name, availability_day, availability_time FROM help WHERE availability_day = ? AND availability_time = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $availabilityDay, $availabilityTime);
$stmt->execute();
$result = $stmt->get_result();

$help = [];
while ($row = $result->fetch_assoc()) {
    $help[] = [
        'id' => $row['id'],
        'name' => $row['name'],
        'availability_day' => $row['availability_day'],
        'availability_time' => $row['availability_time']
    ];
}

if (empty($help)) {
    // Prepare a new SQL statement to fetch random mentors based on the availability day
    $sql_random = "SELECT id, name, availability_day, availability_time FROM help WHERE availability_day = ? ORDER BY RAND() LIMIT 3";
    
    $nextDay = ($availabilityDay === 'today') ? 'today' : 'tomorrow';
    $stmt_random = $conn->prepare($sql_random);
    
    // Bind the day parameter and execute
    $stmt_random->bind_param("s", $nextDay);
    $stmt_random->execute();
    $result_random = $stmt_random->get_result();

    // Fetch the random mentors
    while ($row = $result_random->fetch_assoc()) {
        // Include the availability day and time
        $help[] = [
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
echo json_encode($help);
?>
