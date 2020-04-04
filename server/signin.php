<?php 
   session_start();

include "../database/conn.php";
$email = $conn->escape_string($_POST['email']);
$result = $conn->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    echo 'user not found';
    header("location: ../admin");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['type'] = $user['type'];
        $_SESSION['id'] = $user['id'];
             $_SESSION['loggedin'] = true;
             if($_SESSION['type'] === "admin"){
               header("location: ../admin/home-overview.php");
             }
    }
    else {
      header("location: ../admin");
    }
}