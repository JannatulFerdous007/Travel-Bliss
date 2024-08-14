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
    <h1 class="heading-1">Half-term flights 42% more expensive than before pandemic,<br>analysis shows<br></h1>
    <div class="date">
        <i class="far fa-clock"></i>
        <span>Wednesday 28 September 2022 06:24,UK<br></span>
    </div><br>
    <section class="container" id="posts">

        <div class="posts-container">

            <div class="post">
                <img src="image/n5.jpg" alt="" class="image">

                <h3 class="title">Consumer group Which? said the typical price of a one-way ticket for the week-long
                    school holiday in October was £212, compared with £150 for the same period in 2019.</h3>
                <p class="text">Half-term flights are 42% more expensive on average than before the coronavirus
                    pandemic, according to new analysis.<br>
                    Consumer group Which? said the typical price of a one-way ticket for the week-long school holiday in
                    October booked six months, three months and six weeks in advance was £212, compared with £150 for
                    the same period in 2019.</p>
                <p class="text">Rising fuel costs, pent-up demand for travel and airport passenger caps are thought to
                    be behind the increase.<br><br>

                    Which? analysed prices from data company Skytra for flights from six of England's busiest airports -
                    Heathrow, Gatwick, Manchester, Stansted, Luton and Birmingham - to six popular destinations:
                    Alicante, Antalya, Dubai, Dublin, Malaga and Tenerife.<br><br>

                    The largest increase was seen on flights from Heathrow to Tenerife.<br><br>


                    Passengers booking six weeks before departure paid an average of £262 more each way than in 2019 -
                    adding £2,096 to the cost of a holiday for a family of four, Which? said.<br><br>

                    Flights from Gatwick to Dublin booked at the same time increased from £42 in 2019 to £160 this year.
                    Guy Hobbs, editor of Which? Travel, said: "Travellers have had a torrid time this year and our
                    analysis shows they're paying through the nose for their trouble.<br><br>

                    "With fares so high, it's even more important that airports and airlines are held to account for the
                    unacceptable disruption travellers have faced.<br><br>

                    "The government should give the Civil Aviation Authority stronger powers so it can hit operators
                    with heavy fines when they flout the rules."
                </p>

            </div>
        </div>
    </section>
    <!--footer--->
    <?php include 'footer.php'; ?>
</body>
<script src="js/news_script.js"></script>

</html>