<!DOCTYPE html>
<html lang="en">
<head>
    <title>Footer Design</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="gc2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <style>
      .chat-textarea {
        resize: none;
        width: 85%;
        border-radius: 20px;
        padding: 8px 15px;
      }

      .send-btn {
        border: none;
        background: white;
        border-radius: 50px;
        font-size: 24px;
        color: black;
        cursor: pointer;
        transition: color 0.2s;
      }

      .send-btn:hover {
        color: white;
        background: black;
      }
  </style>
</head>
<body>
  <footer id="contact" class="footer bg-dark text-white pt-4">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-3">
          <h4>Quick Links</h4>
          <ul class="list-unstyled">
            <li><a href="index.php" class="text-white">About Us</a></li>
            <li><a href="index.php#service" class="text-white">Our Services</a></li>
            <li><a href="careers.php" class="text-white">Careers</a></li>
          </ul>
        </div>
        <div class="footer-col col-md-3">
          <h4>Contact Us</h4>
          <ul class="list-unstyled">
            <li><a href="tel:+919643460884" class="text-white">+91 9643460884</a></li>
            <li><a href="tel:+919971107469" class="text-white">+91 9971107469</a></li>
            <li><a href="https://maps.app.goo.gl/TnqUt6XzM7z62pBF8" class="text-white">Gurgaon, india - 122102</a></li>
          </ul>
        </div>

        <div class="footer-col col-md-3">
          <h4>Follow Us</h4>
          <div class="social-links">
            <a href="mailto:amritkumar25014@gmail.com" class="text-white"><i class="fab fa-google"></i></a>
            <a href="https://www.instagram.com/amrit_248/" class="text-white"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/amrit-kumar-196242228" class="text-white"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="footer-col col-md-3">
          <h4>Reach Us</h4>
          <form action="https://formsubmit.co/amritkumar25014@gmail.com" method="POST">
              <div class="mb-3">
                  <input type="email" name="Email" class="form-control"  placeholder="Email" required>
              </div>
              <input type="hidden" name="_next" value="http://localhost/Gyan.com1">
              <div class="mb-3 position-relative d-flex align-items-center">
                  <textarea class="form-control me-2" name="text" placeholder="Message" rows="2"  required></textarea><br>
                  <button type="submit" class="btn send-btn" aria-label="Send">➔</button>
              </div>
          </form>
        </div>
      </div>
      <div class="text-center pt-3">
        <p>&copy; <?php echo date("Y"); ?> CipherNix. All rights reserved.</p> <!-- Add a copyright notice -->
      </div>
    </div>
  </footer>
</body>
</html>
