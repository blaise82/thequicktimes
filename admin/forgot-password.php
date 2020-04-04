<?php 
/* Reset your password form, sends reset.php password link */
include "../database/conn.php";
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $conn->escape_string($_POST['email']);
    $result = $conn->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        ?>
<script>
alert("User with that email doesn't exist!")
</script>
        <?php
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $someArray = array("email"=>$email, "secret"=>"thequicktimes020", "sol"=>"blaise");
        $hash = md5(serialize($someArray));
        $username = $user['username'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</p>";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Password Reset Link ( thequicktimes.com )';
        $message_body = '
        Hello '.$username.',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost:8080/thequicktimes/admin/reset.php?hash='.$hash;  

        mail($to, $subject, $message_body);

        ?>
<script>
alert("Please check your email for a confirmation link to complete your password reset")
</script>
        <?php
  }
}
?>

<!doctype html>
<html lang="en-us">
    
<!-- Mirrored from dashboard.zawiastudio.com/demo/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 27 Feb 2020 08:10:38 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Forgot Password | Dashboard UI Kit</title>
        <meta name="description" content="Dashboard UI Kit">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font -->
        <link href="../../external.html?link=https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/main.min3661.css">
    </head>
    <body class="o-page o-page--center">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <br>
        <br>
        <br>
        <br>
        <div class="o-page__card">
            <div class="c-card u-mb-xsmall">
                <header class="c-card__header u-text-center u-pt-large">
                    <a class="c-card__icon" href="#!">
                        <h1 style="color: white; font-size:1em;">TQT</h1>
                    </a>
                    <div class="row u-justify-center">
                        <div class="col-9">
                            <h1 class="u-h3">Forgot your password</h1>
                            <p class="u-h6 u-text-mute">
                                Enter your email address to receive password reset instructions
                            </p>
                        </div>
                    </div>
                </header>
                
                <form class="c-card__body"  method="post"  action="forgot-password.php">
                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="input1">Email Address:</label>
                        <input class="c-input" type="email" id="input1" name="email" placeholder="thequicktimes@dashboard.com" required> 
                    </div>

                    <button class="c-btn c-btn--info c-btn--fullwidth" type="submit">Send Password Reset Instructions</button>
                </form>
            </div>

            <a class="u-text-mute u-text-small" href="index.php">
                Sign In page?
            </a>
        </div>

        <!-- Main javascsript -->
        <script src="js/main.min3661.js"></script>

        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-88739867-2','auto');ga('send','pageview')
        </script>
        <script src="../../www.google-analytics.com/analytics.js" async defer></script>
    </body>

<!-- Mirrored from dashboard.zawiastudio.com/demo/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 27 Feb 2020 08:10:38 GMT -->
</html>