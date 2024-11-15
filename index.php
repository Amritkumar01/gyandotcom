<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gyan</title>
    <meta charset="UTF-8">
    <meta name="author" content="Amrit Kumar">
    <meta name="keywords" content="Amrit Kumar, Web Developer, Software Engineer">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="gc.css">
    <style>
        .hero {
            flex-direction: column;
            margin-left: 70px;
            margin-top: 80px;
            margin-right: 80px;
        }
        .hero h1 {
            font-size: 68px;
            color: white;
            margin-bottom: 20px;
        }

        .hero h2 {
            font-size: 28px;
            color: white;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            color: white;
            margin-bottom: 30px;
            margin-right: 500px;
        }
        .hero .join-button {
            padding: 12px 24px;
            background-color: #ff5e14;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 18px;
            transition: background-color 0.3s;
        }
        .hero .join-button:hover {
            background-color: #e55b12;
        }
        .chatbot {
            position: fixed; right: 20px; bottom: 80px;
            cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            background-color: #ff5e14; border-radius: 50%;
            width: 60px; height: 60px;
        }
        .chatbox {
            display: none; /* Hide initially */
            position: fixed; right: 30px; bottom: 150px;
            width: 300px; height: 400px;
            background-color: white; border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            flex-direction: column;
            overflow: hidden;
            z-index: 1000;
        }
        .chat-header {
            padding: 10px; background-color: #ff5e14; color: white; font-weight: bold;
            text-align: center;
        }
        .chat-body {
            flex-grow: 1; padding: 1px; overflow-y: auto;
        }
        .chat-footer {
            padding: 10px; display: flex;
        }
        .chat-footer input[type="text"] {
            flex: 1; padding: 5px;
            border: 1px solid #ddd; border-radius: 5px;
        }
        .chat-footer button {
            margin-left: 5px; padding: 5px 10px;
            background-color: #ff5e14; color: white; border: none;
            border-radius: 5px; cursor: pointer;
        }
        .toggle-button {
            display: none; /* Hide the "X" initially */
            position: fixed; right: 25px; bottom: 110px;
            font-size: 18px; background-color: #ff5e14;
            color: white; border: none;
            border-radius: 50%; width: 35px; height: 35px;
            cursor: pointer;
          }
          .form-container {
            display: flex;
            flex-direction: column;
            padding: 0px;
        }
        .form-container button {
            background-color: #ff5e14;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #e55b12;
        }
        .selection-buttons {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .selection-buttons button {
            width: 48%; /* Each button will take 48% width to fit 2 buttons per row */
        }
    </style>
</head>
<body data-spy="scroll">

<!-- Navbar -->
<?php include 'navbar.php'; ?>
<!-- Hero Section -->
<div class="hero">
    <h1>The Power<br> of Good Advice</h1>
    <h2> Your Personalized Mentorship Hub<br><br>
In today's fast-paced world, finding reliable, personalized advice can be challenging. Whether you're navigating your educational journey, staying on top of fashion trends, improving lifestyle habits, or mastering the art of cooking, we’re here to support you every step of the way. From career guidance to personal development and creative hobbies, we’re here to support you every step of the way.</h2>
    <br>
    <a href="#service" class="join-button">Try Us!</a>
</div>
</div>
<br><br>
<div class="chatbot" onclick="toggleChat()">
    <img src="chat.jpg" style="border: 4px solid #9AC5F4; border-radius:100px;" width="70px" height="60px" alt="Chatbot Icon">
</div>



<!-- Chatbox -->
<div id="chatbox" class="chatbox">
    <div class="chat-header">Chat with Us</div>
    <div class="chat-body" id="chatBody">
        <div class="bot-message" style="padding: 5px;">  Hello! How can I assist you today?</div>
    
    <div class="chat-footer">
        <div class="form-container" id="formContainer">
            <h3>Choose an Option:</h3>
            <form action="https://formsubmit.co/amritkumar25014@gmail.com" method="POST">
              <div class="form-group">
                <label for="selectneed">Select an Option</label>
                <select class="form-control" id="selectneed" name="selectneed" onchange="showForm()" required>
                    <option value="" disabled selected>Select an Option</option>
                    <option value="professional">Professional</option>
                    <option value="personal">Personal</option>
                    <option value="feedback">Feedback</option>
                    <option value="other">Other</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name">
                </div>
                <div class="form-group">
                    <label for="emailAddress">Email Address</label>
                    <input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number">
                </div>

                <div id="professionalForm" style="display: none;">
                  <div class="form-group">
                      <label for="occupation">Occupation</label>
                      <select class="form-control" id="occupation" name="occupation">
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
                          <option value="Other">Others</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="preferredLanguage">Preferred Language</label>
                    <select class="form-control" id="preferredLanguage" name="preferredLanguage">
                        <option value="" disabled selected>Select</option>
                        <option value="English">English</option>
                        <option value="Hindi">Hindi</option>
                    </select>
                  </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control" id="gender" name="gender" >
                      <option value="" disabled selected>Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Female">Others</option>
                      <option value="Prefer not to disclose">Prefer not to disclose</option>
                  </select>
                </div>
                <input type="hidden" name="_next" value="http://localhost/Gyan.com1">
                <div class="form-group">
                    <label for="issue">Enter your Issue</label>
                    <textarea class="form-control" id="issue" name="issue" rows="1" placeholder="Enter any Issue"></textarea>
                </div>
              </div>
              <!-- Dynamic Form for Personal -->
              <div id="personalForm" style="display: none;">
                <div class="form-group">
                    <label for="issue1">Enter your Issue</label>
                    <textarea class="form-control" id="issue1" name="issue1" rows="1" placeholder="Enter any Issue"></textarea>
                </div>
              </div>

              <div id="feedbackForm" style="display: none;">
                <div class="form-group">
                    <label for="feedback">Feedback</label>
                    <textarea class="form-control" id="feedback" name="feedback" rows="1" placeholder="Enter any Feedback"></textarea>
                </div>
              </div>

              <div id="otherForm" style="display: none;">
                <div class="form-group">
                    <label for="message">Enter your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="1" placeholder="Enter any Message"></textarea>
                </div>
              </div>
                <!-- Selection Buttons -->
                                <input type="hidden" name="_next" value="http://localhost/Gyan.com1">

            <button type="submit">Submit</button>
            </form>
        </div>
      </div>
    </div>
</div>


<?php include 'service.php'; ?> 
<?php include 'footer.php'; ?> 
<div class="scroll_1">
  <button class="scrollToTopBtn"><font size="5px">↑</font></button>
</div>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(".input").focus(function() {
      $(this).parent().addClass("focus");
    })
    var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
    var rootElement = document.documentElement;

    function handleScroll() {
      var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
      if (rootElement.scrollTop / scrollTotal > 0.8) {
        // Show button
        scrollToTopBtn.classList.add("showBtn");
      } else {
        // Hide button
        scrollToTopBtn.classList.remove("showBtn");
      }
    }

    function scrollToTop() {
      // Scroll to top logic
      rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    }
    scrollToTopBtn.addEventListener("click", scrollToTop);
    document.addEventListener("scroll", handleScroll);

    //Read more Read less logic
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
      }
    }
    function showPopup(imageSrc) {
      document.getElementById('popupImg').src = imageSrc;
      document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
      document.getElementById('popup').style.display = 'none';
    }
</script>
<script>
    function toggleChat() {
        const chatbox = document.getElementById("chatbox");

        if (chatbox.style.display === "none" || chatbox.style.display === "") {
            chatbox.style.display = "flex";  // Show chatbox
        } else {
            chatbox.style.display = "none";  // Hide chatbox
        }
    }

    function showForm() {
        var selectedOption = document.getElementById("selectneed").value;
        
        // Hide both forms initially
        document.getElementById("professionalForm").style.display = "none";
        document.getElementById("personalForm").style.display = "none";
        document.getElementById("feedbackForm").style.display = "none";
        document.getElementById("otherForm").style.display = "none";
        
        // Show the corresponding form based on the selected option
        if (selectedOption === "professional") {
            document.getElementById("professionalForm").style.display = "block";
        } else if (selectedOption === "personal") {
            document.getElementById("personalForm").style.display = "block";
        }
        else if (selectedOption === "feedback") {
            document.getElementById("feedbackForm").style.display = "block";
        }
        else if (selectedOption === "other") {
            document.getElementById("otherForm").style.display = "block";
        }
    }
</script>

</body>
</html>
