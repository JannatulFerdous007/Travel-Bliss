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
    <h1 class="heading-1">Airport security rules on liquids and laptops to be relaxed<br></h1>
    <div class="date">
        <i class="far fa-clock"></i>
        <span>Thursday 15 December 2022 03:31, UK<br></span>
    </div><br>
    <section class="container" id="posts">

        <div class="posts-container">

            <div class="post">
                <img src="image/n2.jpg" alt="" class="image">

                <h3 class="title">The government has set a deadline of June 2024 for major UK airports to install new
                    security technology, which will make obsolete the rule to bring no more than 100ml of liquid in a
                    container and remove large electronics from hand luggage.</h3>
                <p class="text">The rules limiting the volume of liquids allowed on planes and requiring electronics to
                    be taken out of hand luggage in security are to change.<br>
                    The government has set a deadline of June 2024 for major UK airports to install new security
                    technology, which will make obsolete the rule to bring no more than 100ml of liquid in a container
                    and remove large electronics, such as laptops and tablets, from hand luggage before proceeding
                    through scanners.</p>
                <p class="text">New regulations being put in place by the Department for Transport removes parts of EU
                    law governing how new technology and processes can be implemented, allowing new technology to be
                    installed, a spokesperson said.<br><br>
                    The department said major airports, such as Gatwick, Heathrow, Manchester and Birmingham will be
                    subject to the deadline.<br>
                    Current rules will remain in place until then.<br><br>
                    Since a terrorist threat in 2006, liquids have been limited in volume to 100ml and must be shown in
                    a clear plastic bag. The rule is aimed at stopping liquid explosives being carried on to planes.<br>
                    But this will no longer be a requirement and passengers may bring up to 2 litres of liquid through
                    security.<br><br>
                    Most major airports are to roll out the technology over the course of the next year, Transport
                    Secretary Mark Harper said.<br>
                    "By 2024, major airports across the UK will have the latest security tech installed, reducing
                    queuing times, improving the passenger experience, and most importantly detecting potential
                    threats," he added.<br><br>
                    The department warned customers to check the return rules for carrying liquids at any airport which
                    they may travel or transfer through.<br>
                    "Many destinations may not have implemented this new technology," it said.<br><br>
                    Trials of new 3D security scanners had been conducted at some airports.<br>
                    Those trials demonstrated the effectiveness of the screening equipment, the department said.<br>
                    The new scanners uses CT X-ray technology to provide a 3D image of the contents of passengers' bags
                    and deploy "highly advanced threat detection algorithms", it added.<br><br>
                    They are already used in airports such as Schiphol in Amsterdam.<br><br>
                    Responding to the announcement, the Airport Operators Association (AOA) said: "This investment in
                    next generation security by the UK's airport operators will provide a great step forward for UK air
                    travel, matching the best in class around the world."<br>
                    "It will make the journey through the UK's airports easier and air travel itself more pleasant,"
                    said AOA's policy director, Christopher Snelling.<br><br>
                    The finances of airports have been hit by COVID-19 related lockdowns, with passenger numbers yet to
                    return to pre-pandemic levels at airports such as Heathrow.
                </p>

            </div>
        </div>
    </section>
    <!--footer--->
    <?php include 'footer.php'; ?>
</body>
<script src="js/news_script.js"></script>

</html>