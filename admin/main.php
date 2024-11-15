<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Records</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <div class="container my-5">
    <h2 class="text-center">Records</h2>
    <button id="add-mentor-record" class="btn btn-primary">Add Mentor Record</button>
    <button id="add-helping-record" class="btn btn-secondary">Add Helping Record</button>
    <a href="/Gyan.com1/index.php"><button class="btn btn-secondary">Home</button></a>
    <div id="table-container" class="my-4">
      <!-- Tables will be dynamically populated here -->
    </div>

    
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    // Fetch data on page load
    $(document).ready(function() {
      $.ajax({
        url: "fetch_data.php",
        method: "GET",
        success: function(data) {
          $('#table-container').html(data);
        }
      });

      // Add record buttons functionality
      $('#add-mentor-record').click(function() {
        window.location.href = 'add_mentor_record.php';
      });

      $('#add-helping-record').click(function() {
        window.location.href = 'add_helping_record.php';
      });
    });
  </script>
</body>
</html>
