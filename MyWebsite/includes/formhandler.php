<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $passkey = htmlspecialchars($_POST["passkey"]);

    if (empty($username)) {
        header("Location: ../index.php");
        exit();
    }
    if (empty($email)) {
        header("Location: ../index.php");
        exit();
    }
    if (empty($passkey)) {
        header("Location: ../index.php");
        exit();
    }

    header("Location: ../index.php");

    #insert data into database below
} else {
    header("Location: ../index.php");
}