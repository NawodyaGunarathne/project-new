
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="home-bg">
   
   

   <section class="home">

      <div class="content">
         <span>Best Home Equipment</span>
         <h3>ENHANCE THE CHARM OF THE HOME...</h3>
         <p>Make your home beautiful with us. You can buy our concrete products through this site easily. </p>
         <a href="about.php" class="btn">about us</a>
      </div>
      <div class="content">
        <img src="img/logo.png" alt="">
      </div>

   </section>

</div>

<section class="home-category">

   <h1 class="title">Our Services</h1>

   <div class="box-container">

      <div class="box">
         <img src="img/concrete2.jpg" alt="">
         <h3>Concrete Products</h3>
         <p>Flower pots, Benchs & All garden products</p>
         <a href="contact.php" class="btn">Call Now</a>
      </div>

      <div class="box">
         <img src="img/metal.jpg" alt="">
         <h3>Iron works</h3>
         <p>All metal products</p>
         <a href="contact.php" class="btn">Call Now</a>
      </div>

      <div class="box">
         <img src="img/wiriing2.jpg" alt="">
         <h3>Electrical Wiring</h3>
         <p>All single phase & 3 phase wiring</p>
         <a href="contact.php" class="btn">Call Now</a>
      </div>

   </div>

</section>
<br><br><br>

 
<footer class="footer">

   <section class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="product.php"> <i class="fas fa-angle-right"></i> shop</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> contact</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="product.php"> <i class="fas fa-angle-right"></i> product</a>
         <a href="wishlist.php"> <i class="fas fa-angle-right"></i> wishlist</a>
         <a href="login.php"> <i class="fas fa-angle-right"></i> login</a>
         <a href="register.php"> <i class="fas fa-angle-right"></i> register</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <p> <i class="fas fa-phone"></i> +94-711-930-060 </p>
         <p> <i class="fas fa-phone"></i>+94-711-930-070</p>
         <p> <i class="fas fa-envelope"></i> homeworkshoplk@gmail.com </p>
         <p> <i class="fas fa-map-marker-alt"></i> 503/3, Waga west, Thummodara </p>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </section>

   <p class="credit"> &copy; copyright @ <?= date('Y'); ?> by <span>Home Workshop</span> | all rights reserved! </p>

</footer>

<script src="script.js"></script>

</body>
</html>