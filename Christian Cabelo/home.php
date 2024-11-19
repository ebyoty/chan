<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- custom css link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- header section starts -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-mug-hot"></i> coffee</a>

        <nav class="navbar">
            <a href="home.html" class="active">home</a>
            <a href="about.html">about</a>
            <a href="menu.html">menu</a>
            <a href="review.html">review</a>
            <a href="blogs.html">blogs</a>
            <a href="contact.html">contact</a>
            <a href="php/logout.php">logout</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" name="" id="search-box" placeholder="search here..">
            <label class="fas fa-search"></label>
        </form>

        <!-- shopping cart -->

        <div class="shopping-cart">

            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="images/cart-1.png" alt="">
                <div class="content">
                    <h3>morning coffee</h3>
                    <span class="price">$12.99/=</span>
                    <span class="quantity"> qty: 1</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="images/cart-2.png" alt="">
                <div class="content">
                    <h3>latte coffe</h3>
                    <span class="price">$12.99/=</span>
                    <span class="quantity"> qty: 1</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="images/cart-3.png" alt="">
                <div class="content">
                    <h3>creamy latte coffee</h3>
                    <span class="price">$12.99/=</span>
                    <span class="quantity"> qty: 1</span>
                </div>
            </div>

            <div class="total">total : $39/=</div>
            <a href="#" class="btn">checkout</a>

        </div>

        <!-- login -->

        <form action="" class="login-form">
            <h3>login form</h3>
            <input type="email" placeholder="Your Email" class="box">
            <input type="password" placeholder="Your Password" class="box">
            <p>forget your password <a href="#"> click here</a></p>
            <p>don't have an account? <a href="#"> create now</a></p>
            <input type="submit" value="login" class="btn">
        </form>

    </header>

    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>Start Your Day With a Sip of Sunshine</h3>
            <p>let the aroma of coffee awaken your senses and the warmth of each cup embrace your soul.
                Wrap your hands around a mug of freshly brewed magic, and let each sip dance with the promise of a beautiful day ahead.</p>
            <a href="#" class="btn">Explore now </a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- banner section starts -->

    <section class="banner-container">

        <div class="banner">
            <img src="images/banner-1.png" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn"> shop now</a>
            </div>
        </div>

        <div class="banner">
            <img src="images/banner-2.png" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn"> shop now</a>
            </div>
        </div>

        <div class="banner">
            <img src="images/banner-3.png" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn"> shop now</a>
            </div>
        </div>

    </section>

    <!-- banner section ends -->

    <!-- offer section starts -->

    <section class="offer">

        <div class="heading">
            <h3>our offer</h3>
        </div>

        <div class="box-container">

            <div class="box">
                <img src="images/offer-1.png" alt="">
                <h3>varieties of coffee</h3>
                <p>Discover the world of coffee, one cup at a time.</p>
            </div>

            <div class="box">
                <img src="images/offer-2.png" alt="">
                <h3>varieties of coffee</h3>
                <p>Every bean, a new adventure in flavor.</p>
            </div>

            <div class="box">
                <img src="images/offer-3.png" alt="">
                <h3>varieties of coffee</h3>
                <p>Find your favorite from a world of possibilities.</p>
            </div>

            <div class="box">
                <img src="images/offer-4.png" alt="">
                <h3>varieties of coffee</h3>
                <p>From bold espresso to creamy lattes—explore your perfect brew.</p>
            </div>

        </div>

    </section>

    <!-- offer section ends -->

    <!-- footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3><i class="fas fa-mug-hot"></i> coffee</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +63 9543256273 </a>
                <a href="#" class="links"> <i class="fas fa-envelope"></i> Christian.Cabelo@gmail.com</a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Coffee Shop Sibonga 6020</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#">my order</a>
                <a href="#">my favorite</a>
                <a href="#">my wishlist</a>
                <a href="#">my account</a>
                <a href="#">terms or use</a>
            </div>

            <div class="box">
                <h3>useful links</h3>
                <a href="#">menu</a>
                <a href="#">location</a>
                <a href="#">events & promotions</a>
                <a href="#">FAQs</a>
                <a href="#">contact us</a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest update</p>
                <form action="">
                    <input type="email" placeholder="enter your email">
                    <input type="submit" value="subscribe" class="btn">
                </form>
                <img src="images/payment.png" class="payment" alt="">
            </div>

        </div>

        <div class="credit"> created by <span>Christian Cabelo</span> | all rights reserved! </div>

    </section>












    <!-- footer section ends -->




















    <script src="script.js"></script>
</body>
</html>