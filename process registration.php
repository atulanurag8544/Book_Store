<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];

    // Store the data in a session variable (you can use a database in a real application).
    session_start();
    $_SESSION["profileData"] = array(
        "firstName" => $firstName,
        "lastName" => $lastName,
        "email" => $email
    );

    // Redirect to the profile display page.
    header("Location: profile.php");
    exit;
}
