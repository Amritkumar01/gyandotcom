<?php
$servername = "localhost";
$username = "root";
$password = "ak@AK123";
$dbname = "mentors_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the mentor_submit table
$result = $conn->query("SELECT * FROM mentor_submit");

// Fetch data from the helping table
$helping_result = $conn->query("SELECT * FROM helping");

// Fetch data from the edu table
$edu_result = $conn->query("SELECT * FROM edu");

$helpe = $conn->query("SELECT * FROM help");

$mente = $conn->query("SELECT * FROM mentors");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Tables</title>
    <style>
        .table-container {
            display: none; /* Hide all tables by default */
        }
    </style>
    <script>
        function toggleTable(tableId) {
            var table = document.getElementById(tableId);
            if (table.style.display === "block") {
                table.style.display = "none"; // Hide the table if it's currently visible
            } else {
                // Hide all tables first
                document.getElementById('mentorTable').style.display = 'none';
                document.getElementById('helpingTable').style.display = 'none';
                document.getElementById('eduTable').style.display = 'none';
                document.getElementById('mentorlist').style.display = 'none';
                document.getElementById('helpTable').style.display = 'none';
                // Show the selected table
                table.style.display = 'block';
            }
        }
    </script>
</head>
<body>

<h3>Table Management</h3>
<button onclick="toggleTable('mentorTable')">Mentor Table</button>
<button onclick="toggleTable('helpingTable')">Helping Table</button>
<button onclick="toggleTable('eduTable')">Education Table</button>
<button onclick="toggleTable('mentorlist')">Mentors</button>
<button onclick="toggleTable('helpTable')">Help Table</button>

<div id="mentorTable" class="table-container">
    <h3>Mentor Table</h3>
    <table class='table table-bordered'>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Mobile Number</th>
            <th>Date of Birth</th>
            <th>Communication Type</th>
            <th>Availability Day</th>
            <th>Availability Time</th>
            <th>Preferred Language</th>
            <th>Gender</th>
            <th>Occupation</th>
            <th>Area of Interest</th>
            <th>Why Us</th>
            <th>Hobbies</th>
            <th>Requirements</th>
            <th>Mentor ID</th>
            <th>Created At</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['fullName'] ?></td>
            <td><?= $row['emailAddress'] ?></td>
            <td><?= $row['mobileNumber'] ?></td>
            <td><?= $row['dob'] ?></td>
            <td><?= $row['communicationType'] ?></td>
            <td><?= $row['availabilityDay'] ?></td>
            <td><?= $row['availabilityTime'] ?></td>
            <td><?= $row['preferredLanguage'] ?></td>
            <td><?= $row['gender'] ?></td>
            <td><?= $row['occupation'] ?></td>
            <td><?= $row['areaOfInterest'] ?></td>
            <td><?= $row['whyUs'] ?></td>
            <td><?= $row['hobbies'] ?></td>
            <td><?= $row['requirements'] ?></td>
            <td><?= $row['mentorSelect'] ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<div id="helpingTable" class="table-container">
    <h3>Helping Table</h3>
    <table class='table table-bordered'>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Mobile Number</th>
            <th>Date of Birth</th>
            <th>Communication Type</th>
            <th>Availability Day</th>
            <th>Availability Time</th>
            <th>Preferred Language</th>
            <th>Gender</th>
            <th>Requirements</th>
            <th>Why Us</th>
            <th>Helper Id</th>
            <th>Created At</th>
        </tr>

        <?php while ($row = $helping_result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['fullName'] ?></td>
            <td><?= $row['emailAddress'] ?></td>
            <td><?= $row['mobileNumber'] ?></td>
            <td><?= $row['dob'] ?></td>
            <td><?= $row['communicationType'] ?></td>
            <td><?= $row['availabilityDay'] ?></td>
            <td><?= $row['availabilityTime'] ?></td>
            <td><?= $row['preferredLanguage'] ?></td>
            <td><?= $row['gender'] ?></td>
            <td><?= $row['requirements'] ?></td>
            <td><?= $row['whyUs'] ?></td>
            <td><?= $row['helperSelect'] ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<div id="eduTable" class="table-container">
    <h3>Edu Table</h3>
    <table class='table table-bordered'>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Current Education</th>
            <th>Stream</th>
            <th>Option Selected</th>
            <th>Specific A</th>
            <th>Any Requirements</th>
            <th>Availability Time</th>
            <th>Created At</th>
        </tr>

        <?php while ($row = $edu_result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['fullName'] ?></td>
            <td><?= $row['emailAddress'] ?></td>
            <td><?= $row['phoneNumber'] ?></td>
            <td><?= $row['curredu'] ?></td>
            <td><?= $row['stream'] ?></td>
            <td><?= $row['optionSelected'] ?></td>
            <td><?= $row['specificA'] ?></td>
            <td><?= $row['anyreq'] ?></td>
            <td><?= $row['availabilityTime'] ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<div id="mentorlist" class="table-container">
    <h3>Help Table</h3>
    <table class='table table-bordered'>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Availability_day</th>
            <th>Availability_time</th>
            <th>Occupation</th>
        </tr>

        <?php while ($row = $mente->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['availability_day'] ?></td>
            <td><?= $row['availability_time'] ?></td>
            <td><?= $row['occupation'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<div id="helpTable" class="table-container">
    <h3>Help Table</h3>
    <table class='table table-bordered'>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Availability_day</th>
            <th>Availability_time</th>
            <th>Email</th>
        </tr>

        <?php while ($row = $helpe->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['availability_day'] ?></td>
            <td><?= $row['availability_time'] ?></td>
            <td><?= $row['email'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<?php
$conn->close();
?>
</body>
</html>
