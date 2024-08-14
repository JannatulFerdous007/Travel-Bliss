<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/book_style.css">

</head>

<body>

   <!-- header section starts  -->

   <?php include 'header.php'; ?>
   <!-- header section ends -->
   <br><br><br>
   <!-- booking section starts  -->

   <section class="booking">

      <h1 class="heading-title">book your trip!</h1>

      <form action="book_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>name :</span>
               <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
               <span>phone :</span>
               <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
               <span>address :</span>
               <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
               <span>where to :</span>
               <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
               <span>how many :</span>
               <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
               <span>arrivals :</span>
               <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
               <span>leaving :</span>
               <input type="date" name="leaving">
            </div>
         </div>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         <input type="submit" value="submit" class="btn" name="send">

      </form>

   </section>

   <!-- booking section ends -->


   <?php include 'footer.php'; ?>


   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>