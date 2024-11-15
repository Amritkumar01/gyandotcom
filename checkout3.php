<?php
session_start(); // Start the session to store the user data

// Database connection
$servername = "localhost";
$username = "root";
$password = "ak@AK123";
$dbname = "mentors_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data and store in session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store user form data in session
    $_SESSION['help_data'] = [
        'fullName' => $_POST['fullName'],
        'emailAddress' => $_POST['emailAddress'],
        'mobileNumber' => $_POST['mobileNumber'],
        'dob' => $_POST['dob'],
        'communicationType' => $_POST['communicationType'],
        'availabilityDay' => $_POST['availabilityDay'],
        'availabilityTime' => $_POST['availabilityTime'],
        'preferredLanguage' => $_POST['preferredLanguage'],
        'gender' => $_POST['gender'],
        'requirements' => $_POST['requirements'],
        'whyUs' => $_POST['whyUs'],
        'helperSelect' => $_POST['helperSelect']  // Assuming the form field for helper selection is named 'mentorSelect'
    ];
}


require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51QLUCmAo7uph57GZPe66jJWe9JzPeZRReTjCzM7FO1ekx9UaUV4O2Vii86mnDnrxSeYDIgkfVgUn72c6XN3oCrcP00spsbE4I7";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/Gyan.com1/submit_form.php",
    "cancel_url" => "http://localhost/Gyan.com1/index.php",
    "locale" => "auto",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "inr",
                "unit_amount" => 10000,
                "product_data" => [
                    "name" => "G.C"
                ]
            ]
        ]      
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);