<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}
;

if (isset($_GET['logout'])) {
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/h_style.css">
   <p style="background-image: url('images/cuban-fantasy.jpg');">

</head>
<style>
   body {
      background-image: url('images/background.webp');
      background-size: cover;
      justify-content: left;
   }

   h5 {
      color: red;
   }
</style>

<body>
   <header>
      <a href="#" class="logo">Travel Bliss <span>.</span></a>

      <nav class="navbar">
         <ul>
            <li><a data-scroll="home" href="#home" class="active">home</a></li>
            <li><a data-scroll="services" href="#services">services</a></li>
            <li><a data-scroll="about" href="#about">about</a></li>
            <li><a data-scroll="destination" href="#destination">destination</a></li>
            <li><a data-scroll="contact" href="contact.php">contact</a></li>
            <li><a data-scroll="login" href="login.php">Login</a></li>
         </ul>
      </nav>

      <div class="fas fa-bars"></div>

   </header>

   <div class="container">

      <div class="profile">
         <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if (mysqli_num_rows($select) > 0) {
            $fetch = mysqli_fetch_assoc($select);
         }
         if ($fetch['image'] == '') {
            echo '<img src="images/default-avatar.png">';
         } else {
            echo '<img src="uploaded_img/' . $fetch['image'] . '">';
         }
         ?>
         <div class="uprofile">
            <div>
               <h1>Welcome</b> </h1><br>
               <div>
                  <h5><span>
                        <?php echo $fetch['name']; ?>
                     </span></h5>
               </div>
            </div>
            <div>
               <h3>
                  Email: <?php echo $fetch['email']; ?>
               </h3>
            </div>
            <div>
               <h3>
                  Date of Birth: <?php echo $fetch['birthday']; ?>
               </h3>
            </div>
            <div>
               <h3>
                  Address: <?php echo $fetch['address']; ?>
               </h3>
            </div>
            <div>
               <h3>
                  Gender: <?php echo $fetch['gender']; ?>
               </h3>
            </div>
         </div>
         <a href="update_profile.php" class="btn">update profile</a>
         <a href="index.php" class="btn">Back Home</a>
         <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
         <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p>
      </div>

   </div>

</body>

</html>