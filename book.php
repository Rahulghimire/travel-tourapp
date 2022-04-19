
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
<section class="header">
    <a href="home.php" class="logo">TRAVEL&TOUR AGENCY</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">Package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<div class="heading" style="background:url(images/c2.jpg) no-repeat">
    <h1>Book Now</h1>
</div>

<section class="booking">

<h1 class="heading-title">book your trip!</h1>
<form action="book_form.php" method="post" class="book-form">
<div class="flex">
    <div class="inputBox">
        <span>name:</span>
        <input type="text" placeholder="enter your name" name="name">
    </div>
    <div class="inputBox">
        <span>email:</span>
        <input type="email" placeholder="enter your email" name="email">
    </div>
    <div class="inputBox">
        <span>phone:</span>
        <input type="number" placeholder="enter your phone" name="phone" required>
    </div>

    <div class="inputBox">
        <span>address:</span>
        <input type="text" placeholder="enter your address" name="address">
    </div>
    <div class="inputBox">
        <span>where to:</span>
        <input type="text" placeholder="place you want to visit" name="location">
    </div>
    <div class="inputBox">
        <span>how many:</span>
        <input type="number" placeholder="how many people" name="guests">
    </div>
    <div class="inputBox">
        <span>arrivals:</span>
        <input type="date" name="arrivals">
    </div>
    <div class="inputBox">
        <span>departures:</span>
        <input type="date" name="leaving">
    </div>
</div>
<input type="submit" value="submit" class="btn" name="send">
</form>
</section>


<section class="footer">
<div class="container">

<div class="box">
    <h3>Quick Links</h3>
<a href="home.php"><i class="fas fa-angle-right"></i>home</a>
<a href="about.php"><i class="fas fa-angle-right"></i>about</a>
<a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
<a href="book.php"><i class="fas fa-angle-right"></i>book</a>
</div>

<div class="box">
    <h3>Extra Links</h3>
<a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
<a href="#"><i class="fas fa-angle-right"></i>about us</a>
<a href="#"><i class="fas fa-angle-right"></i>privacy polocy</a>
<a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
</div>

<div class="box">
    <h3>Contact Info</h3>
<a href="#"><i class="fas fa-phone"></i>01-4242121</a>
<a href=""><i class="fas fa-phone"></i>9860842017</a>
<a href=""><i class="fas fa-envelope"></i>ghimirerahul554@gmail.com</a>
<a href=""><i class="fas fa-map"></i>samakhushi,ktm,nepal</a>
</div>

<div class="box">
    <h3>Follow Us</h3>
    <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
    <a href="#"><i class="fab fa-twitter"></i>twitter</a>
    <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
    <a href="#"><i class="fab fa-instagram"></i>instagram</a>
</div>
</div>

<div class="credit">created by<span> Rahul Ghimire</span> || all right reserved.</div>
</section>
    
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>