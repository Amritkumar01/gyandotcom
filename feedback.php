<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <style>
    /* Reset default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background-color: #121212;
      color: #e0e0e0;
      padding: 20px;
    }
    .container22 {
      width: 100%;
      max-width: 450px;
      background-color: #1e1e1e;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      margin-bottom: 20px;
    }
    h2 {
      text-align: center;
      color: #F17829;
      margin-bottom: 20px;
    }
    form label {
      font-size: 1rem;
      margin-bottom: 8px;
      color: #F17829;
      display: block;
    }
    form input[type="text"],
    form input[type="email"],
    form select,
    form textarea {
      width: 100%;
      padding: 12px;
      margin-top: 8px;
      background-color: #333;
      border: 1px solid #555;
      border-radius: 4px;
      color: #e0e0e0;
      font-size: 1rem;
    }
    form input[type="text"]:focus,
    form input[type="email"]:focus,
    form select:focus,
    form textarea:focus {
      outline: none;
      border-color: #F17829;
    }
    form button {
      width: 100%;
      padding: 14px;
      background-color: #F17829;
      color: #1e1e1e;
      font-size: 1.1rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 15px;
    }
    form button:hover {
      background-color: #e56723;
    }
    .success-message {
      text-align: center;
      color: #F17829;
      font-size: 1.2rem;
      margin-top: 20px;
    }
    .home-button {
      width: 100%;
      padding: 12px;
      background-color: #028b90;
      color: white;
      font-size: 1rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 20px;
    }
    .home-button:hover {
      background-color: #017b7a;
    }
  </style>
</head>
<body>
  <div class="container22">
    <h2>Feedback Form</h2>
    
    <!-- Success message displayed above the form -->
    <div class="success-message">
      <p>Your payment has been successfully processed.</p>
    </div>

    <form action="https://formsubmit.co/amritkumar25014@gmail.com" method="POST">
      <label for="name22">Name</label>
      <input type="text" id="name22" name="name" placeholder="Enter your name" required>
      
      <label for="email22">Email</label>
      <input type="email" id="email22" name="email" placeholder="Enter your email" required>
      
      <input type="hidden" name="_next" value="http://localhost/Gyan.com1">
      
      <label for="rating22">Rating</label>
      <select id="rating22" name="rating" required>
        <option value="">Rate us</option>
        <option value="5">Excellent</option>
        <option value="4">Good</option>
        <option value="3">Average</option>
        <option value="2">Below Average</option>
        <option value="1">Poor</option>
      </select>
      
      <label for="feedback22">Feedback</label>
      <textarea id="feedback22" name="feedback" rows="5" placeholder="Write your feedback here..." required></textarea>
      
      <button type="submit">Submit</button>
    </form>

    <!-- Home button inside the feedback form box -->
    <button class="home-button" onclick="window.location.href='index.php';">Home</button>
  </div>

</body>
</html>
