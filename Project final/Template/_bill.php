<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaboShob | Ecommerce website </title>

    <!-----------Boostrap-------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!----------Boostrap------>

    <!--------owl-carousel--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!--------font awesome-------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!--------font awesome-------->

    <style>
        body{
            font-family: 'Poppins', sans-serif;

        }

        a{
            text-decoration: none;
            color: #555;
        }
        p{
            color: #555;
        }

        .container{
            max-width: 1300px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }

        .row{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .col-2{
            flex-basis: 50%;
            min-width: 300px;
        }
        .col-2 img{
            max-width: 100%;
            padding: 50px 0;
        }
        .col-2 h1{
            font-size: 50px;
            line-height: 60px;
            margin: 25px 0;
        }

        .col-3 img{
            width: 100%;
        }


        .col-2 .offer-img{
            padding: 50px;
        }

        ul{
            list-style-type: none;
        }


        .app-logo img{
            width: 140px;
        }

        /*-----media query for menu----*/
        @media only screen and (max-width: 900px){
            nav ul{
                position: absolute;
                top: 100px;
                left: 0;
                background: #555;
                width: 100%;
                overflow: hidden;
                transition: max-height 0.5s;

            }
            nav ul li{
                display: block;
                margin-right: 50px;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            nav ul li a{
                color:#fff;
            }
            .menu-icon{
                display: block;
                cursor: pointer;
            }
        }
        /*----------all product page ------*/
        .row-2{
            justify-content: space-between;
            margin: 100px auto 50px;
        }
        select{
            border: 1px solid #ff523b;
            padding: 5px;
        }
        select:focus{
            outline: none;
        }
        .page-btn{
            margin: 0 auto 80px;
        }
        .page-btn span{
            display: inline-block;
            border: 1px solid #ff523b;
            margin-left: 10px;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40p;
            cursor: pointer;
        }
        .page-btn span:hover{
            background: #ff523b;
            color: white;
        }

        /*-------single product details ----*/

        .single-product{
            margin-top: 80px;
        }
        .single-product .col-2 img{
            padding: 0;
        }
        .single-product .col-2{
            padding: 20px;
        }
        .single-product h4{
            margin: 20px 0;
            font-size: 22px;
            font-weight: bold;
        }
        .single-product select{
            display: block;
            padding: 10px;
            margin-top: 20px;
        }
        .single-product input{
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 20px;
            margin-right: 10px;
            border: 1px solid #ff523b;
        }
        input:focus{
            outline: none;
        }

        .single-product .fa{
            color: #ff523b;
            margin-left: 10px;
        }

        /*---------media query for less than 600 screen size-----*/
        @media only screen and (max-width: 600px){
            .row{
                text-align: center;
            }
            .col-2, .col-3, .col-4{
                flex-basis: 100%;
            }
            .single-product .row{
                text-align: left;
            }
            .single-product .col-2{
                padding: 20px 0;
            }
            .single-product h1{
                font-size: 26px;
                line-height: 32px;
            }
        }

        /* Account Page */
        .account-page{
            padding: 40px 0;
            background: radial-gradient(#fff,#ffd6d6d6);

        }
        .form-container{
            background:#dddcdc;
            width: 300px;
            height: 600px;
            position: relative;
            text-align: center;
            padding: 20px 0;
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .form-container span{
            font-weight: bold;
            padding: 0 10px;
            color:#555 ;
            cursor: pointer;
            width: 100px;
            display: inline-block;
        }
        .form-btn{
            display: inline-block;
        }
        .form-container form{
            max-width: 300px;
            max-height: 500px;
            padding: 0 20px;
            position: absolute;
            top: 130px;
            transition: transform 1s;
        }
        form input{
            width: 100%;
            height: 30px;
            margin: 10px 0;
            padding: 0 10px;
            border: 1px solid #ccc;
        }

        .btn4{
            display: inline-block;
            background: #e76fab;
            color: #fff;
            padding: 10px 30px;
            margin: 30px 0;
            border-radius: 30px;
            transition: background o.5s;
        }
        .btn4:hover{
            background: #563434;
        }


        #LoginForm{
            left: -300px;
        }
        #RegForm{
            left: 0;
        }
        form a{
            font-size: 12px;
        }


        #Indicator{
            width: 100px;
            border: none;
            background: #e76fab;
            height: 3px;
            margin-top: 8px;
            margin-right: 10px;

        }
    </style>


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
    .btn2{
        display: inline-block;
        background: #e76fab;
        color: #fff;
        padding: 10px 30px;
        margin: 30px 0;
        border-radius: 30px;
        transition: background o.5s;
    }
    .btn2:hover{
        background: #563434;
    }
</style>
<div class="account-page">
    <div class="container">
        <div class="row"><img src="images/Slide3.PNG" width="200px"><h3 style="margin-left: 150px">Make Your life Easy!.... Shop With Us....</h3></div>
        <div class="row">
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span >Bills</span>
                        <hr id="Indicator">
                    </div>

                    <p>Thanks for Shopping with us!<br> Pay Us On Delivery Of Your Product</p>
                    <a class="nav-link" href="#" style="background-color: #e76fab; color: white; margin-left: 20px; margin-right: 20px"><?php
                                session_start();
                                if(isset($_SESSION['User']))
                                {
                                    echo ''.$_SESSION['User'];
                                }
                                ?></a>

                    <img src="images/shoppingc.png" height="200px"><br>
                    <a href="index.php" class="btn2">Shop Again</a>
                    <div><a href="logout.php" class="btnlogout">LogOut</a></div>


                </div>
            </div>
        </div>
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




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<!------custom javascript ----->
<script src="index.js"></script>
</body>
</html>