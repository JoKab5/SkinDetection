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
            padding: 50px 0;
            background: radial-gradient(#fff,#ffd6d6d6);

        }
        .form-container{
            background:#dddcdc;
            width: 300px;
            height: 500px;
            position: relative;
            text-align: center;
            padding: 20px 0;
            margin: auto;
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
            max-height: 800px;
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
            margin-right: 100px;
            transform: translateX(100px);
            transition: transform 1s;
        }
    </style>


</head>
<body>
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/adob1.png" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>

                        <hr id="Indicator">
                    </div>
                    <form id="LoginForm" action="insert.php" method="POST">
                        <?php
                        if(@$_GET['Empty']==true)
                        {
                            ?>
                            <div class="alert-light text-danger"><?php echo $_GET['Empty'] ?></div>
                            <?php
                        }
                        ?>

                        <input type="text" placeholder="Username">
                        <input type="password" placeholder="password">
                        <button type="submit" class="btn4">Login</button><br>
                        <a href="#">Forgot Password</a>
                    </form>
                    <form id="RegForm">
                        <input type="text" placeholder="Username" required>
                        <input type="password" placeholder="password" required>
                        <input type="Email" placeholder="Email">
                        <input type="text" placeholder="Address" required>
                        <input type="number" placeholder="Mobile No" required>
                        <button type="submit" class="btn4">Register</button>
                    </form>
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

<!-----form js--->
<script>
    var LoginForm=document.getElementById("LoginForm");
    var RegForm=document.getElementById("RegForm");
    var Indicator=document.getElementById("Indicator");

    function register(){
        RegForm.style.transform="translateX(0px)";
        LoginForm.style.transform="translateX(0px)";
        Indicator.style.transform="translateX(100px)";
    }
    function login(){
        RegForm.style.transform="translateX(300px)";
        LoginForm.style.transform="translateX(300px)";
        Indicator.style.transform="translateX(0px)";
    }


</script>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<!------custom javascript ----->
<script src="index.js"></script>
</body>
</html>