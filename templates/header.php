<!-- doctype and header were taken from one page php + html assignment in class

nav drop down code from - http://www.w3schools.com/howto/howto_js_dropdown.asp
nav bar code from - http://www.w3schools.com/css/css_navbar.asp

-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xml:lang="en" lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta http-equiv="Content-Type"
          content="text/html; charset=utf-8"/>
    <title>AITP</title>
</head>
<body>
<div class="nav-fixed">
    <div>
        <!--setting up the picture-->
        <div class="head">
            <img src="media/aitp.png" class="respondImg">
        </div>
        <nav>
            <ul>
                <!--each li is a new block in the nav-->
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="calendar.php">Calendar</a></li>
                <li><a href="forms.php">Forms</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <!--check to see if the user is logged in, if they are show admin area-->
                <?php if ($_SESSION['usrInfo'][0] == true) { ?>
                <li class="dropdown">
                    <a href="#"
                       class="dropdown-Button">Admin</a>
                    <div class="dropdown-content">
                        <a href="pages.php">Pages</a>
                        <a href="users.php">users</a>
                        <?php
                        } ?>
                <li class="dropdown">

                    <!--if user is logged in show logout else show login-->
                    <a href="#"
                       class="dropdown-Button"><?php ($_SESSION['usrInfo'][0] == true) ? print "Logout" : print "Log-in" ?></a>
                    <div class="dropdown-content">
                        <a href="#">

                            <!--form that contains all of the info for the user to login-->
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <!--if user is logged in show logout button, else display login form-->
                                <?php ($_SESSION['usrInfo'][0] == true) ? print "<button class=\"flat-button\" type=\"submit\" name=\"submit\" value=\"logout\">Logout</button> " : print "
            <input type=\"text\" name=\"username\" placeholder=\"username\"></br>
            <input type=\"password\" name=\"password\" placeholder=\"password\"></br>
            <button type=\"submit\" name=\"submit\" value=\"login\">Login</button>"
                                ?>
                            </form>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>