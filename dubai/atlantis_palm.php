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
        background: url(image/ap6.jpg) no-repeat;
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
    <div class="heading" style="background:url(image/ap6.jpg) no-repeat">
        <h1 style="color:white;">Atlantis The Palm Dubai</h1>
    </div><br><br>


    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa;"><b>Save up to 45% Off on
            our Accommodations + 60 minutes Balinese massage and other exciting Inclusions. Our best offer ever.</b></p>
    <br><br>
    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa; color:#0098a1;"><b>Dubai
            Holiday Package for 4 Nights - 1 Day Stay at Atlantis the Palm</b><br></p><br>
    4 Nights / 5 Days<br>
    Dubai(4N)<br>
    3 This trip is completely customisable<br>
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
                <img src="image/ap2.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 1: Arrival in Dubai and check in at Atlantis the Palm</b><br>
                            On arrival at Dubai Airport, transfer to the hotel and check-in.<br>
                            Spend the day at leisure and relax at the hotel.<br>
                            You can enjoy the various services at the hotel at extra cost on your own.<br>
                            Overnight stay in at the hotel.
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
                <img src="image/ap3.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 2: Dubai City Tour & Dhow Cruise Creek</b><br>
                            After a sumptuous breakfast, check out and proceed for half day city tour of Dubai.<br>
                            Visit Burj Al Arab, Jumeirah Mosque, Atlantis Hotel, Dubai Mall, Mall of Emirates, Palm
                            Island, and Burj Khalifa.<br>
                            Check into the hotel.<br>
                            In the evening, proceed for Dhow Cruise Creek with dinner.<br>
                            Enjoy an international buffet dinner with BBQ and Tanura dance and other entertainment
                            activities.<br>
                            Return to the hotel for the night.<br>
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
                <img src="image/ap4.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 3: Desert Safari</b><br>
                            After breakfast, spend the morning at leisure.<br>
                            In the afternoon proceed for the Desert Safari.<br>
                            You will be picked up from the hotel and drive to the outskirts of the desert.<br>
                            Enjoy the desert journey in a 4 X 4 Land Cruiser that would take you on a dune-bashing
                            ride.<br>
                            On arrival at the desert campsite, you can enjoy your time by riding a camel,enjoying the
                            captivating belly dance<br>
                            Return to the hotel for the night.
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
                <img src="image/ap5.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 4: Visit to Burj Khalifa</b><br>
                            After breakfast, proceed for the visit to Burj Khalifa, the tallest of all the buildings in
                            the world.<br>
                            During the tour, you will be shown a multimedia presentation about the history of Dubai as
                            well as the story of the construction of the building.<br>
                            Afterwards, you will be taken to the 124th observatory deck (at the top) on the fastest
                            elevator.<br>
                            On the 124th observatory deck, you will get a chance to see a 360-degree panoramic view of
                            the entire city of Dubai.<br>
                            Return to the hotel for the night.
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
                <img src="image/ap6.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 5: Departure</b><br>
                            After breakfast, check out from the hotel and proceed to the airport for your onward journey
                            back home.

                        </p>
                        </span>

                    </div>
                </div>
        </div>
        </div>
    </section>
    <br><br>
    <p style="color:#0098a1;font-size: 20px"><b>Meals & other inclusions:</b><br></p>
    Daily breakfast<br>
    Dinner at Dhow Cruise and Desert Safari.<br>
    Airport pick-up & drop<br>
    GST and VAT<br>
    1 Night Stay at Atlantis the Palm, Dubai<br>
    Dhow Cruise with dinner (sharing transfers).<br>
    Dubai city tour (sharing transfers).<br>
    Desert Safari with BBQ dinner and cultural performances (Tanura show, belly dance, fire show) (sharing
    transfers).<br>
    Visit to Burj Khalifa 124-125 floor with Musical Fountain Show (sharing transfers).<br>
    Visa & travel insurance (30 days Dubai visa (single entry). Required: Passport front & last page scan copy, colored
    photograph scan, PAN card scan)<br>
    Entrance fees/extra activities<br>
    <br><br><br><br>
    <p style="color:#0098a1;font-size: 20px"><b>For more information:</b><br></p>
    Atlantis The Palm | Reservation Requests <br>
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