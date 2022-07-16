<?php
session_start();
require_once "config.php";
if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['hostel']) && isset($_POST['product_id'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $product_id=$_POST['product_id'];
    $payment_status = "pending";
    mysqli_query($conn, "insert into online_coller_payment (name, phone, email, product_id, price, payment_status) 
     value('$name', '$phone', '$email', '$product_id', '$price', '$payment_status')");
    $_SESSION['IOD']=mysqli_insert_id($conn);
}
if(isset($_POST['payment_id']) && isset($_SESSION['IOD'])){
    $payment_id = $_POST['payment_id'];
    mysqli_query($conn, "update online_coller_payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['IOD']."'");

}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
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
        <div class="logo"><img src="img/logo1.png" alt=""></div>
        <ul class="nav_links" id="nav_Id">
            <li><a href="index.html">HOME</a> </li>
            <li><a href="notes.php">NOTES</a></li>
            <li><a href="dress.php">DRESS</a></li>
            <li><a href="grocries.php">GROCRIES</a></li>
            <li><a href="shop.php">SHOPING</a></li>
        </ul>
        <div class="menu imageClass" id="menu">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="formcard">
        <div class="registerheading">
            <h3>Fill Your Billing Address Please!</h3>
        </div>
        <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-8 mb-3">
                    <label for="">Name</label>
                    <input class="form-control" name="name" id="name" type="text" placeholder="Enter Your Name"
                        required>
                    <div class="invalid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="">Contact NO</label>
                    <input class="form-control" id="phone" name="phone" type="phone"
                        placeholder="Enter Your Phone Number" required>
                    <div class="invalid-feedback">
                        please enter a valid phone please!
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="">Email</label>
                    <input class="form-control" name="email" id="email" type="email" placeholder="Enter Your Email ID"
                        required>
                    <div class="invalid-feedback">
                        password should match
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="">Product ID</label>
                    <input class="form-control" id="product_id" name="product_id" placeholder="Enter Your Product ID"
                        required>
                    <div class="invalid-feedback">
                        Enter a valid phone number
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="">Hostel Name</label>
                    <input class="form-control" id="hostel" name="hostel" placeholder="Enter Your Hostel Name" required>
                    <div class="invalid-feedback">
                        Please Enter Your college Id
                    </div>
                </div>
            </div>
            <input type="button" class="btn btn-success" value="pay now" onclick="pay_now()">
        </form>
    </div>
    <script src="js/app2.js"></script>
    <script src="js/billing.js"></script>
    <script>
        function pay_now() {
            var name = jQuery('#name').val();
            var phone = jQuery('#phone').val();
            var email = jQuery('#email').val();
            var product_id = jQuery('#product_id').val();
            jQuery.ajax({
                type: 'post',
                url: 'razorpay.php',
                data: "&name=" + name + "&phone=" + phone + "&email=" + email + "&product_id=" + product_id + "&hostel=" + hostel,
                success: function (result) {
                    if (product_id == 1) {
                        var priceof = 8000;
                    }
                    else {
                        var priceof = 10000;
                    }
                    var hostel = jQuery('#hostel').val();
                    var options = {
                        "key": "rzp_test_EiI7kG9vdZqHhN",
                        "amount": priceof * 100,
                        "currency": "INR",
                        "name": "AzStudentHelper",
                        "description": "Safe Transation",
                        "image": "https://example.com/logo",
                        "handler": function (response) {
                            jQuery.ajax({
                                type: 'post',
                                url: 'razorpay.php',
                                data: "payment_id=" + response.razorpay_payment_id,
                                success: function (result) {
                                    window.location.href = "oderplace.php";
                                }
                            });
                        }
                    };
                    var raz1 = new Razorpay(options);
                    raz1.open();
                }
            });

        }
    </script>
</body>

</html>