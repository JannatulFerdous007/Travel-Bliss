<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Bliss</title>
    <link rel="stylesheet" type="text/css" href="css/k_style.css">
    <link rel="stylesheet" type="text/css" href="css/maldives.css">
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

    .close {
        position: absolute;
        top: -15px;
        right: -15px;
        background: white;
        height: 20px;
        width: 20px;
        border-radius: 50%;
        box-shadow: 6px 6px 29px -4px rgba(0, 0, 0, 0.75);
        cursor: pointer;
    }

    .overlay_flight_traveldil {
        visibility: hidden;
        width: 1200px;
        background-color: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        bottom: -40%;
        left: -500px;
        margin-left: -80px;

    }

    .overlay_flight_traveldil:target {
        visibility: visible;
        opacity: 1;
    }

    .popup_flight_travlDil {
        margin: 70px auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        width: 30%;
        position: relative;
        transition: all 2s ease-in-out;

    }

    .popup_flight_travlDil .close_flight_travelDl {
        position: absolute;
        top: 20px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }

    .popup_flight_travlDil .content_flightht_travel_dil {
        max-height: 30%;
        overflow: auto;
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
        background: url(image/t1.jpg) no-repeat;
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
    <div class="heading" style="background:url(image/img2.jpeg) no-repeat">
        <h1 style="color:white;">Coral Reef Maldives</h1>
    </div><br><br>


    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa;"><b>Save up to 45% Off on
            our Accommodations + 60 minutes Balinese massage and other exciting Inclusions. Our best offer ever.</b></p>
    <br><br>
    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa; color:#0098a1;"><b>Rate
            details & Inclusions:</b><br></p>
    Save up to 45% off on Your choice of accommodation with breakfast.<br>
    60 minutes Balinese massage included for 2 adults during the stay.<br>
    30mins photography services with one printed photo.<br>
    Complimentary Snorkeling equipment.<br>
    Early check-in subject to availability on arrival.<br>
    Flexibility for Unlimited Date Amendment, however rate difference applicable if changed to a date with different
    rates.<br><br>
    </ul>
    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa; color:#0098a1;"><b>Terms &
            Conditions:</b><br></p>
    Rates are subject to taxes & service charge.<br>
    A non-refundable Deposit of 25% pre-payment is required within 48hrs of reservation to avoid automatic cancellation
    of booking. Balance within 14 days prior to arrival date.<br>
    Non-Refundable Rates, Date can be modified based on availability and rates difference for the period will be applied
    accordingly.<br>
    Minimum length of stay 4 nights.<br>
    </ul>
    For more information: Maldives Hotel Reservation | Kurumba Maldives | Reservation Requests <br>
    E: : reservations@coral.com<br>
    T : +960-664-2324<br>
    Skype : reservations.Ibrahim<br>
    </div>
    </div>
    <br><br>
    <h1 class="heading"><span>
            <p style="font-family: 'Tangerine', serif;font-size: 35px;text-shadow: 4px 4px 4px #aaa; color:#0098a1;">
                Select a room</h1>
    </p>

    <section id="about" class="about">
        <br><br><br><br>
        <div class="row">
            <div class="image">
                <img src="image/t2.jpeg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <p><b>
                            <p style="color:#0098a1;font-size: 20px">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Superior
                                Beach Villa
                        </b><br></p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Up to 2 guests. Max Adults: 2<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    These 12 elegantly styled, Superior Beach Villas are 58 square
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;meters of pure luxury.
                    Designed in
                    muted and soothing pastel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shades with a large
                    comfortable sea-facing bed, our airy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Superior
                    beach
                    villas at Taj Coral Reef, Maldives work their
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;magic on you with brilliant views, outdoor
                    showers and
                    a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uniquely designed open space.&emsp;&emsp;

                    </span>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="book.php" class="button"> book now</a>
                </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
</body>
</section>
<section id="about" class="about">
    <br><br><br><br>
    <div class="row">
        <div class="image">
            <img src="image/t4.jpeg" alt="" style="width:300px; height:200px;">
        </div>

        <body style="text-align:center">

            <div class="content">
                <p><b>
                        <p style="color:#0098a1;font-size: 20px">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deluxe
                            Beach Villa
                    </b><br></p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Up to 3 guests. Max Adults: 2, Max Children: 1<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Deluxe Beach Villas in the Maldives offer you
                66 square &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; of exotic sophistication with
                thatched roofs, an outer deck &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and space for
                dinner. Large glass bay windows show off &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amazing
                beach
                views. Sink into our large comfortable king- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sized
                bed and wake up to the stunning view of the sea..
                </p>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <a href="book.php" class="button"> book now</a>
                </p>
                </span>

            </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </body>
</section>
<section id="about" class="about">
    <br><br><br><br>
    <div class="row">
        <div class="image">
            <img src="image/t6.jpeg" alt="" style="width:300px; height:200px;">
        </div>

        <body style="text-align:center">

            <div class="content">
                <p><b>
                        <p style="color:#0098a1;font-size: 20px">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Premium
                            Water Villa
                    </b><br></p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Up to 4 guests. Max Adults: 3, Max Children: 1
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Our 32 Premium Water Villas at Taj Coral Reef, Maldives will
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;indulge all your senses. With 85 square
                metres destined to be &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;your personal
                paradise, a thatched roof and an outer deck
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overlooking the water
                with sun loungers. Complete bliss! The
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-outdoor experience
                wouldn't be complete without an open air
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shower.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="book.php" class="button"> book now</a>
                </p>
                </span>

            </div>
    </div>
    </div>
    </div>
    </body>
</section>

<section id="about" class="about">
    <br><br><br><br>
    <div class="row">
        <div class="image">
            <img src="image/t8.jpeg" alt="" style="width:300px; height:200px;">
        </div>

        <body style="text-align:center">

            <div class="content">
                <p><b>
                        <p style="color:#0098a1;font-size: 20px">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nirvana
                            Presidential Suite</p>
                    </b>
                    &emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Up to 5 guests. Max Adults: 4, Max Children: 1
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You've found the most remarkable space on the
                    island! Our &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nirvana Presidential Suite becomes
                    whatever experience you &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seek in the Maldives.
                    A personal haven, a honeymoon spot or &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a family
                    getaway
                    – it’s the perfect destination! These suites
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are utterly remarkable. Constructed as duplex
                    villas
                    with &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;thatched roofs.
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="book.php" class="button"> book now</a>
                </p>
                </span>

            </div>
    </div>
    </div>
    </div>
    </body>
</section>

<br><br><br><br>
<p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa; color:black;"><b>
        <p style="color:#0098a1;font-size: 20px">For more information:
    </b><br></p>
Maldives Hotel Reservation | Taj Coral Reef Resort & Spa, Maldives | Reservation Requests <br>
E: : tajcoralreef@tajhotels.com<br>
T : +960 664-1948<br>
<br><br><br><br>

<?php include 'footer.php'; ?>
</body>

</html>