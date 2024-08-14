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
        background: url(image/h_m1.jpg) no-repeat;
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
    <div class="heading" style="background:url(image/h_m1.jpg) no-repeat">
        <h1 style="color:white;">Lovely Honeymoon Package Singapore</h1>
    </div><br><br>

    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa;"><b>Save up to 45% Off on
            our Accommodations + 60 minutes Balinese massage and other exciting Inclusions. Our best offer ever.</b></p>
    <br><br>
    <p style="font-family: 'Tangerine', serif;font-size: 20px;text-shadow: 4px 4px 4px #aaa; color:#0098a1;"><b>Lovely
            Singapore Honeymoon Package </b><br></p><br>
    3 Nights / 4 Days<br>
    Singapore(3\N)<br>
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
                <img src="image/h_m2.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 1: Arrival in Singapore</b><br>
                            Upon arrival at Singapore Airport, transfer to the hotel.<br>
                            Check in to the hotel and relax.<br>
                            In the evening, proceed for the Night Safari.<br>
                            Hop on board the tram for a 40-minute journey of wild animal encounters.<br>
                            Enjoy the ‘Creatures of the Night Show’, a 20-minute animal presentation that will introduce
                            you to nocturnal animals.<br>
                            Return to the hotel.<br>
                            Overnight stay at the hotel.<br>
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
                <img src="image/h_m3.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 2: Universal Studios Tour</b><br>
                            Start your journey to Hollywood movie theme park - Universal Studios™.<br>
                            Enjoy many rides and exciting attractions.<br>
                            Enjoy Jurassic Park Rapids Adventure™, Madagascar: A Crate Adventure™, and Revenge of the
                            Mummy™, Transformers The Ride, and many more.
                            Other highlights include Madagascar, New York, Hollywood, Sci-Fi City, and The Lost World,
                            etc.<br>
                            Overnight stay at the hotel.<br>
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
                <img src="image/h_m4.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 3: S.E.A Aquarium Tour</b><br>
                            Proceed to S.E.A. Aquarium. <br>
                            At the S.E.A. Aquarium, you can observe more than 100,000 marine creatures.<br>
                            Check out the fish from the Bay of Bengal, the Straits of Malacca & Andaman Sea, or the
                            Great Lakes of East Africa
                            Visit the humongous aquarium for the Open Ocean habitat.<br>
                            Stroll over to the Shark Seas containing over 200 of these predators including endangered
                            species.<br>
                            Explore and enjoy 15 thematic galleries.<br>
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
                <img src="image/h_m5.jpg" alt="" style="width:300px; height:200px;">
            </div>

            <body style="text-align:center">

                <div class="content">
                    <div class="popup" onclick="myFunction()">
                        <p><b>Day 4: Department</b><br>
                            After breakfast, check out from the hotel.<br>
                            Transfer to the airport to catch your flight back home.
                        </p>
                        </span>

                    </div>
                </div>
        </div>
        </div>
    </section>

    <br><br>
    <p style="font-family: 'Tangerine', serif;font-size: 20px;color:black;"><b>Meals & other inclusions:</b><br></p>
    Premium for policy by reputed insurer for the trip duration<br>
    Daily breakfast<br>
    Visa<br>
    Sightseeing by cab.<br>
    Accommodation on a twin-sharing basis.<br>
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