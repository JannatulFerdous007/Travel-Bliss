<?php

$connection = mysqli_connect('localhost', 'root', '', 'travel_bliss');

if (isset($_POST['send'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $time_hour = $_POST['time_hour'];

   $request = " INSERT INTO vehicle_booking(name, email, phone, address, location, guests, arrivals, time_hour) VALUES('$name','$email','$phone','$address','$location','$guests','$arrivals','$time_hour') ";
   $query = mysqli_query($connection, $request);

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Vehicle Booking</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
   <link href="css/bootstrap.min.css" rel="stylesheet">

   <style>
      body {
         background-image: url('img/bg23.jpg');
         background-size: cover;
      }

      form {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
         gap: 1.5rem;
         background: white;
         /* max-width: 1200px; */
         margin: 0 auto;
         align-items: flex-start;
         text-align: center;
         color: #0098a1;
         font-weight: bold;
         font-size: 18px;

         border: 10px inset rgb(248, 249, 250);
      }

      input {
         height: 50px;
         width: 600px;
         margin-bottom: 10px;
         outline: none;
         border: none;
         background: white;
         color: black;
         font-size: 18px;
         text-align: left;
         border-radius: 5px;
      }

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
   </style>
</head>
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
<section class="booking">
   <br></br><br></br>
   <center>
      <h1 class="heading-title" style="color:#0098a1" ;>Book Vehicle From Here!</h1>
   </center>
   <form action="" method="post" class="book-form">

      <div class="flex">
         <br></br>
         <div>
            <label>pickup date :&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="date" name="arrivals" required>
         </div> <br></br>
         <div>
            <label>pickup hour :&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="time" name="time_hour" required>
         </div> <br></br>
         <div>
            <label>current address :&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" placeholder="enter your current address" name="address" required>
         </div> <br></br>
         <div>
            <label>destination :&nbsp;&nbsp;</label>
            <input type="text" placeholder="place you want to visit" name="location" required>
         </div> <br></br>
         <div>
            <div>
               <label>name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
               <input type="text" placeholder="enter your name" name="name" required>
            </div> <br></br>
            <div>
               <label>email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
               <input type="email" placeholder="enter your email" name="email" required>
            </div> <br></br>
            <div>
               <label for="phone">phone no:</label>
               <input type="tel" id="phone" name="phone" placeholder="01**" required>
            </div> <br></br>
            <label>how many :</label>
            <input type="number" placeholder="number of guests" name="guests" required>
         </div> <br></br>
         <input type="submit" value="submit" class="btn btn-primary" name="send"> <br></br>
      </div>

   </form>

</section>
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

</html>