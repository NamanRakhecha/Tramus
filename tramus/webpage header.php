<?php
error_reporting(0);
session_start();
echo "
<!DOCTYPE html>
<html lang='en' class='no-js'>
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset='utf-8'/>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <meta http-equiv='x-ua-compatible' content='ie=edge'>
        <title>Tramus -Bus Tracking And Management System</title>
        <meta name='keywords' content='HTML5 ' />
        <meta name='description' content='Tramus'>
        <meta name='author' content='Pratik, Alston , Naman, Prachita, Vinay'>        

        <!-- Vendor Styles -->
        <link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'/>
        <link href='css/animate.css' rel='stylesheet' type='text/css'/>
        <link href='vendor/themify/themify.css' rel='stylesheet' type='text/css'/>
        <link href='vendor/scrollbar/scrollbar.min.css' rel='stylesheet' type='text/css'/>
        <link href='vendor/magnific-popup/magnific-popup.css' rel='stylesheet' type='text/css'/>
        <link href='vendor/swiper/swiper.min.css' rel='stylesheet' type='text/css'/>
        <link href='vendor/cubeportfolio/css/cubeportfolio.min.css' rel='stylesheet' type='text/css'/>

        <!-- Theme Styles -->
        <link href='css/style.css' rel='stylesheet' type='text/css'/>
        <link href='css/global/global.css' rel='stylesheet' type='text/css'/>

        <!-- Favicon -->
        <link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'>
        <link rel='apple-touch-icon' href='img/apple-touch-icon.png'>
        <link rel='stylesheet' type='text/css' href='login_css.css'>

        <style>
        button {
              border: 0;
              
              border-radius: 4px;
              box-shadow: 0 6px 0 #006599;
              color: #fff;
              cursor: pointer;
              font: inherit;
              margin: 0;
              outline: 0;
              padding: 12px 20px;
              transition: all .1s linear;
            }
            button:active {
              box-shadow: 0 2px 0 #006599;
              transform: translateY(3px);
            }
            /*Favorite Bar*/
            #mySidenav a {
                position: absolute; /* Position them relative to the browser window */
                left: -80px; /* Position them outside of the screen */
                transition: 0.3s; /* Add transition on hover */
                padding: 12px; /* 15px padding */
                width: 120px; /* Set a specific width */
                text-decoration: none; /* Remove underline */
                font-size: 20px; /* Increase font size */
                color: white; /* White text color */
                top:150%;
                border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
            }

            #mySidenav a:hover {
                left: 0; /* On mouse-over, make the elements appear as they should */
            }

            #about {
                top: 30px;
                background-color: #4CAF50;
            }

            #blog {
                top: 80px;
                background-color: #2196F3; /* Blue */
            }

            #projects {
                top: 140px;
                background-color: #f44336; /* Red */
            }

            #contact {
                top: 200px;
                background-color: #555 /* Light Black */
            }
        </style>

       
    </head>
    <!-- End Head -->


    <!-- Body -->
    <body>
        
        <!--========== HEADER ==========-->
        <header class='navbar-fixed-top s-header js__header-sticky js__header-overlay'>
            <!-- Navbar -->
            <div class='s-header__navbar'>
                <div class='s-header__container'>
                    <div class='s-header__navbar-row'>
                        <div class='s-header__navbar-row-col'>
                            <!-- Logo -->
                            <div class='s-header__logo'>
                            <a href='index.php' class='s-header__logo-link'>
                            <img class='s-header__logo-img s-header__logo-img-default' src='img/logo.png' alt='Tramus Logo'>
                            <img class='s-header__logo-img s-header__logo-img-shrink' src='img/logo-dark.png' alt='Tramus Logo'>
                            </a>
                            </div>             
                            <!-- End Logo -->
                        </div>
                        <div id='mySidenav' class='sidenav'>
                             <a href='cookie.php' id='about'>View Favorites</a>
                        </div> 

                     <button style='float:right;'><a href='tracking.php'>Track</a></button>
                        
                    </div>
                </div>
            </div>";
            if ( isset($_SESSION['uname'])){
                echo "
<h2 style='position:relative;background-color:transparent;'>";
echo "Welcome <font color=red>".$_SESSION['uname']."</font>

</h2>
<a href='logout.php' style='font-size=20px;'>Log Out </a>";
}
       echo "     <!-- End Navbar -->

           
        </header>
        <!--========== END HEADER ==========-->

";
?>