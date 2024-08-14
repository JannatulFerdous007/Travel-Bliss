<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/singapore.css">
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
        background: url(image/s1.jpg) no-repeat;
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
    <div class="heading" style="background:url(image/s1.jpg) no-repeat">
        <h1 style="color:white;">Sentosa Island Singapore</h1>
    </div><br><br>


    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa;"><b>Save up to 45% Off on
            our Accommodations + 60 minutes Balinese massage and other exciting Inclusions. Our best offer ever.</b></p>
    <br><br>
    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa; color:#0098a1;">
        <b>Mesmerising Singapore Trip including Sentosa Island Tour</b><br>
    </p><br>
    5 Nights / 6 Days<br>
    Singapore(4N)<br>
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
                <img src="image/s_i.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 1: Arrival in Singapore</b><br>
                            On arrival at Singapore Airport, you will meet our representative.<br>
                            Transfer to the hotel and check.<br>
                            The rest of the day is free for you to explore Singapore (on your own).<br>
                            At night, if you have time, visit the Clarke Quay.<br>
                            Return to the hotel.<br>
                            Overnight stay in Singapore.<br>
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
                <img src="image/s_i1.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 2: Jurong Bird Park Tour</b><br>
                            After breakfast, proceed to Jurong Bird Park, a home for more than 600 migratory bird
                            species.<br>
                            Enjoy photography and bird feeding sessions.<br>
                            After the visit to the park, enjoy the day at leisure or enjoy shopping.<br>
                            Return to the hotel.<br>
                            Overnight stay in Singapore.<br>
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
                <img src="image/s_i2.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 3: Sentosa Tour</b><br>
                            After breakfast, spend the morning at leisure or you can explore Singapore (on your
                            own).<br>
                            In the afternoon around 02:00 PM, proceed for half-day Sentosa tour.<br>
                            Take a one-way cable car ride into Sentosa Island.<br>
                            Enjoy its beaches where various sports activities are available.<br>
                            Enjoy the various adventurous rides here like Sky Ride.<br>
                            Return to the hotel.<br>
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
                <img src="image/s_i3.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 4: Singapore City Tour</b><br>
                            After breakfast, proceed for half day city tour of Singapore.<br>
                            Drive across the Civic District, the Raffles Landing where you can see Sir Stamford Raffle’s
                            statue, and Suntec City.<br>
                            Visit the Fountain of Wealth, Orchard Road, Little India.<br>
                            Afterwards, visit Merlion Park and enjoy the view of Marina Bay.<br>
                            The rest of the afternoon is free for you to explore Singapore (on your own) or at leisure
                            in the hotel.<br>
                            Overnight stay in Singapore.<br>
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
                <img src="image/s_i4.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 5: Universal Studios Tour</b><br>
                            After breakfast, proceed for a full-day tour of Universal Studios.<br>
                            Enjoy water rides at the ocean world and take a walk through the pre-history at the Jurassic
                            Park Rapids Adventure.<br>
                            Also, explore Hollywood Boulevard for a stroll down the famous Walk of Fame.<br>
                            Return to the hotel.<br>
                            Overnight stay in Singapore.<br>
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
                <img src="image/s_i5.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 6: Departure</b><br>
                            After breakfast, check out from the hotel and keep your bags at the concierge.<br>
                            Spend the rest of the day is free at leisure or explore Singapore on your own or do shopping
                            at the 5 famous places in Singapore such as Mustafa Centre, Bugis Street, Lucky Plaza, Far
                            East Plaza and Anchorpoint Shopping Centre.<br>
                            Later, return back to the hotel and collect your bags.<br>
                            Transfer to the airport for your onward journey back home.<br>
                        </p>
                        </span>

                    </div>
                </div>
        </div>
        </div>
    </section>
    <br><br>
    <p style="color:#0098a1;font-size: 20px"><b>Meals & other inclusions:</b><br></p>
    Accommodation on a twin-sharing basis including daily breakfast.<br>
    Round trip transfers between Changi Airport and the hotel by private vehicle.<br>
    Jurong Bird Park tour with private transfers.<br>
    Half-day Sentosa tour (1-way cable car, Luge and Sky Ride and Wings of Time, SEA Aquarium) with private
    transfer.<br>
    Half-day city tour with Singapore Flyer with seat in coach (SIC) transfer.<br>
    Universal Studio tour with private transfer.<br>
    <br><br><br><br>
    <p style="color:#0098a1;font-size: 20px"><b>For more information:</b><br></p>
    entosa Island | Reservation Requests <br>
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