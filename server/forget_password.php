<?php
/* Reset your password form, sends reset.php password link */
include "../database/conn.php";

// Check if form submitted with method="post"
    $email = $conn->escape_string($_POST['email']);
    $result = $conn->query("SELECT * FROM users WHERE email='$email'");

    $user = $result->fetch_assoc(); // $user becomes array with user data

    $email = $user['email'];
    $hash = $user['hash'];
    $first_name = $user['first_name'];

    // Session message to display on success.php
    $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</p>";

    // Send registration confirmation link (reset.php)
    $to      = $email;
    $subject = 'Password Reset Link ( thequicktimes.com )';
    $message_body = '
        Hello ' . $username . ',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost/login-system/reset.php?email=' . $email . '&hash=' . $hash;

    mail($to, $subject, $message_body);

    header("location: ../admin/forgot-password.php");
