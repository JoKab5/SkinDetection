<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product- KaboShob </title>

    <!-----------Boostrap-------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!----------Boostrap------>

    <!-----------owl-carousel------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!----------font awesome-------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!----------font awesome-------->


    <link rel="stylesheet" href="style.css">

    <?php
    //required functions
    require ('functions.php');
    ?>

</head>
<body style="background-color: #9fcfc5">
<style>
    .btnlogout{
        display: inline-block;
        background: #ff523b;
        color: #fff;
        padding: 3px 10px;
        margin: 5px 0;
        border-radius: 05px;
        transition: background o.5s;
    }
    .btnlogout:hover{
        background: #563434;
    }
</style>
<!--header -->
<?php

shuffle($product_shuffle);
$brand= array_map(function ($pro){return $pro['item_brand'];}, $product_shuffle);
$unique=array_unique($brand);
sort($unique);
$in_product=$product->getData('cart');
?>

<div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="images/Slide3.PNG" width="200px">
        </div>
        <nav class="navbar navbar-light bg-light">

            <ul id="MenuItems">
                <li><a href="index.php">Home</a></li>

                <li class="nav-item">
                    <a class="nav-link" href="#" style="background-color: #e76fab; color: white"><?php
                        session_start();
                        if(isset($_SESSION['User']))
                        {
                            echo ''.$_SESSION['User'];
                        }
                        ?></a>
                </li>
                <li><a href="logout.php" class="btnlogout">LogOut</a></li>
            </ul>
            <form action="#" class="font-size-14">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($in_product);?></span>
                </a>
            </form>
        </nav>
        <img src="images/menu.png" class="menu-icon"
             onclick="menutoggle()">
    </div>

</div>

<!--Header-->

<main id="mai-site">
    <!---------Shopping cart section ------>

    <section id="cart" class="py-3">
        <div class="container-fluid w-75">
            <h5 class="font-size-20" style="padding-right: 50px">KaboShop Shopping</h5>

            <!------shopping cart items ---->
            <div class="row">
                <div class="col-sm-12">
                    <!------cart items ---->
                    <div class="row border-top py-3 mt-3 ">
                        <div class="col-sm-2">
                            <img src='./images/LOGO1.png'  class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <p class="font-size-20">we are kaboshop!.<br>The online shopping website for Women product such as clothes, shoes and bac.<br>Kaboshop is in your service to make your life easy! and happy!.</p>
                            <p class="font-size-20">To serve you is our first duty.</p>



                    </div>
                    <!------cart items ---->
                </div>

                <!----------subtotal section ---->
                <div class="col-sm-4">
                    <div class="sub-total border text-center">
                        <h3 class="font-size-20 text-success py-3"><i class="fas fa-check">Contact US :</i></h3>
                        <div class="border-top py-4">
                        <p>+917506942790</p>
                        <p>Joelkabobo@gmail.com</p>
                        <p>Kabobo.k@somaiya.edu</p>
                    </div>
                </div>
                <!----------subtotal section ---->
            </div>
            <!------shopping cart items ---->
        </div>

    </section>
    <!---------Shopping cart section ------>
</main>


<!-------Footer------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our App</h3>
                <p>Download App for Android and Ios Mobile Phone</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/Slide3.PNG">
                <p>Our purpose is to make our custommer happy in every maner</p>
            </div>
            <div class="footer-col-3">
                <h3>Usefull Link</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2020 - Joelkabangu</p>
    </div>
</div>

<!--------js toggle menu--->
<script>
    var MenuItems= document.getElementById("MenuItems");

    MenuItems.style.maxHeight="0px"

    function menutoggle(){
        if(MenuItems.style.maxHeight=="0px")
        {
            MenuItems.style.maxHeight="200px";
        }
        else{
            MenuItems.style.maxHeight="0px";
        }

    }
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha512-k2WPPrSgRFI6cTaHHhJdc8kAXaRM4JBFEDo1pPGGlYiOyv4vnA0Pp0G5XMYYxgAPmtmv/IIaQA6n5fLAyJaFMA==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<!------custom javascript ----->
<script src="index.js"></script>
</body>
</html>