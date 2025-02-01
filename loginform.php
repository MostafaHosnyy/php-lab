<?php

$email = $_POST['email'];
$password = $_POST['password'];

$valid_login = false;

$file = fopen("customer.txt", "r");

if ($file) {
    while (($line = fgets($file)) !== false) {
        list($stored_email, $stored_password) = explode(",", trim($line)); 
        if ($email == $stored_email && $password == $stored_password) {
            $valid_login = true;
            break;
        }
    }
    fclose($file);
}

if ($valid_login) {
    echo "<h2>Login success</h2>";

    // Start new session
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['login'] = true;

    header('Location: home.php');
    exit();
} else {
    echo "<h2>Invalid login</h2>";

    header('Location: login.php?invalid=invalidemailorpassword');
    exit();
}

