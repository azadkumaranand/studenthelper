<?php
require_once "config.php";

$username = $password = $email = $phone = $confirm_password = "";
$username_err = $password_err = $email_err = $phone_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    ?>
<script>
alert('this user is already taken');
</script>
<?php
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
// if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
//     $password_err = "Passwords should match";
// }
if(empty(trim($_POST['email']))){
    $email_err = "please fill email";
}
else{
  $email = $_POST['email'];
}
if(empty(trim($_POST['phone']))){
    $phone_err = "please fill phone";
}
else{
  $phone = $_POST['phone'];
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)  && empty($phone_err))
{
    $sql = "INSERT INTO users (username, password, phone, email) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password, $param_phone, $param_email);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $param_phone = $phone;
        $param_email = $email;

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login1.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/billing.css">
    <link rel="stylesheet" href="css/billing2.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8505550afa.js" crossorigin="anonymous"></script>
    <title>StudentHelper.com</title>
</head>

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
       <h3>Register Your Self!</h3> 
    </div>
    <form action="" method="post" class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-8 mb-3">
            <label for="username">Userame</label>
            <input type="text" id="username" class="form-control" name="username" placeholder="Enter Username" required>
            <div class="invalid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-8 mb-3">
            <label for="">Password</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password" required>
            <div class="invalid-feedback">
                password must be include (@,[a-z],[0-9])
            </div>
          </div>
          <div class="col-md-8 mb-3">
            <label for="">Confirm Password</label>
            <input type="password" id="confirm_password" class="form-control" name="confirm_passowrd" placeholder="Confirm Password" required>
            <div class="invalid-feedback">
              password should match
            </div>
          </div>
          <div class="col-md-8 mb-3">
            <label for="">Contact NO</label>
            <input name="phone" id="phone" class="form-control" placeholder="Enter Phone Number" required>
            <div class="invalid-feedback">
              Please Enter a valid phone
            </div>
          </div>
          <div class="col-md-8 mb-3">
            <label for="">Email</label>
            <input id="email" name="email" class="form-control" placeholder="Enter Email ID" required>
            <div class="invalid-feedback">
              Please Enter Your college Id 
            </div>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">SignIn</button>
        <div class="text-center">
          Already have an account? <a href="login1.php">Log in</a>
        </div>
      </form>
</div>
    <script src="js/app2.js"></script>
    <script src="js/billapp2.js"></script>
</body>

</html>