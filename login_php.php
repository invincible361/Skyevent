<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the username and password (dummy values for demonstration)
    $validUsername = "demoUser";
    $validPassword = "demoPassword";

    // Check if the provided credentials match the valid credentials
    if ($username == $validUsername && $password == $validPassword) {
        // Authentication successful, redirect to a dashboard or home page
        header("Location: dashboard.html");
        exit();
    } else {
        // Authentication failed, redirect back to the login page with an error message
        header("Location: login.php?error=1");
        exit();
    }
} else {
    // If the form is not submitted, redirect to the login page
    header("Location: login.php");
    exit();
}
?>
