<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Bliss</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <!-- custom css file link  -->
</head>
<style>
    .container {
        grid-template-columns: 2.5fr 1fr;
        gap: 1.5rem;
        background: #eee;
    }

    .container .posts-container .post {
        width: 100%;
        padding: 2rem;
        background: #fff;
        border: var(--border);
        border-radius: .5rem;
        margin-bottom: 1.5rem;
    }

    .container .posts-container .post .image {
        height: 40rem;
        width: 100%;
        border-radius: .5rem;
        object-fit: cover;
    }

    .container .posts-container .post .date {
        padding-top: 2rem;
        font-size: 1.5rem;
        color: var(--orange);
    }

    .container .posts-container .post .title {
        padding-top: 1.5rem;
        font-size: 2.5rem;
        color: var(--black);
    }

    .container .posts-container .post .text {
        color: var(--light-color);
        font-size: 1.6rem;
        line-height: 1.7;
        padding: 1rem 0;
    }

    .container .posts-container .links {
        border-top: var(--border);
        margin-top: .5rem;
        padding-top: 1.5rem;
        display: flex;
        align-items: center;
    }

    .container .posts-container .links .user {
        margin-right: auto;
    }

    .container .posts-container .links .icon {
        padding-right: 1rem;
    }

    .container .posts-container .links a {
        font-size: 1.5rem;
        color: var(--light-color);
    }

    .container .posts-container .links a i {
        padding-right: .2rem;
        color: var(--black);
    }

    .container .posts-container .links a:hover {
        color: var(--orange);
    }

    .container .posts-container .links a:hover i {
        color: var(--orange);
    }

    .container .sidebar .box {
        border: var(--border);
        border-radius: .5rem;
        overflow: hidden;
        background: #fff;
        margin-bottom: 1.5rem;
    }

    .container .sidebar .box .title {
        padding: 1.5rem;
        font-size: 2rem;
        color: #fff;
        background: var(--black);
        text-transform: capitalize;
    }

    .container .sidebar .box .about {
        text-align: center;
        padding: 1rem 1.5rem;
    }

    .container .sidebar .box .about img {
        height: 15rem;
        width: 15rem;
        border-radius: 50%;
        object-fit: cover;
        margin: 1rem 0;
    }

    .container .sidebar .box .about h3 {
        color: var(--orange);
        font-size: 2rem;
    }

    .container .sidebar .box .about p {
        color: var(--light-color);
        font-size: 1.5rem;
        line-height: 1.5;
        padding: 1rem;
    }

    .container .sidebar .box .about .follow {
        padding: 1rem 0;
    }

    .container .sidebar .box .about .follow a {
        height: 4rem;
        line-height: 4rem;
        width: 4rem;
        border-radius: 50%;
        background: var(--black);
        color: #fff;
        font-size: 1.7rem;
        margin: 0 .1rem;
    }

    .container .sidebar .box .about .follow a:hover {
        background: var(--orange);
    }

    .container .sidebar .box .category {
        padding: 1rem 1.5rem;
    }

    .container .sidebar .box .category a {
        padding: .4rem 0;
        font-size: 1.5rem;
        color: var(--black);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .container .sidebar .box .category a span {
        background: var(--light-color);
        color: #fff;
        border-radius: .5rem;
        padding: .5rem;
    }

    .container .sidebar .box .category a:hover {
        color: var(--orange);
    }

    .container .sidebar .box .category a:hover span {
        background-color: var(--orange);
    }

    .container .sidebar .box .p-post {
        padding: 1rem 2rem;
    }

    .container .sidebar .box .p-post a {
        padding: 1rem 0;
        display: block;
    }

    .container .sidebar .box .p-post a h3 {
        color: var(--black);
        font-size: 2rem;
        padding-bottom: 1rem;
    }

    .container .sidebar .box .p-post a span {
        color: var(--light-color);
        font-size: 1.5rem;
    }

    .container .sidebar .box .p-post a span i {
        padding-right: .2rem;
    }

    .container .sidebar .box .p-post a:hover h3 {
        color: var(--orange);
    }

    .container .sidebar .box .tags {
        padding: 1rem;
    }

    .container .sidebar .box .tags a {
        display: inline-block;
        padding: 1rem 1.5rem;
        font-size: 1.5rem;
        color: var(--black);
        border-radius: .5rem;
        border: var(--border);
        margin: .5rem;
    }

    .container .sidebar .box .tags a:hover {
        background: var(--black);
        color: #fff;
    }

    body {
        font-family: sans-serif;
        min-height: 100vh;
        max-width: 100vw;
        line-height: 1.4;
        padding: 20px 40px;
    }

    .heading-1 {
        text-align: center;
        font-size: 30px;
        text-transform: uppercase;
    }
</style>

<body>

    <!-- header section starts  -->

    <?php include 'header.php'; ?>

    <!-- header section ends -->
    <br><br>
    <!-- posts section starts  -->
    <h1 class="heading-1">Australia and Canada announce COVID travel rules<br> for arrivals from China<br></h1>
    <div class="date">
        <i class="far fa-clock"></i>
        <span>Sunday 1 January 2023 05:43,UK</span>
    </div><br>
    <section class="container" id="posts">

        <div class="posts-container">

            <div class="post">
                <img src="image/n1.jpg" alt="" class="image">

                <h3 class="title">The two countries join a number of others - including the UK, US, India, Spain, South
                    Korea and France - that have brought in restrictions targeting arrivals from China.</h3>
                <p class="text">Australia and Canada are the latest countries to bring in travel restrictions on
                    arrivals from China.
                    Travellers from China to Australia will need to present a negative COVID-19 test result from 5
                    January, the country's health minister Mark Butler said.</p>
                <p class="text">The test will have to be taken within 48 hours of the departing flight and the rules
                    will also apply to visitors from Hong Kong and Macau.<br>

                    Mr Butler said: "I want to stress that the government welcomes the resumption of travel between
                    Australia and China... I also want to stress that this is a temporary measure, reflecting the lack
                    of comprehensive information right now about the situation in China."<br>
     
                    Earlier in the day, Canada announced it would bring in a similar rule - all travellers from China,
                    Hong Kong or Macau over the age of two will need to show a negative result from a test taken within
                    two days of departure.<br><br>

                    The Canadian government said its measure would be in place for 30 days and would be re-assessed as
                    more data became available.
                    The two countries join a number of others - including the UK, US, India, Spain, South Korea and
                    France - that have brought in restrictions targeting arrivals from China.<br>
                    The concern stems from China's reopening following three years of a strict COVID-zero policy that
                    kept borders closed and locals locked down.
                    But the government, under pressure from growing protests against the measures, reversed its policy
                    with a move towards learning to live with the virus.<br>
                    Other countries, however, have said that China's COVID-19 data is not transparent, and a lack of
                    information about variants is putting the world at risk of a massive wave of reinfections.<br>
                    China has denied this, adding that it expects new variants to be more infectious but less severe.
                    It will continue requiring a negative PCR test before departure for arrivals into its own country,
                    but has said it will stop requiring infected arrivals to go into quarantine from 8 January.
                </p>

            </div>
        </div>
    </section>
    <!--footer--->
    <?php include 'footer.php'; ?>
</body>
<script src="js/news_script.js"></script>

</html>