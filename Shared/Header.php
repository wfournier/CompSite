<?php include "Shared/connection.php" ?>
<header>
    <div class="row" id="bannerSec">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse"
                            data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a style="padding-left: 30px" class="navbar-brand" data-toggle="collapse"
                       href="Index.php">Compsci</a>
                </div>
                <!--Left Side-->
                <div class="collapse navbar-collapse navBarText" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="Index.php">Home</a></li>
                        <li><a href="About.php">About</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="navButtons">
                                Classes
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="Classes.php#web_design">Web Design</a></li>
                                <li><a href="Classes.php#mobile_dev">Mobile Development</a></li>
                            </ul>
                        </li>
                        <li><a href="Requirements.php">Requirements</a></li>
                    </ul>
                    <!--Right Side-->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">FR</a></li>
                        <?php
                        if (!(func::checkLogin($con))) {
                            echo "<li><a href='Login_Register.php'><span class='glyphicon glyphicon-user'></span> Sign Up / Login</a></li>";
                        } else {
                            echo "<li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"navButtons\">
                                View Account
                                <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"Account_View.php\">View Info</a></li>
                                <li><a href=\"Processes/Logout.php\">Logout</a></li>
                            </ul>
                        </li>";
                        }
                        ?>
                        <li><a style="margin-right: 30px" href="Enroll.php">ENROLL</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>