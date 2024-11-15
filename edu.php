<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gyan</title>
    <meta charset="UTF-8">
    <meta name="author" content="Amrit Kumar">
    <meta name="keywords" content="Amrit Kumar, Web Developer, Software Engineer">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="gc.css">
    <link rel="stylesheet" href="gc3.css">
</head>
<body>

<!-- Navbar -->
<?php include 'navbar.php'; ?>
<br><br><br>
<h1 class="text-center">Education</h1>
<br>
<p class="oneone">We offer comprehensive education services designed to empower individuals with knowledge and skills for personal and professional growth. Our programs span a variety of subjects and are tailored to different learning levels, ensuring everyone can access quality education. Through interactive learning experiences and expert guidance, we equip our participants with the tools they need to succeed in a rapidly changing world. Our commitment to accessibility and inclusivity ensures that everyone has the opportunity to thrive.</p>
<br>
<br>
<!-- Option Selection -->
<div class="container">
    <div class="form-group">
        <label for="formType" style="color: white;">Select Type:</label>
        <select id="formType" style="border-radius: 50px;" class="form-control">
            <option value="" disabled selected>Select an option</option>
            <option value="Notes">Notes</option>
            <option value="PC">Private Class</option>
            <option value="RL">Recorded Lecture</option>
        </select>
    </div>
</div>
<br>
<!-- Forms for Each Selection -->
<div class="container my-5" id="formContainer" style="display:none;">
    <!-- Common Information -->
    <form action="checkout2.php" method="post">
                <input type="hidden" id="optionSelected" name="optionSelected" value="">

        <div style="color: white;">
        <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="emailAddress">Email Address</label>
            <input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
            <label for="curredu">What you are pursuing</label>
            <input type="text" class="form-control" id="curredu" name="curredu" placeholder="Enter your current education" required>
        </div>
        <div class="form-group">
            <label for="stream">Stream/Branch Name</label>
            <input type="text" class="form-control" id="steam" name="stream" placeholder="Enter your Stream/Branch" required>
        </div>
        <div class="form-group">
                <label for="specificA">List the topics and subject name you want to learn:</label>
                <input type="text" class="form-control" id="specificA" name="specificA" placeholder="Enter the topic and subject, e.g., Graph - Data Structures">
            </div>
        <div class="form-group">
                <label for="anyreq">Any Specific Requirement:</label>
                <input type="text" class="form-control" id="anyreq" name="anyreq" placeholder="Enter any specific requirement">
            </div>
        </div>
        <!-- Form for Option B -->
        <div id="formB" style="display:none; color: white;">
            <div class="form-group">
                <label for="specificB">Availability - Time</label>
                <select class="form-control" id="availabilityTime" name="availabilityTime">
                    <option value="" disabled selected>Select Time</option>
                    <option value="08:00 AM">08:00 AM</option>
                    <option value="09:00 AM">09:00 AM</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="01:00 PM">01:00 PM</option>
                    <option value="02:00 PM">02:00 PM</option>
                    <option value="03:00 PM">03:00 PM</option>
                    <option value="04:00 PM">04:00 PM</option>
                    <option value="05:00 PM">05:00 PM</option>
                    <option value="06:00 PM">06:00 PM</option>
                    <option value="07:00 PM">07:00 PM</option>
                    <option value="08:00 PM">08:00 PM</option>
                    <option value="09:00 PM">09:00 PM</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Proceed to Payment</button>
    </form>
</div>

<!-- Footer -->
<?php include 'footer.php'; ?> 

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Show specific form based on selected option
    $('#formType').change(function() {
        const selectedOption = $(this).val();
        $('#optionSelected').val(selectedOption); // Set the hidden input field value
        
        $('#formA, #formB, #formC').hide(); // Hide all specific forms
        $('#formContainer').show(); // Show the main form container

        if (selectedOption === 'Notes') {
            $('#formA').show();
        } else if (selectedOption === 'PC') {
            $('#formB').show();
        } else if (selectedOption === 'RL') {
            $('#formC').show();
        }
    });

    // Optional: Trigger the change event when the Next button is clicked
    $('#nextBtn').click(function() {
        $('#formType').change();
    });
</script>


</body>
</html>
