<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: index.html");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


    if(empty($err))
    {
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;
        
        
        // Try to execute this statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1)
                    {
                        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt))
                        {
                            if(password_verify($password, $hashed_password))
                            {
                                // this means the password is corrct. Allow user to login
                                session_start();
                                $_SESSION["username"] = $username;
                                $_SESSION["id"] = $id;
                                $_SESSION["loggedin"] = true;
    
                                //Redirect user to welcome page
                                header("location: index.html");
                                
                            }
                            else{
                                ?>
<script>
alert("incorrect username and password");
</script>
<?php
                            }
                        }
    
                    }
    
        }
    }     


}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/billing.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8505550afa.js" crossorigin="anonymous"></script>
    <title>StudentHelper.com</title>
</head>
<style>
@media(max-width: 500px) {
    .registerheading h3 {
        font-size: 20px;
    }
}
</style>

<body>
    <div class="navbar navbar1">
        <div class="logo"><img src="img/logo1.jpg" alt=""></div>
        <ul class="nav_links" id="nav_Id">
            <li><a href="index.html">HOME</a> </li>
            <li><a href="notes.php">NOTES</a></li>
            <li><a href="dress.php">DRESS</a></li>
            <li><a href="lecturebuy.php">LECTURE</a></li>
            <li><a href="shop.php">SHOPING</a></li>
        </ul>
        <div class="menu imageClass" id="menu">
            <i class="fa-solid fa-bars" id="menu"></i>
        </div>
    </div>
    <div class="formcard">
        <div class="registerheading">
            <h3>Please Login here!</h3>
        </div>
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-8 mb-3">
                    <label for="username">Userame</label>
                    <input type="text" id="username" class="form-control" name="username" placeholder="Enter Username"
                        required>
                    <div class="invalid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="">Password</label>
                    <input type="password" id="password" class="form-control" name="password"
                        placeholder="Enter Password" required>
                    <div class="invalid-feedback">
                        Username and Password are incorrect
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Login</button>
            <div class="text-center">
                New user? <a href="register.php">Create Account</a>
            </div>
        </form>
    </div>
    <script src="js/app2.js"></script>
    <!-- <script src="js/login.js"></script> -->
</body>

</html>