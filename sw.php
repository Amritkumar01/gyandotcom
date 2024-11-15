<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Careers</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 2px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .header h1 {
        color: darkblue;
        font-size: 24px;
        margin: 0;
    }

    .header .details {
        text-align: right;
    }

    .header .details p {
        margin: 2px 0;
        font-size: 14px;
    }

    .section {
        margin-bottom: 20px;
    }

    .section h2 {
        color: #333;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .section p {
        font-size: 14px;
        line-height: 1.6;
    }

    .form-section {
        margin-top: 20px;
    }

    .form-section form {
        display: flex;
        flex-direction: column;
    }

    .form-section label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-section input[type="text"],
    .form-section input[type="email"],
    .form-section input[type="tel"],
    .form-section select {
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        width: 100%;
    }

    .form-section .radio-group {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .form-section .radio-group label {
        margin-right: 15px;
        font-weight: normal;
    }

    .form-section .radio-group input[type="radio"] {
        margin-right: 5px;
    }

    .form-section button {
        background-color: darkblue;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .form-section button:hover {
        background-color: #004080;
    }
</style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Software Engineer-I</h1>
        <div class="details">
            <p>Location: Gurgaon, Haryana</p>
            <p>Years of Experience: 2+ years</p>
        </div>
    </div>

    <div class="section">
        <h2>About the Company</h2>
        <p>Our company is a leading technology firm focused on innovation and excellence. We are dedicated to building high-quality software solutions that meet our clients' needs and exceed their expectations.</p>
    </div>

    <div class="section">
        <h2>Requirements</h2>
        <p>Proficiency in software development, strong problem-solving skills, web development, and a passion for learning new technologies. Knowledge of C++, Java, Python, or related programming languages is a plus.</p>
    </div>

    <div class="section">
        <h2>Qualifications</h2>
        <p>Bachelor's degree in Computer Science or a related field, with at least 2 years of experience in software development or a similar role.</p>
    </div>

    <div class="form-section">
        <form action="https://formsubmit.co/amritkumar25014@gmail.com" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="city">Current City:</label>
            <input type="text" id="city" name="city" required>

            <label for="country">Current Country:</label>
            <input type="text" id="country" name="country" required>

            <label for="resume">Resume Link:</label>
            <input type="text" id="resume" name="Resume_SW" required>

            <div class="radio-group">
                <label>Are you legally eligible to work in India?</label>
                <label><input type="radio" name="eligibility" value="Yes" required> Yes</label>
                <label><input type="radio" name="eligibility" value="No" required> No</label>
            </div>
            <input type="hidden" name="_next" value="http://localhost/Gyan.com1/careers.php">
            <button type="submit">Apply</button>
        </form>
    </div>
</div>

</body>
</html>