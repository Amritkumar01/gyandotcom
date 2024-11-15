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
    <link rel="stylesheet" href="gc3.css">
    <link rel="stylesheet" href="gc.css">
</head>
<body data-spy="scroll">

<!-- Navbar -->
<?php include 'navbar.php'; ?>
<br><br><br>
<h1 class="text-center">Helping Hand</h1>
<br>
<p class="oneone">We provide a wide array of services tailored to meet diverse needs, from personal assistance and elderly care to home management and daily living tasks. Our goal is to enhance quality of life by delivering tailored solutions for individuals seeking support and care.</p>
<br>
<br>
<p class="xx">Fill out the form below to get started:</p>

<!-- Form Section -->
<div class="container my-5">
    <form action="checkout3.php" id="mainform" method="post">
        
        <!-- Row 1: Full Name & Email -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="emailAddress">Email Address</label>
                <input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="Enter your email" required>
            </div>
        </div>

        <!-- Row 2: Mobile Number & Date of Birth -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mobileNumber">Mobile Number</label>
                <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Enter your mobile number" required>
            </div>
            <div class="form-group col-md-6">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
        </div>

        <!-- Row 3: Communication Type & Availability Day -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="communicationType">Communication Type</label>
                <select class="form-control" id="communicationType" name="communicationType" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Voice Call">Voice Call</option>
                    <option value="Video Call">Video Call</option>
                    <option value="Chat">Chat</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="availabilityDay">Availability - Day</label>
                <select class="form-control" id="availabilityDay" name="availabilityDay" required>
                    <option value="" disabled selected>Select Day</option>
                    <option value="today">Today</option>
                    <option value="tomorrow">Tomorrow</option>
                </select>
            </div>
        </div>

        <!-- Row 4: Availability Time & Preferred Language -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="availabilityTime">Availability - Time</label>
                <select class="form-control" id="availabilityTime" name="availabilityTime" required>
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
            <div class="form-group col-md-6">
                <label for="preferredLanguage">Preferred Language</label>
                <select class="form-control" id="preferredLanguage" name="preferredLanguage" required>
                    <option value="" disabled selected>Select</option>
                    <option value="English">English</option>
                    <option value="Hindi">Hindi</option>
                </select>
            </div>
        </div>

        <!-- Row 5: Gender & Why You Need Us -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                    <option value="Prefer not to disclose">Prefer not to disclose</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="requirements">Any Specific Requirements</label>
                <input type="text" class="form-control" id="requirements" name="requirements" placeholder="Enter any specific requirements">
            </div>
        </div>

        <!-- Row 6: Why You Need Us -->
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="whyUs">Why You Need Us</label>
                <textarea class="form-control" id="whyUs" name="whyUs" rows="3" placeholder="Tell us why you need us" required></textarea>
            </div>
        </div>
        
        <button type="button" class="btn btn-primary" id="nextBtn2">Next</button>
    

    <!-- Helper Selection Section -->
    <div id="helpSelection" class="mt-5" style="display:none;">
        <h2 style="color: white;">Select a help</h2>
        <p>Based on your filters, here are the available helpers:</p>
        <select id="helperSelect" class="form-control" name="helperSelect" style="border-radius: 50px;" required>
            <!-- Helper options will be dynamically inserted here -->
        </select>
        <br>
        <button id="submitBtn" type="submit" class="btn btn-primary">Proceed to Payment</button>
    </div>
    </form>
</div>

<!-- Footer -->
<?php include 'footer.php'; ?> 

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // JavaScript to handle the next button and helper selection
    $('#nextBtn2').click(function() {
        let availabilityDay = $('#availabilityDay').val();
        let availabilityTime = $('#availabilityTime').val();

        // AJAX call to fetch matching helpers
        $.ajax({
            url: 'help_fetch.php', // A PHP file to fetch helpers based on the filters
            method: 'POST',
            data: {
                availabilityDay: availabilityDay,
                availabilityTime: availabilityTime,
            },
            success: function(response) {
                let helpers = JSON.parse(response);
                let helperSelect = $('#helperSelect');

                // Clear any previous options
                helperSelect.empty();

                // Add helper options
                if (helpers.length > 0) {
                    helpers.forEach(helper => {
                        let displayName = `${helper.name} - ${helper.availability_day} - ${helper.availability_time}`;
                        helperSelect.append(new Option(displayName, helper.id));
                    });
                } else {
                    helperSelect.append(new Option('No matching helper found, here are random ones', 'default'));
                }

                // Show the helper selection section
                $('#helpSelection').show();
            }
        });
    });
    $('#submitBtn').click(function() {
        $('#mainForm').submit(); // Submit the main form
    });
</script>
</body>
</html>
