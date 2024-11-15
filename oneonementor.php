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
<h1 class="text-center">1:1 Mentorship</h1>
<br>
<p class="oneone">Welcome to our premium one-on-one mentorship platform! We specialize in personalized mentorship to help you excel in various areas, including academics, career development, culinary arts, lifestyle improvement, and business strategy. Our expert mentors provide tailored guidance to support your unique goals and empower you to achieve success.</p>;
<br>
<br>
<p class="xx">Fill the below form to get started:</p>

<!-- Form Section -->
<div class="container my-5">
    <form action="checkout.php" id="mainform1" method="post">
        
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
                    <option value="Today">Today</option>
                    <option value="Tomorrow">Tomorrow</option>
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

        <!-- Row 5: Gender & Occupation -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Female">Others</option>
                    <option value="Prefer not to disclose">Prefer not to disclose</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="occupation">Occupation</label>
                <select class="form-control" id="occupation" name="occupation" required>
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
        </div>

        <!-- Row 6: Area of Interest & Why You Need Us -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="areaOfInterest">Area of Interest</label>
                <input type="text" class="form-control" id="areaOfInterest" name="areaOfInterest" placeholder="Enter your area of interest" required>
            </div>
            <div class="form-group col-md-6">
                <label for="whyUs">Why You Need Us</label>
                <textarea class="form-control" id="whyUs" name="whyUs" rows="3" placeholder="Tell us why you need us" required></textarea>
            </div>
        </div>

        <!-- Row 7: Hobbies & Interests and Specific Requirements -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="hobbies">Hobbies and Interests</label>
                <textarea class="form-control" id="hobbies" name="hobbies" rows="3" placeholder="Enter your hobbies and interests" required></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="requirements">Any Specific Requirements</label>
                <textarea class="form-control" id="requirements" name="requirements" rows="3" placeholder="Enter any specific requirements" required></textarea>
            </div>
        </div>
        
        <!-- Submit Button -->
        <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
    

    <!-- Mentor Selection Section -->
    <div id="mentorSelection" class="mt-5" style="display:none;">
        <h2 style="color: white;">Select a Mentor</h2>
        <p>Based on your filters, here are the available mentors:</p>
        <select id="mentorSelect" class="form-control" style="border-radius: 50px ;" name="mentorSelect" required>
            <!-- Mentor options will be dynamically inserted here -->
        </select>
        <br>
        <button id="submitBtn1" type="submit" class="btn btn-primary">Proceed to Payment</button>
    </div>
    </form>
</div>

<!-- Footer -->
<?php include 'footer.php'; ?>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // JavaScript to handle the next button and mentor selection
    $('#nextBtn').click(function() {
        // Gather form data
        let availabilityDay = $('#availabilityDay').val();
        let availabilityTime = $('#availabilityTime').val();
        let occupation = $('#occupation').val();

        // AJAX call to fetch matching mentors
        $.ajax({
            url: 'fetch_mentors.php', // A PHP file to fetch mentors based on the filters
            method: 'POST',
            data: {
                availabilityDay: availabilityDay,
                availabilityTime: availabilityTime,
                occupation: occupation
            },
            success: function(response) {
                // Parse the JSON response
                let mentors = JSON.parse(response);
                let mentorSelect = $('#mentorSelect');

                // Clear any previous options
                mentorSelect.empty();

                // Add mentor options
                if (mentors.length > 0) {
                    mentors.forEach(mentor => {
                        // Create a display string that includes the mentor's name, availability day, and time
                        let displayName = `${mentor.name} - ${mentor.availability_day} - ${mentor.availability_time}`;
                        mentorSelect.append(new Option(displayName, mentor.id));
                    });
                } else {
                    mentorSelect.append(new Option('No matching mentors found, here are random ones', 'default'));
                }


                // Show the mentor selection section
                $('#mentorSelection').show();
            }
        });
    });
    $('#submitBtn1').click(function() {
        $('#mainform1').submit(); // Submit the main form
    });
</script>
</body>
</html>