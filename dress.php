<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login1.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dress.css">
    <link rel="stylesheet" href="css/notes.css">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8505550afa.js" crossorigin="anonymous"></script>
    <title>StudentHelper.com</title>
</head>

<body>
    <div class="navbar navbar1">
        <div class="logo"><img src="img/logo1.png" alt=""></div>
        <ul class="nav_links" id="nav_Id">
            <li><a href="index.html">HOME</a> </li>
            <li><a href="notes.php">NOTES</a></li>
            <li><a href="dress.php">DRESS</a></li>
            <li><a href="grocries.php">GROCRIES</a></li>
            <li><a href="shop.php">SHOPING</a></li>
            <li><?php echo "Welcome ". $_SESSION['username']; ?></li>
        </ul>
        <div class="menu imageClass">
            <i class="fa-solid fa-bars" id="menu"></i>
        </div>
    </div>
    <div class="dresscontent">
        <div class="dress">
            <div class="dresscard">
                <img src="img/cheapron.jpg">
                <div class="square">
                </div>
                <div class="card-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsa rerum voluptate sit
                        quis quisquam architecto quasi unde exercitationem laborum cum sunt itaque perspiciatis,
                        nulla, tempore illum explicabo minus? Vitae?</p>
                    
                    <button class="btnnotes dressbtn"><a href="dressbilling.php">Buy Dress</a></button>
                </div>
            </div>
            <div class="dresscard">
                <img src="img/mechdress.jpg">
                <div class="square">
                </div>
                <div class="card-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsa rerum voluptate sit
                        quis quisquam architecto quasi unde exercitationem laborum cum sunt itaque perspiciatis,
                        nulla, tempore illum explicabo minus? Vitae?</p>
                    <!-- <br> -->
                    <button class="btnnotes dressbtn"><a href="dressbilling.php">Buy Dress</a></button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="rowfoot">
            <div class="columnfoot">
                <div class="contact">
                    <h4>Get Touch</h4>
                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <h5>+91-9798827707</h5>
                    </div>
                    <div class="email">
                        <i class="fa-solid fa-envelope"></i>
                        <h5>studenthelper@gmail.com</h5>
                    </div>
                </div>
            </div>
            <div class="columnfoot">
                <div class="services">
                    <h4>Services</h4>
                    <li><a href="notes.php">Notes</a></li>
                    <li><a href="video.php">Lecture</a></li>
                    <li><a href="shop.php">Shoping</a></li>
                    <li><a href="dress.php">Dress</a></li>
                </div>
            </div>
            <div class="columnfoot">
                <div class="social">
                    <h4>Social Media</h4>
                    <div class="social_links">
                       <a href="#"><img src="img/insta.png" alt=""></a>
                       <a href="#"><img src="img/linkedn.png" alt=""></a>
                       <a href="#"><img src="img/fb.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/app2.js"></script>
</body>

</html>