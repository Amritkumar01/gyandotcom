<?php
$servername = "localhost";
$username = "root";
$password = "ak@AK123";
$dbname = "mentors_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$availability_day = $_POST['availability_day'];
$availability_time = $_POST['availability_time'];
$email = $_POST['email'];

$sql = "INSERT INTO help (name, availability_day, availability_time, email) 
        VALUES ('$name', '$availability_day', '$availability_time', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record added successfully";
  header("Location: main.php"); // Redirect to data display page
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
