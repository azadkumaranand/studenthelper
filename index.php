<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lecture.css">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8505550afa.js" crossorigin="anonymous"></script>
    <title>StudentHelper.com</title>
</head>

<body>
    <div class="container">
        <div class="navbar navbar1">
            <div class="logo"><img src="img/logo1.png" alt="some went wrong"></div>
            <ul class="nav_links" id="nav_Id">
                <li><a href="index.php">HOME</a> </li>
                <li><a href="notes.php">NOTES</a></li>
                <li><a href="dress.php">DRESS</a></li>
                <li><a href="grocries.php">GROCRIES</a></li>
                <li><a href="shop.php">SHOPING</a></li>
            </ul>
            <div class="menu imageClass">
                <i class="fa-solid fa-bars" id="menu"></i>
            </div>
        </div>
        <div class="heading">
            <div class="headBtn">
                <h2>WELCOME TO AzStudentHelper</h2>
            </div>
            <button class="btn"><a href="register.php">Register Your Self</a></button>
        </div>
        <div class="sidetabnotes">
            <div class="crosstab crosssymbol" id="crosstabnotes"><img src="img/xmarks.png"></i></div>
            <div class="content">
                <div class="head">Hello Students</div>
                <div class="para">
                    <p>StudentHelper provides you quality notes for first year Btech studenthelper
                        so student get notes from here totally free use studenthelper content and
                        gain good CGPA in you semester exam easily!
                    </p>
                </div>
            </div>
        </div>
        <div class="sidetabvideo">
            <div class="crosstab crosssymbol" id="crosstabvideo"><img src="img/xmarks.png"></i></div>
            <div class="lechead">Video lecture 2</div>
        </div>
        <div class="sidetabshop">
            <div class="crosstab crosssymbol" id="crosstabshop"><img src="img/xmarks.png"></i></div>
            <div class="lechead">Video lecture 3</div>
        </div>
        <div class="sidetabdress">
            <div class="crosstab crosssymbol" id="crosstabdress"><img src="img/xmarks.png"></i></div>
            <div class="lechead">Video lecture 4</div>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <div class="card">




                <button id="notescontent" class="btn">Content</button>

                <button class="btn"><a href="notes.php">Notes</a></button>

            </div>
            <div class="card cardbg">

                

                <button id="videocontent" class="btn">Content</button>

                <button class="btn"><a href="grocries.php">Are you Need it</a></button>

            </div>
        </div>
        <div class="column">
            <div class="card cardbg1">




                <button id="shopcontent" class="btn">Content</button>


                <button class="btn"><a href="shop.php">Shop Now</a></button>

            </div>
            <div class="card cardbg2">




                <button id="dresscontent" class="btn">Content</button>


                <button class="btn"><a href="dress.php">Buy Dress</a></button>

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
                    <li><a href="register.php">Notes</a></li>
                    <li><a href="lectorbuy.php">Lecture</a></li>
                    <li><a href="register.php">Shoping</a></li>
                    <li><a href="register.php">Dress</a></li>
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
                    <p class="logout btn"><a href="logout.php">Logout</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://kit.fontawesome.com/8505550afa.js" crossorigin="anonymous"></script>
    <script src="js/app2.js"></script>
</body>

</html>
