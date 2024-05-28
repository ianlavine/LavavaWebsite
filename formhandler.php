<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $passkey = htmlspecialchars($_POST["passkey"]);

    if (empty($username)) {
        header("Location: ../register.html");
        exit();
    }
    if (empty($email)) {
        header("Location: ../regiser.html");
        exit();
    }
    if (empty($passkey)) {
        header("Location: ../register.html");
        exit();
    }

    header("Location: ../register.html");

    #insert data into database below
} else {
    header("Location: ../register.html");
}