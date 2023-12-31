<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
};

include 'components/add_cart.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <title>About Us - CUSHION HOUSE</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            background-color: #333;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .about-image {
            max-width: 100%;
            height: auto;
        }

        .about-text {
            line-height: 1.6;
        }

        .container2 {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 2rem;
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            background-color: #333;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .about-image2 {
            max-width: 80%;
            height: 15rem;
        }

        .about-text2 {
            line-height: 1.6;
        }

        .btnnav a {
            color: #000;
        }

        .btnnav button {
            background-color: var(--blackRussian);
        }
    </style>
</head>

<body>


    <?php include 'components/user_header.php'; ?>
    <div class="container">
        <div class="about-text">
            <p>Welcome to our home furnishing store, where comfort meets style. Discover a curated collection that
                transforms houses into dream homes. From sleek sofas to elegant dining sets, our pieces are designed
                to reflect your unique taste. With a commitment to quality and innovation, we're here to turn your
                living spaces into cozy havens. Experience the art of furnishing with us today.</p>
        </div>
        <img class="about-image" src="./img/about1.jpg" alt="Store Image">
    </div>
    <div class="container2">
        <img class="about-image2" src="./img/about2.jpg" alt="Store Image">
        <div class="about-text2">
            <p>Step into cushion House, your ultimate home furnishing destination. Uncover a handpicked array that
                turns ordinary spaces into extraordinary abodes. Our range, from plush sofas to exquisite dining
                ensembles, mirrors your distinct preferences. Embracing excellence and ingenuity, we're dedicated to
                crafting inviting sanctuaries. Embark on a journey of furnishing finesse with cushion House today.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="about-text">
            <p> <span>cushion House </span>It is the ultimate guide to decorating and design and the indispensable go-to source for everyone
                who wants to create a more beautiful life.
                Whether your taste is classic or contemporary—or an eclectic mix of both—you'll find ideas and
                inspiration, the latest information and products, and tools to help you decorate, renovate, and
                entertain stylishly.</p>
        </div>
        <img class="about-image" src="./img/about3.jpg" alt="Store Image">
    </div>
    <!-- footer -->
    <!-- <footer class="footer container">
            <div class="footer-item">
                <a href="index.html">
                    <h2 class="brand-name">
                        cushion <span>House</span>
                    </h2>
                    <p>social media accounts</p>
                    <ul class="footer-icons">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                    </ul>
            </div>

            <div class="footer-item">
                <h3>links</h3>
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="#">download</a></li>
                    <li><a href="#">pricing</a></li>
                    <li><a href="about.html">about us</a></li>
                </ul>
            </div>

            <div class="footer-item">
                <h3>products</h3>
                <ul>
                    <li><a href="#">chair</a></li>
                    <li><a href="#">sofa</a></li>
                    <li><a href="#">pillow</a></li>
                    <li><a href="#">cushion</a></li>
                </ul>
            </div>

            <div class="footer-item">
                <h3>support</h3>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">how it works</a></li>
                    <li><a href="#">features</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </div>
        </footer>
        end of footer -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>