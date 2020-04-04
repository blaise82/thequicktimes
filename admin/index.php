<!doctype html>
<html lang="en-us">
    
<!-- Mirrored from dashboard.zawiastudio.com/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 27 Feb 2020 08:10:38 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Log in | Dashboard UI Kit</title>
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
                <header class="c-card__header u-pt-large">
                    <a class="c-card__icon" href="#!">
                        <h1 style="color: white; font-size:1em;">TQT</h1>
                    </a>
                    <h1 class="u-h3 u-text-center u-mb-zero">Welcome back! Please login.</h1>
                </header>
                
                <form class="c-card__body"  method="post"  action="../server/signin.php">
                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="input1">Log in with your e-mail address</label> 
                        <input class="c-input" type="email" id="input1" name="email" placeholder="thequicktimes@dashboard.com"> 
                    </div>

                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="input2">Password</label> 
                        <input class="c-input" type="password" name="password" id="input2" placeholder="Numbers, Letters..."> 
                    </div>

<input type="submit" name="signin" class="c-btn c-btn--info c-btn--fullwidth" value="Sign in to Dashboard">

                </form>
            </div>

            <div class="o-line">
                <a class="u-text-mute u-text-small" href="forgot-password.php">Forgot Password?</a>
            </div>
        </div>

        <!-- Main javascsript -->
        <script src="js/main.min3661.js"></script>

        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-88739867-2','auto');ga('send','pageview')
        </script>
        <script src="../../www.google-analytics.com/analytics.js" async defer></script>
    </body>

<!-- Mirrored from dashboard.zawiastudio.com/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 27 Feb 2020 08:10:38 GMT -->
</html>