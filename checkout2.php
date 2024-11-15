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

// Capture form data and store it in session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store user form data in session
    $_SESSION['edu_form_data'] = [
        'fullName' => $_POST['fullName'],
        'emailAddress' => $_POST['emailAddress'],
        'phoneNumber' => $_POST['phoneNumber'],
        'curredu' => $_POST['curredu'],
        'stream' => $_POST['stream'],
        'optionSelected' => $_POST['optionSelected'],
        'specificA' => $_POST['specificA'] ?? null,
        'anyreq' => $_POST['anyreq'] ?? null,
        'availabilityTime' => $_POST['availabilityTime'] ?? null
    ];
}


require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "Your_Key";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/Gyan.com1/submit_form3.php",
    "cancel_url" => "http://localhost/Gyan.com1/index.php",
    "locale" => "auto",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "inr",
                "unit_amount" => 20000,
                "product_data" => [
                    "name" => "G.C"
                ]
            ]
        ]      
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);
