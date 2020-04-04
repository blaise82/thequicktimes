
<?php 
include('../database/conn.php');
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['loggedin'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else
{ 
$username=$_SESSION['username'];
$type=$_SESSION['type'];
$email=$_SESSION['email'];
$id=$_SESSION['id'];
if($type !== "admin"){
    header( "location: ../admin/index.php" );
}
}
?>

<!doctype html>
<html lang="en-us">
    
<!-- Mirrored from dashboard.zawiastudio.com/demo/home-overview.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 27 Feb 2020 08:02:49 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home Overview | Dashboard UI Kit</title>
        <meta name="description" content="Dashboard UI Kit">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font -->
        <link href="../../external.html?link=https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/main.min3661.css">
        <link rel="stylesheet" href="css/mine.css">
    </head>
    <body class="o-page">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div class="o-page__sidebar js-page-sidebar">
            <div class="c-sidebar">
                <a class="c-sidebar__brand" href="#">
                    <img class="c-sidebar__brand-img" src="img/logo.png" alt="Logo"> The Quick Times
                </a>
                
                <h4 class="c-sidebar__title">Dashboards</h4>
                <ul class="c-sidebar__list">

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link is-active" href="home-overview.php">
                            <i class="fa fa-home u-mr-xsmall"></i>Overview
                        </a>
                    </li>
                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link "   target="_blank" href="categories.php">
                            <i class="fa fa-tag u-mr-xsmall"></i>Categories
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="analytics.html">
                            <i class="fa fa-newspaper-o u-mr-xsmall"></i>Stories
                        </a>
                    </li>
                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="user-profile.html">
                            <i class="fa fa-street-view u-mr-xsmall"></i>Manage Users 
                        </a>
                    </li>
                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="../server/logout.php">
                            <i class="fa fa-sign-in u-mr-xsmall"></i>Logout
                        </a>
                    </li>
                </ul>




            </div><!-- // .c-sidebar -->
        </div><!-- // .o-page__sidebar -->

        <main class="o-page__content">
            <header class="c-navbar u-mb-medium">
                <button class="c-sidebar-toggle u-mr-small">
                    <span class="c-sidebar-toggle__bar"></span>
                    <span class="c-sidebar-toggle__bar"></span>
                    <span class="c-sidebar-toggle__bar"></span>
                </button><!-- // .c-sidebar-toggle -->

                <h2 class="c-navbar__title u-mr-auto">Account</h2>
                
                <div class="c-dropdown u-hidden-down@mobile">
                    <a class="c-notification dropdown-toggle" href="#" id="dropdownMenuUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="c-notification__icon">
                            <i class="fa fa-user-o"></i>
                        </span>
                        <span class="c-notification__number">3</span>
                    </a>

                    <div class="c-dropdown__menu c-dropdown__menu--large dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuUser">
                        <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <img class="c-avatar__img" src="img/avatar2-72.jpg" alt="User's Profile Picture">
                                </span>
                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Someone mentioned you</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                        <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <img class="c-avatar__img" src="img/avatar3-72.jpg" alt="User's Profile Picture">
                                </span>
                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Recieved a Payment</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                        <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <img class="c-avatar__img" src="img/avatar4-72.jpg" alt="User's Profile Picture">
                                </span>
                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">You got a promotion</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="c-dropdown dropdown u-mr-medium u-ml-small u-hidden-down@mobile">
                    <a class="c-notification dropdown-toggle" href="#" id="dropdownMenuAlerts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="c-notification__icon">
                            <i class="fa fa-bell-o"></i>
                        </span>
                        <span class="c-notification__number">3</span>
                    </a>

                    <div class="c-dropdown__menu c-dropdown__menu--large dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAlerts">
                        <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <span class="c-avatar__img u-bg-success u-flex u-justify-center u-align-items-center">
                                        <i class="fa fa-check u-text-large u-color-white"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Completed a task</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>

                        <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <span class="c-avatar__img u-bg-fancy u-flex u-justify-center u-align-items-center">
                                        <i class="fa fa-calendar u-text-large u-color-white"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Company meetup</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                        
                        <a href="#" class="c-dropdown__item dropdown-item o-media">
                            <span class="o-media__img u-mr-xsmall">
                                <span class="c-avatar c-avatar--xsmall">
                                    <span class="c-avatar__img u-bg-primary u-flex u-justify-center u-align-items-center">
                                        <i class="fa fa-info u-text-large u-color-white"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class="o-media__body">
                                <h6 class="u-mb-zero">Someone mentioned you</h6>
                                <p class="u-text-mute">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="c-dropdown dropdown">
                    <a  class="c-avatar c-avatar--xsmall has-dropdown dropdown-toggle" href="#" id="dropdwonMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <p class="text"><?php echo $username ?></p>
            
                    </a>

                    <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdwonMenuAvatar">
                        <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
                        <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
                        <a class="c-dropdown__item dropdown-item" href="#">Manage Roles</a>
                    </div>
                </div>
            </header>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="c-graph-card" data-mh="graph-cards">
                            <div class="c-graph-card__content">
                                <h3 class="c-graph-card__title">Stories</h3>
                                <p class="c-graph-card__date">Activity from 4 Jan 2020</p>
                                <h4 class="c-graph-card__number">2,000</h4>
                                <p class="c-graph-card__status">You’ve posted 2,000 until Today</p>
                            </div>
                            
                            <div class="c-graph-card__chart">
                                <canvas id="js-chart-payout" width="300" height="74"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="c-graph-card" data-mh="graph-cards">
                            <div class="c-graph-card__content">
                                <h3 class="c-graph-card__title">Categories</h3>
                                <p class="c-graph-card__date">Activity from 4 Jan 2020</p>
                                <h4 class="c-graph-card__number">4 Categories</h4>
                                <p class="c-graph-card__status">You’ve 4 categories until Today</p>
                            </div>
                            
                            <div class="c-graph-card__chart">
                                <canvas id="js-chart-earnings" width="300" height="74"></canvas>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4">
                        <div class="c-graph-card" data-mh="graph-cards">
                            <div class="c-graph-card__content">
                                <h3 class="c-graph-card__title">Authors</h3>
                                <p class="c-graph-card__date">Activity from 4 Jan 2020</p>
                                <h4 class="c-graph-card__number">6 Authors</h4>
                                <p class="c-graph-card__status">You’ve 6 Authors until Today</p>
                            </div>
                            
                            <div class="c-graph-card__chart">
                                <canvas id="js-chart-earnings" width="300" height="74"></canvas>
                            </div>
                        </div>
                    </div>

                </div>

                <span class="c-divider has-text u-mb-medium">Active Projects</span>

                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-3">

                        <div class="c-project-card u-mb-medium">
                            <img class="c-project-card__img" src="img/project-card1.jpg" alt="About the image">

                            <div class="c-project-card__content">
                                <div class="c-project-card__head">
                                    <h4 class="c-project-card__title">Magazine Images</h4>
                                    <p class="c-project-card__info">Kinfolk  |  Last Update: 21 Dec 2016</p>
                                </div>
                                

                                <div class="c-project-card__meta">
                                    <p>4,870 USD
                                        <small class="u-block u-text-mute">Budget / Salary</small>
                                    </p>
                                    <p>Early Dec 2017
                                        <small class="u-block u-text-danger">10 Days Remaining</small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-lg-6 col-xl-3">

                        <div class="c-project-card u-mb-medium">
                            <img class="c-project-card__img" src="img/project-card2.jpg" alt="About the image">

                            <div class="c-project-card__content">
                                <div class="c-project-card__head">
                                    <h4 class="c-project-card__title">Design Competition 2018</h4>
                                    <p class="c-project-card__info">Gourmet| Last Update: 29 Dec 2017</p>
                                </div>
                                

                                <div class="c-project-card__meta">
                                    <p>9,680 USD 
                                        <small class="u-block u-text-mute">Budget / Salary</small>
                                    </p>
                                    <p>Late January
                                        <small class="u-block u-text-mute">Deadline</small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-lg-6 col-xl-3">

                        <div class="c-project-card u-mb-medium">
                            <img class="c-project-card__img" src="img/project-card3.jpg" alt="About the image">

                            <div class="c-project-card__content">
                                <div class="c-project-card__head">
                                    <h4 class="c-project-card__title">New Dashboard</h4>
                                    <p class="c-project-card__info">Tapdaq  |  Last Update: 28 Nov 2017</p>
                                </div>
                                

                                <div class="c-project-card__meta">
                                    <p>4,870 USD
                                        <small class="u-block u-text-mute">Budget / Salary</small>
                                    </p>
                                    <p>Early Dec 2017
                                        <small class="u-block u-text-danger">15 Days Remaining</small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-lg-6 col-xl-3">

                        <div class="c-project-card u-mb-medium">
                            <img class="c-project-card__img" src="img/project-card4.jpg" alt="About the image">

                            <div class="c-project-card__content">
                                <div class="c-project-card__head">
                                    <h4 class="c-project-card__title">Mobile App</h4>
                                    <p class="c-project-card__info">Cofee & Co.  |  Last Update: 1 Dec 2016</p>
                                </div>
                                

                                <div class="c-project-card__meta">
                                    <p>8,760 USD
                                        <small class="u-block u-text-mute">Budget / Salary</small>
                                    </p>
                                    <p>Early Dec 2017
                                        <small class="u-block u-text-mute">6 Days Remaining</small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- // .row -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="c-card c-card--responsive u-mb-medium">
                            <div class="c-card__header c-card__header--transparent o-line">
                                <h5 class="c-card__title">Invoicing</h5>
                                <a class="c-card__meta" href="#">View all invoices</a>
                            </div>
                            
                            <table class="c-table u-border-zero">
                                <tbody>
                                    <tr class="c-table__row u-border-top-zero">
                                        <td class="c-table__cell u-text-mute">00450</td>
                                        <td class="c-table__cell">Design Works</td>
                                        <td class="c-table__cell u-text-mute">Carlson Limited</td>
                                        <td class="c-table__cell u-text-right">
                                            <span class="c-badge c-badge--small c-badge--danger">Delayed</span>
                                        </td>
                                        <td class="c-table__cell">$2,580</td>
                                    </tr>

                                    <tr class="c-table__row">
                                        <td class="c-table__cell u-text-mute">00569</td>
                                        <td class="c-table__cell">New Illustrations</td>
                                        <td class="c-table__cell u-text-mute">Twitter</td>
                                        <td class="c-table__cell">
                                            <span class="c-badge c-badge--small c-badge--warning">Pending Invoice</span>
                                        </td>
                                        <td class="c-table__cell">$2,580</td>
                                    </tr>

                                    <tr class="c-table__row">
                                        <td class="c-table__cell u-text-mute">01875</td>
                                        <td class="c-table__cell">UX Study</td>
                                        <td class="c-table__cell u-text-mute">Re-Research</td>
                                        <td class="c-table__cell u-text-right">
                                            <span class="c-badge c-badge--small c-badge--success">Paid Today</span>
                                        </td>
                                        <td class="c-table__cell">$2,580</td>
                                    </tr>

                                    <tr class="c-table__row">
                                        <td class="c-table__cell u-text-mute">00369</td>
                                        <td class="c-table__cell">Landing Page</td>
                                        <td class="c-table__cell u-text-mute">Travelsimo</td>
                                        <td class="c-table__cell u-text-right">
                                            <span class="c-badge c-badge--small c-badge--secondary">Paid Today</span>
                                        </td>
                                        <td class="c-table__cell">$2,580</td>
                                    </tr>

                                    <tr class="c-table__row">
                                        <td class="c-table__cell u-text-mute">00689</td>
                                        <td class="c-table__cell">iOS App Design</td>
                                        <td class="c-table__cell u-text-mute">Silingo</td>
                                        <td class="c-table__cell u-text-right">
                                            <span class="c-badge c-badge--small c-badge--secondary">Paid Today</span>
                                        </td>
                                        <td class="c-table__cell">$2,580</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="c-card u-mb-medium">
                            <div class="c-card__header c-card__header--transparent o-line">
                                <h5 class="c-card__title">Tasks</h5>
                                <a class="c-card__meta" href="#">View all all tasks</a>
                            </div>

                            <div class="c-todo u-border-top-zero">
                                <input class="c-todo__input" id="todo1" type="checkbox" name="exampe-list">
                                <label class="c-todo__label" for="todo1">
                                    Create new prototype for the landing page
                                </label>

                                <span class="c-badge c-badge--danger c-badge--small">Due Today</span>
                            </div><!-- // .c-todo -->

                            <div class="c-todo">
                                <input class="c-todo__input" id="todo2" type="checkbox" name="exampe-list">
                                <label class="c-todo__label" for="todo2">
                                    Add new Google Analytics code to all main files
                                </label>

                                <span class="c-badge c-badge--secondary c-badge--small">Due in 2 Days</span>
                            </div><!-- // .c-todo -->

                            <div class="c-todo">
                                <input class="c-todo__input" id="todo3" type="checkbox" name="exampe-list">
                                <label class="c-todo__label" for="todo3">
                                    Finish Dashboard UI Kit update
                                </label>

                                <span class="c-badge c-badge--secondary c-badge--small">Due in 3 Days</span>
                            </div><!-- // .c-todo -->

                            <div class="c-todo is-completed">
                                <input class="c-todo__input" id="todo4" type="checkbox" name="exampe-list" checked>
                                <label class="c-todo__label" for="todo4">
                                    Update parallax scroll on team page
                                </label>

                                <span class="c-badge c-badge--secondary c-badge--small">Due in 5 Days</span>
                            </div><!-- // .c-todo -->

                            <div class="c-todo is-completed">
                                <input class="c-todo__input" id="todo5" type="checkbox" name="exampe-list" checked>
                                <label class="c-todo__label" for="todo5">
                                    Update parallax scroll on team page
                                </label>

                                <span class="c-badge c-badge--secondary c-badge--small">Due in 1 Week</span>
                            </div><!-- // .c-todo -->
                        </div>
                    </div>
                </div><!-- // .row -->

            </div><!-- // .container -->
            
        </main><!-- // .o-page__content -->
        
        <!-- Main javascsript -->
        <script src="js/main.min3661.js"></script>

        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-88739867-2','auto');ga('send','pageview')
        </script>
        <script src="../../www.google-analytics.com/analytics.js" async defer></script>
    </body>

<!-- Mirrored from dashboard.zawiastudio.com/demo/home-overview.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 27 Feb 2020 08:05:06 GMT -->
</html>