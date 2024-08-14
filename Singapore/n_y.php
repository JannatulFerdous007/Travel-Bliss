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
        background: url(image/ny1.jpg) no-repeat;
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
    <div class="heading" style="background:url(image/ny1.jpg) no-repeat">
        <h1 style="color:white;">New Year's Celebration Singapore</h1>
    </div><br><br>

    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa;"><b>Save up to 45% Off on
            our Accommodations + 60 minutes Balinese massage and other exciting Inclusions. Our best offer ever.</b></p>
    <br><br>
    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa; color:#0098a1;"><b>New
            Year's Celebration in Singapore</b><br></p><br>
    4 Nights / 5 Days<br>
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
                <img src="image/ny2.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 1: Arrival in Singapore</b><br>
                            On arrival at Singapore International Airport, you will be greeted by our
                            representative.<br>
                            Transfer to the hotel and check-in.<br>
                            Spend the rest of your day at leisure.<br>
                            Later in the evening, proceed for the Night Safari tour.<br>
                            Take a guided tram ride that takes you across 7 geographical zones of the world.<br>
                            After the safari, return to the hotel.<br>
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
                <img src="image/ny3.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 2: Singapore City Tour</b><br>
                            After breakfast, proceed for half day city tour of Singapore.<br>
                            Drive around the Civic District past the Padang, Cricket Club, historic Parliament House,
                            Supreme Court City Hall.<br>
                            Visit Merlion Park to enjoy the views of Marina Bay.<br>
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
                <img src="image/ny4.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 3: Universal Studio Tour</b><br>
                            After breakfast, proceed for a Universal Studio tour.<br>
                            Enjoy rides like Ultimate 3D battle, Shrek 4-D Adventure, Revenge of the Mummy, Madagascar:
                            A Crate Adventure, Battle star Galactica and many more.<br>
                            Visit S.E.A. Aquarium.<br>
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
                <img src="image/ny5.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 4: Sentosa Island Tour</b><br>
                            After breakfast, proceed for the Sentosa Island tour.<br>
                            Enjoy a one-way cable car ride, Underwater World, and Dolphin show.<br>
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
                <img src="image/ny6.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 6: Departure</b><br>
                            After breakfast, check out from the hotel and transfer to airport for your flight back home.

                        </p>
                        </span>

                    </div>
                </div>
        </div>
        </div>
    </section>
    <br><br>
    <p style="font-family: 'Tangerine', serif;font-size: 20px;color:black;"><b>Meals & other inclusions:</b><br></p>
    4 nights accommodation with daily breakfast.<br>
    Airport pick-up and drop by SIC basis.<br>
    Night Safari tour<br>
    Half-day city tour on SIC basis with English-speaking guide.<br>
    Full-day Universal Studio tour<br>
    Sentosa Island tour<br>
    Government service tax 3.625%
    <br><br><br><br>
    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa; color:black;"><b>For more
            information:</b><br></p>
    Singapore | Reservation Requests <br>
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