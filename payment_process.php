<?php
// session_start();
require_once "config.php";
if(isset($_POST['email']) && isset($_POST['payment_id']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['hostel']) && isset($_POST['product_id'])){
    if($_POST['product_id']==1){
        $price = 6000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==2){
        $price = 4000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==3){
        $price = 7000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==4){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==5){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==6){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==7){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==8){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==9){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==10){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==11){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==12){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==13){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==14){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==15){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==16){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==17){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==18){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==19){
        $price = 8000;
        $_SESSION['price']=$price;
    }elseif($_POST['product_id']==20){
        $price = 8000;
        $_SESSION['price']=$price;
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $product_id=$_POST['product_id'];
    $payment_status = "complete";
    $payment_id = $_POST['payment_id'];
    $sql = "insert into online_coller_payment (name, phone, email, product_id, payment_id, price, payment_status) 
    value('$name', '$phone', '$email', '$product_id', '$payment_id', '$price', '$payment_status')";
    mysqli_query($conn, $sql);
}

?>
