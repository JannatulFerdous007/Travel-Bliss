<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Bliss</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/dubai.css">
</head>

<style>
    .button {
        background-color: #0098a1;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
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
        transition: ease .40s;
    }

    .navbar a:hover {
        background: var(--bg-color);
        color: var(--text-color);
        box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
        border-radius: 4px;
    }

    .heading {
        background-size: cover !important;
        background-position: center !important;
        padding-top: 10rem;
        padding-bottom: 15rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .about .row {
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 90%;
        margin: 0 auto;
    }

    .about .row .image img {
        height: 60vh;
        width: 25vw;
    }

    .about .row .content h3 {
        font-size: 4rem;
        color: #0098a1;
    }

    .about .row .content p {
        font-family: Georgia;
        font-size: 18px;
        color: #333;
    }

    .about .row .content .btn {
        outline: none;
        border: none;
        cursor: pointer;
        transition: .2s linear;
        height: 4rem;
        width: 18rem;
        margin-top: 1rem;
        color: #fff;
        background: #0098a1;
        font-size: 2rem;
    }

    .about .row .content .btn1,
    .about .row .content .btn:hover {
        background: none;
        color: #0098a1;
        border: .2rem solid #0098a1;
        margin-right: 1rem;
    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
        list-style: none;
        scroll-behavior: smooth;
    }

    .home-bg {
        background: url(image/s_r1.jpg) no-repeat;
        background-size: cover;
        background-position: center;
    }

    .home-bg .home {
        display: flex;
        align-items: center;
        min-height: 0vh;
    }

    .home-bg .home .content {
        width: 50rem;
    }

    .home-bg .home .content span {
        color: var(--orange);
        font-size: 2.5rem;
    }

    .home-bg .home .content h3 {
        font-size: 3rem;
        text-transform: uppercase;
        margin-top: 1.5rem;
        color: white;
    }

    .home-bg .home .content p {
        font-size: 1.2rem;
        padding: 1rem 0;
        color: white;
    }

    .home-bg .home .content a {
        display: inline-block;
        width: auto;

    }
</style>

<body>
    <!--header--->
    <?php include 'header.php'; ?>
    <!-- End header--->
    <div class="heading" style="background:url(image/s_r1.jpg) no-repeat">
        <h1 style="color:white;">Safari & River Cruise Dubai</h1>
    </div><br><br>

    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa;"><b>Save up to 45% Off on
            our Accommodations + 60 minutes Balinese massage and other exciting Inclusions. Our best offer ever.</b></p>
    <br><br>
    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa; color:#0098a1;"><b>Quick
            Honeymoon Getaway in Dubai with Desert Safari & River Cruise</b><br></p><br>
    3 Nights / 4 Days<br>
    Dubai(3N)<br>
    This trip is completely customisable<br>
    </ul>
    <br><br>
    <a href="book.php" class="button"> book now</a>
    <h1 class="heading"><span>
            <p style="font-family: 'Tangerine', serif;font-size: 35px;text-shadow: 4px 4px 4px #aaa; color:#0098a1;">
                Tour Itinerary:</h1>
    </p>

    <section id="about" class="about">
        <br><br><br><br>
        <div class="row">
            <div class="image">
                <img src="image/s_r2.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 1: Arrival in Dubai</b><br>
                            On arrival at Dubai Airport, transfer to the hotel.<br>
                            En-route have lunch in a restaurant.<br>
                            Check in to the hotel and relax.<br>
                            In the evening, proceed for Dubai Dhow Cruise (Creek).<br>
                            Dinner onboard cruise (basic Indian).<br>
                            Return back to the hotel.<br>
                            Overnight stay in Dubai.<br>
                        </p>
                        </span>

                    </div>
                </div>
        </div>
        </div>
    </section>
    <section id="about" class="about">
        <br><br><br><br>
        <div class="row">
            <div class="image">
                <img src="image/s_r3.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 2: Dubai Sightseeing</b><br>
                            After breakfast, proceed for sightseeing in Dubai.<br>
                            Visit Dubai Frame and Miracle Garden.<br>
                            Afterward, have lunch in a restaurant.<br>
                            In the afternoon, proceed for the Global Village tour.<br>
                            In the evening, have dinner at an Indian restaurant.<br>
                            Return back to the hotel and relax.<br>
                            Overnight stay in Dubai.<br>
                        </p>
                        </span>

                    </div>
                </div>
        </div>
        </div>
    </section>
    <section id="about" class="about">
        <br><br><br><br>
        <div class="row">
            <div class="image">
                <img src="image/s_r4.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 3: Dubai City Tour & Desert Safari</b><br>
                            After breakfast, proceed for the Dubai city tour.<br>
                            After the city tour, proceed for lunch in an Indian restaurant <br>
                            In the afternoon, proceed for a desert safari.<br>
                            Enjoy Tanura/Belly dance and BBQ dinner in the camp.<br>
                            Return back to the hotel.<br>
                            Overnight stay in Dubai.<br>
                        </p>
                        </span>

                    </div>
                </div>
        </div>
        </div>
    </section>
    <section id="about" class="about">
        <br><br><br><br>
        <div class="row">
            <div class="image">
                <img src="image/s_r6.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 4: Departure</b><br>
                            After breakfast, check out from the hotel.<br>
                            You can spend the rest of the time on your own/enjoy shopping.<br>
                            Lunch at an Indian restaurant.<br>
                            Later, proceed to visit Burj Khalifa.<br>
                            Afterward, transfer to Dubai International Airport for your onward journey back home.<br>
                        </p>
                        </span>

                    </div>
                </div>
        </div>
        </div>
    </section>

    <br><br>
    <p style="color:#0098a1;font-size: 20px"><b>Meals & other inclusions:</b><br></p>

    Accommodation on a twin-sharing basis.<br>
    Dubai Visa processing cost.<br>
    Travel insurance.<br>
    Daily breakfast at the hotel except on day 01.<br>
    Meals as specified in the itinerary (breakfast, lunch, and dinner).<br>
    All tours & transfers on a private basis.<br>
    Dubai Dhow Cruise with dinner (Creek).<br>
    Admission to Dubai Frame, Miracle Garden, and Global Village.<br>
    Dubai city tour<br>
    Admission to Burj Khalifa 124th Floor (non-peak hour).<br>
    Desert safari with dinner in camp.<br>
    Shopping drop <br>
    All presently applicable hotel taxes including GST & VAT as applicable.<br>
    <br><br><br><br>
    <p style="color:#0098a1;font-size: 20px"><b>For more information:</b><br></p>
    Safari & River Cruise | Reservation Requests <br>
    E: : reservations@dubai.com<br>
    T : +960-664-2324<br>
    <br><br><br><br><br>
    <script>
        // When the user clicks on div, open the popup
        function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
    </script>
    <?php include 'footer.php'; ?>
</body>

</html>