<?php
//required MySQL Connection
require ('database/DBController.php');


//required Product class
require ('database/Product.php');

//required Cart class
require ('database/Cart.php');

//DBController Object
$db= new DBController();

//Product Object
$product= new Product($db);
$product_shuffle = $product->getData();

//cart object
$Cart = new Cart($db);
