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
    <h1 class="heading-1">Long queues loom for drivers in 'frantic' Friday getaway <br>before Christmas weekend<br></h1>
    <div class="date">
        <i class="far fa-clock"></i>
        <span>Friday 23 December 2022 01:27,UK<br></span>
    </div><br>
    <section class="container" id="posts">

        <div class="posts-container">

            <div class="post">
                <img src="image/n3.jpg" alt="" class="image">

                <h3 class="title">Motorists are being warned to prepare for lengthy delays to their journeys as millions
                    make trips home.</h3>
                <p class="text">A further 16.6 million are expected to be made on Christmas Eve.

                    Congestion will be further compounded thanks to a strike by thousands of members of the Rail,
                    Maritime and Transport union (RMT) at Network Rail, causing train services to finish at around 3pm
                    on Saturday.</p>
                <p class="text">Those traveling by air have also been warned to prepare for delays as Border Force
                    workers are also set to strike on Friday.
                    According to the RAC the roads will be busiest between 10am and 7pm on Friday, the last working day
                    before Christmas.<br><br>
                    Roads likely to be most affected congestion include the M25, the M60 near Manchester, the M6 in
                    northwest England and the M40 in Oxfordshire.<br><br>
                    Transport analytics company Inrix expects journey times to be around 14% longer compared to the same
                    period last year.
                    National Highways said almost 98% of England's motorways and major A-roads will be fully open until
                    the end of 2 January due to it completing and lifting roadworks.<br><br>
                    AA head of roads policy Jack Cousens said: "We are advising those heading out in their cars to be
                    prepared for some congestion, especially on popular routes heading out of London.<br><br>

                    "The rail strikes have convinced more people to travel by car this year, and while hundreds of miles
                    of roadworks have been removed to ease the pain, it might not be enough to keep the queues away."<br><br>
                    RAC spokesman Rod Dennis said there will be "two frantic days of travelling just before Christmas".<br><br>
                    Inrix transportation analyst Bob Pishue said: "With pre-pandemic levels of travellers hitting the
                    road this holiday, drivers must be prepared for delays - especially in and around major cities."
                </p>

            </div>
        </div>
    </section>
    <!--footer--->
    <?php include 'footer.php'; ?>
</body>
<script src="js/news_script.js"></script>

</html>