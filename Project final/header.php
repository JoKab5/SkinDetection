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
<body>
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
            <form action="search.php" method="POST" class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search-input">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search-submit">Search</button>
            </form>

            <ul id="MenuItems">
                <li><a href="index.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        array_map(function ($brand) use($in_product){
                            printf('<a class="dropdown-item" href="%s.php">%s</a>',$brand,$brand);
                        },$unique);
                        ?>
                    </div>
                </li>
                <li><a href="about.php">About Us</a></li>
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