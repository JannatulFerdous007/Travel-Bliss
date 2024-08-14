<?php

@include 'config.php';

if (isset($_POST['add_product'])) {
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_img/' . $p_image;

   $insert_query = mysqli_query($conn, "INSERT INTO `svehicle`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');

   if ($insert_query) {
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
   } else {
      $message[] = 'could not add the product';
   }
}
;

if (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `svehicle` WHERE id = $delete_id ") or die('query failed');
   if ($delete_query) {
      header('location:admin.php');
      $message[] = 'product has been deleted';
   } else {
      header('location:admin.php');
      $message[] = 'product could not be deleted';
   }
   ;
}
;

if (isset($_POST['update_product'])) {
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/' . $update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `svehicle` SET name = '$update_p_name', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'");

   if ($update_query) {
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:admin.php');
   } else {
      $message[] = 'product could not be updated';
      header('location:admin.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/vehicles_style.css">

</head>
<style>
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

      <section>

         <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
            <h3>Add Avaiable Vehicles</h3>
            <input type="text" name="p_name" placeholder="Vehicle Name" class="box" required>
            <input type="number" name="p_price" min="0" placeholder="Price" class="box" required>
            <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
            <input type="submit" value="add the vehicle" name="add_product" class="btn">
         </form>

      </section>

      <section class="display-product-table">

         <table>

            <thead>
               <th>vehicle image</th>
               <th>vehicle name</th>
               <th>vehicle price</th>
               <th>action</th>
            </thead>

            <tbody>
               <?php

               $select_products = mysqli_query($conn, "SELECT * FROM `svehicle`");
               if (mysqli_num_rows($select_products) > 0) {
                  while ($row = mysqli_fetch_assoc($select_products)) {
                     ?>

                     <tr>
                        <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                        <td>
                           <?php echo $row['name']; ?>
                        </td>
                        <td>$<?php echo $row['price']; ?>/-</td>
                        <td>
                           <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn"
                              onclick="return confirm('are your sure you want to delete this?');"> <i
                                 class="fas fa-trash"></i> delete </a>
                           <a href="admin.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i>
                              update </a>
                        </td>
                     </tr>

                     <?php
                  }
                  ;
               } else {
                  echo "<div class='empty'>no product added</div>";
               }
               ;
               ?>
            </tbody>
         </table>

      </section>

      <section class="edit-form-container">

         <?php

         if (isset($_GET['edit'])) {
            $edit_id = $_GET['edit'];
            $edit_query = mysqli_query($conn, "SELECT * FROM `svehicle` WHERE id = $edit_id");
            if (mysqli_num_rows($edit_query) > 0) {
               while ($fetch_edit = mysqli_fetch_assoc($edit_query)) {
                  ?>

                  <form action="" method="post" enctype="multipart/form-data">
                     <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
                     <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
                     <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
                     <input type="number" min="0" class="box" required name="update_p_price"
                        value="<?php echo $fetch_edit['price']; ?>">
                     <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
                     <input type="submit" value="update the prodcut" name="update_product" class="btn">
                     <input type="reset" value="cancel" id="close-edit" class="option-btn">
                  </form>

                  <?php
               }
               ;
            }
            ;
            echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
         }
         ;
         ?>

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