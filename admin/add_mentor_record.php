<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Mentor Record</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
  <div class="container my-5">
    <h2>Add New Mentor Record</h2>
    <form action="insert_mentor.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="availability_day" class="form-label">Availability Day</label>
        <select class="form-select" id="availability_day" name="availability_day" required>
          <option value="" disabled selected>Select</option>
          <option value="today">Today</option>
          <option value="tomorrow">Tomorrow</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="availability_time" class="form-label">Availability Time</label>
        <input type="text" class="form-control" id="availability_time" name="availability_time" placeholder="12:00 AM" required>
      </div>
      <div class="mb-3">
        <label for="occupation" class="form-label">Occupation</label>
        <select class="form-select" id="occupation" name="occupation" required>
          <option value="" disabled selected>Select</option>
          <option value="Business">Business</option>
          <option value="Education">Education</option>
          <option value="Engineer">Engineer</option>
          <option value="Entertainment">Entertainment</option>
          <option value="Finance">Finance</option>
          <option value="Healthcare">Healthcare</option>
          <option value="Law">Law</option>
          <option value="Manager">Manager</option>
          <option value="Sport">Sport</option>
          <option value="Student">Student</option>
          <option value="Technology">Technology</option>
          <option value="Others">Others</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Add Record</button>
    </form>
  </div>
</body>
</html>
