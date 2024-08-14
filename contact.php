<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <title>Contact</title>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <?php include 'header.php'; ?>
  <br><br><br><br><br><br><br>
  <section id="form" data-aos="fade-down">
    <div class="container">
      <h3 class="form__title">
        <p style="font-family: 'Tangerine', serif;font-size: 35px;text-shadow: 4px 4px 4px #aaa; color:#0098a1;">
          Contact & Inquiry
      </h3>
      <div class="form__wrapper">
        <form action="contactDB.php" method="post">
          <form name="contact" method="POST" netlify>
            <div class="form__group">
              <label for="fulltName">First Name</label>
              <input type="text" id="fullName" name="name" required>
            </div>
            <div class="form__group">
              <label for="lastName">Last Name</label>
              <input type="text" id="lastName" name="name" required>
            </div>
            <div class="form__group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form__group">
              <label for="subject">Mobile Number</label>
              <input type="text" id="subject" name="mobile" required>
            </div>
            <div class="form__group form__group__full">
              <label for="message">Message</label>
              <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            </div>&emsp;
            <button type="submit" value="submit" class="btn primary-btn">Send</button>
          </form>
      </div>
    </div>
  </section>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="script.js"></script>
  <a href="contactDB.php">
    <?php include 'footer.php'; ?>


</body>

</html>