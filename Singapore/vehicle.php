<?php

@include 'config.php';

if (isset($_POST['add_to_cart'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if (mysqli_num_rows($select_cart) > 0) {
      $message[] = 'product already added to cart';
   } else {
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
<style>
   .button {
      background-color: #0098a1;
      /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
   }

   html {
      overflow-x: hidden;
      font-size: 62.5%;
   }

   .heading {
      color: rgb(0, 0, 0);
      font-size: 3.5rem;
      padding: 1rem;
      padding-top: 6rem;
      text-align: center;
      letter-spacing: 0.2rem;
   }

   .heading span {
      color: #0098a1;
   }

   header {
      font-family: cursive;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      top: 1.5rem;
      left: 50%;
      border-radius: 0.5rem;
      box-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.3);
      padding: 0.3rem 2rem;
      transition: 0.2s linear;
      z-index: 1000;
   }

   .header-active {
      top: 0;
      width: 100%;
      border-radius: 0;
   }

   header .logo {
      color: #333;
      font-size: 3rem;
   }

   header .logo span {
      color: #0098a1;
   }

   header .navbar ul {
      list-style: none;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 0;
      padding: 0;
   }

   header .navbar ul li {
      margin: 0 1rem;
   }

   header .navbar ul li a {
      font-size: 2rem;
      color: #333;
      transition: 0.2s linear;
   }

   header .navbar ul li .active,
   header .navbar ul li a:hover {
      color: #0098a1;
   }

   header .fa-bars {
      font-size: 3rem;
      color: #0098a1;
      cursor: pointer;
      display: none;
   }

   * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
      text-decoration: none;
      list-style: none;
      scroll-behavior: smooth;
   }

   .logo {
      font-size: 20px;
      font-weight: 600;
      letter-spacing: 1px;
      color: var(--bg-color);
   }

   .navbar {
      display: flex;
   }

   .navbar a {
      color: var(--bg-color);
      font-size: var(--p-font);
      font-weight: 500;
      padding: 10px 22px;
      border-radius: 4px;
      transition: ease 0.4s;
   }

   .navbar a:hover {
      background: var(--bg-color);
      color: var(--text-color);
      box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
      border-radius: 4px;
   }

   #menu-icon {
      color: var(--bg-color);
      font-size: 35px;
      z-index: 10001;
      cursor: pointer;
      display: none;
   }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Vehicles</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="css/h_style.css">
   <link rel="stylesheet" type="text/css" href="css/dubai.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/vehicles_style.css">
</head>
<style>
   html {
      overflow-x: hidden;
      font-size: 62.5%;
   }

   * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
      text-decoration: none;
      list-style: none;
      scroll-behavior: smooth;
   }

   :root {
      --bg-color: #fff;
      --text-color: #221314;
      --second-color: #5a7184;
      --main-color: #6e54fa;
      --big-font: 6rem;
      --h2-font: 3rem;
      --p-font: 1.1rem;
   }

   #contact {
      background: #0098a1;
   }

   .main {
      display: flex;
      flex-wrap: wrap;
   }

   .footer {
      padding: 5px 0;
      height: 2px;
   }

   .list {
      width: 25%;
   }

   .list h4 {
      font-size: 21px;
      color: var(--bg-color);
      margin-bottom: 30px;
      position: relative;
   }

   .list h4::before {
      content: "";
      position: absolute;
      height: 2px;
      width: 60px;
      left: 0;
      bottom: -10px;
      background: var(--bg-color);
   }

   .list ul li:not(last-child) {
      margin-bottom: 8px;
   }

   .list ul li a {
      color: #ffffffbf;
      font-size: var(--p-font);
      display: block;
      transition: 0.3s;
   }

   .list ul li a:hover {
      color: var(--bg-color);
      transform: translateX(14px);
   }

   .list .social a {
      height: 40px;
      width: 40px;
      background: var(--bg-color);
      color: var(--main-color);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 21px;
      border-radius: 15px;
      transition: 0.3s;
      margin-right: 10px;
   }

   .list .social a:hover {
      transform: scale(1.1);
   }

   .end-text {
      text-align: right;
      padding-top: 130px;
   }

   .end-text p {
      color: var(--bg-color);
      font-size: 14px;
      letter-spacing: 2px;
   }

   @media (max-width: 1400px) {
      header {
         padding: 17px 3%;
         transition: 0.2s;
      }

      header.sticky {
         padding: 10px 3%;
         transition: 0.2s;
      }

      section {
         padding: 80px 3%;
         transition: 0.2s;
      }
   }
</style>

<body>
   <header>
      <a href="#" class="logo">Travel Bliss <span>.</span></a>

      <nav class="navbar">
         <ul>
            <li><a data-scroll="home" href="../index.php" class="active">home</a></li>
            <li><a data-scroll="services" href="#services">services</a></li>
            <li><a data-scroll="about" href="#about">about</a></li>
            <li><a data-scroll="destination" href="#destination">destination</a></li>
            <li><a data-scroll="#" href="../news.php">news</a></li>
            <li><a data-scroll="contact" href="contact.php">contact</a></li>
         </ul>
      </nav>

      <div class="fas fa-bars"></div>

   </header>
   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
      }
      ;
   }
   ;

   ?>
   <div class="container">

      <section class="products">

         <h1 class="heading">our vehicles avaiable</h1>

         <div class="box-container">

            <?php

            $select_products = mysqli_query($conn, "SELECT * FROM `svehicle`");
            if (mysqli_num_rows($select_products) > 0) {
               while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                  ?>

                  <form action="" method="post">
                     <div class="box">
                        <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                        <h3>
                           <?php echo $fetch_product['name']; ?>
                        </h3>
                        <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                        <a href="vehicle_booking.php" class="button"> book now</a>
                     </div>
                  </form>

                  <?php
               }
               ;
            }
            ;
            ?>

         </div>

      </section>
   </div>
   <section id="contact">
      <div class="footer">
         <div class="main">
            <div class="list">
               <h4>Travel Bliss</h4>
               <ul>
                  <li><a href="#">We Travel not to escape life, <br>but for life not to escape us.</a></li>
               </ul>

            </div>
            <div class="list">
               <h4>Quick Links</h4>
               <ul>
                  <li><a href="#">home</a></li>
                  <li><a href="#services">services</a></li>
                  <li><a href="#about">about</a></li>
                  <li><a href="#destination">destination</a></li>
                  <li><a href="contact.php">contact</a></li>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="weather.php">weather</a></li>
               </ul>
            </div>

            <div class="list">
               <h4>Contact Info</h4>
               <ul>
                  <li><a href="#">jannatulferdous3853@gmail.com</a></li>
                  <li><a href="#">+1(123)-456-7890</a></li>
                  <li><a href="#">abidanadia@gmail.com</a></li>
                  <li><a href="#">+1(123)-456-7890</a></li>
               </ul>
            </div>

            <div class="list">
               <h4>Connect</h4>
               <div class="social">
                  <a href="#"><i class='bx bxl-facebook'></i></a>
                  <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                  <a href="#"><i class='bx bxl-twitter'></i></a>
                  <a href="#"><i class='bx bxl-linkedin'></i></a>
               </div>
            </div>
         </div>
      </div>
      <div class="end-text">
         <p>©Travel Bliss-2022</p>
      </div>
   </section>
   <!-- custom js file link  -->
   <script src="js/script.js"></script>
</body>

</html>