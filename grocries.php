<?php
session_start();
require_once "config.php";
if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['hostel']) && isset($_POST['product_id'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $product_id = $_POST['product_id'];
    $payment_status = "pending";
    mysqli_query($conn, "insert into online_coller_payment (name, phone, email, product_id, price, payment_status) 
     value('$name', '$phone', '$email', '$product_id', '$price', '$payment_status')");
    $_SESSION['IOD'] = mysqli_insert_id($conn);
}
if (isset($_POST['payment_id']) && isset($_SESSION['IOD'])) {
    $payment_id = $_POST['payment_id'];
    mysqli_query($conn, "update online_coller_payment set payment_status='complete',payment_id='$payment_id' where id='" . $_SESSION['IOD'] . "'");
}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grocries.css">
    <link rel="stylesheet" href="css/billing2.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8505550afa.js" crossorigin="anonymous"></script>
    <title>StudentHelper.com</title>
</head>
<style>
    .coller {
        position: relative;
        top: -10%;
    }

    .btn {
        padding: 5px 5px;
        background-color: green;
        color: white;
        border: none;
        border: 2px solid white;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
        margin: 10px;
    }

    .btn a {
        text-decoration: none;
        color: white;
    }
</style>

<body>
    <div class="navbar navbar1">
        <div class="logo"><img src="img/logo1.png"></div>
        <ul class="nav_links" id="nav_Id">
            <li><a href="index.html">HOME</a> </li>
            <li><a href="notes.php">NOTES</a></li>
            <li><a href="dress.php">DRESS</a></li>
            <li><a href="grocries.php">STATIONARY</a></li>
            <li><a href="shop.php">SHOPING</a></li>
        </ul>
        <div class="menu imageClass" id="menu">
            <i class="fa-solid fa-bars" id="menu"></i>
        </div>
    </div>
    <!-- coller detalis controller -->
    <div class="go_cart">
        <a href="#move_on_cart"><img src="img/cartimg1.png" alt="cartimg"></a>
    </div>
    <div class="coller" id="coller">
        <div class="columnshop">

        </div>
    </div>
    <br> <br>
    <h2 style="font-family: sans-serif; text-align: center; color: black;" id="move_on_cart">My Cart</h2>
    <br>
    <div class="cart">
        <div class="cart-header">
            <div class="column1">Item</div>
            <div class="column2">Unit price</div>
            <div class="column3">Units</div>
        </div>
        <div class="cart-items">
            <!-- render cart items here -->

        </div>

    </div>
    <div class="cart-footer">

    </div>
    <br>
    <br><br>
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
                    <li><a href="lecturebuy.php">Lecture</a></li>
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
    <script src="js/billing.js"></script>
    <script>
        const products = [{
                id: 0,
                name: "T-shirt 1",
                price: 29,
                instock: 100,
                description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
                imgSrc: "img/t1.png",

            },
            {
                id: 1,
                name: "T-shirt 2",
                price: 24,
                instock: 43,
                description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
                imgSrc: "img/t2.png",

            },
            {
                id: 2,
                name: "T-shirt 3",
                price: 19,
                instock: 10,
                description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
                imgSrc: "img/t3.png",

            },
            {
                id: 3,
                name: "T-shirt 4",
                price: 25,
                instock: 5,
                description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
                imgSrc: "img/t4.png",

            },
            {
                id: 4,
                name: "T-shirt 5",
                price: 29,
                instock: 4,
                description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
                imgSrc: "img/t5.png",

            },
            {
                id: 5,
                name: "T-shirt 6",
                price: 39,
                instock: 40,
                description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
                imgSrc: "img/t6.png",

            },
        ];

        const productE1 = document.querySelector('.columnshop');

        function randerProducts() {
            products.forEach(element => {
                productE1.innerHTML += `
                <div class="shopcard">
                    <img src="${element.imgSrc}">
                    <div class="shopcard-text">
                        <h2>${element.name}</h2>
                        <h2><small>$</small>${element.price}</h2>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, dicta!
                        </p>
                    </div>
                    <button class="btn" onclick="pay_now(${element.price})">Buy Now</button>
                
                    <button class="btn"><a href="billing.php">Cash Payment</a></button>
                    <div class="add-to-cart">
                        <img src="img/bag-plus.png" onclick="addToCart(${element.id})" alt="add to cart">
                    </div>
                </div>
                `
            })
        }
        randerProducts();
        let cart = [];
        // ADD TO CART
        function addToCart(id) {
            if (cart.some((item) => item.id === id)) {
                // alert("item is already added");
                changenumberOfUnites('plus', id);
            } else {
                const item = products.find((element) => element.id === id);
                cart.push({
                    ...item,
                    numberOfUnites: 1,
                });
            }
            updateCart();
        }

        function updateCart() {
            renderCartItems();
            randerSubtotal();
        }
        let cartfooter = document.querySelector('.cart-footer');

        function randerSubtotal() {
            let total_price = 0;
            let total_item = 0;
            cart.forEach((item) => {
                total_price += item.price * item.numberOfUnites
                total_item += item.numberOfUnites;
            })

            cartfooter.innerHTML = `
                    <div class="subtotal">
                    Subtotal (${total_item} items): $ ${total_price}
                    </div>
                    <button class="checkout" onclick="pay_now(${total_price})">Proceed To Checkout</button>
                `
        }
        let cartItemE1 = document.querySelector('.cart-items');

        function renderCartItems() {
            cartItemE1.innerHTML = "";
            cart.forEach((item) => {
                cartItemE1.innerHTML += `
                    <div class="cart-item">
                    <div class="item-info">
                        <img src="${item.imgSrc}">
                        <h4>${item.name}</h4>
                    </div>
                    <div class="unit-price">
                        <small>$</small>${item.price}
                    </div>
                    <div class="units">
                        <div class="number">${item.numberOfUnites}</div>       
                    </div>
                    </div>
                    `
            })


        }
        //change number of unites for an item
        function changenumberOfUnites(action, id) {

            cart = cart.map((item) => {
                let oldNumberOfUnites = item.numberOfUnites;
                if (item.id === id) {
                    if (action === 'minus') {
                        oldNumberOfUnites--;
                    } else if (action === 'plus') {
                        oldNumberOfUnites++;
                    } else {
                        alert("sorry something went wrong");
                    }
                }
                return {
                    ...item,
                    numberOfUnites: oldNumberOfUnites,
                };
            });
            updateCart();
        }

        function pay_now(price) {
            var name = jQuery('#name').val();
            var phone = jQuery('#phone').val();
            var email = jQuery('#email').val();
            var product_id = jQuery('#product_id').val();
            var hostel = jQuery('#hostel').val();
            jQuery.ajax({
                type: 'post',
                url: 'razorpay.php',
                data: "&name=" + name + "&phone=" + phone + "&email=" + email + "&product_id=" + product_id + "&hostel=" + hostel,
                success: function(result) {

                    var options = {
                        "key": "rzp_test_EiI7kG9vdZqHhN",
                        "amount": price * 100,
                        "currency": "INR",
                        "name": "AzStudentHelper",
                        "description": "Safe Transation",
                        "image": "http://localhost/studenthelper/img/logo1.png",
                        "handler": function(response) {
                            jQuery.ajax({
                                type: 'post',
                                url: 'grocries_rozarpay.php',
                                data: "payment_id=" + response.razorpay_payment_id,
                                success: function(result) {
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