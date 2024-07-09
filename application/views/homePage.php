<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Learners</title>

    <link href="assets/Title_logo.png" rel="icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Bootstrap Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

    <style>
        html {
            scroll-padding-top: 110px;
        }

        body {
            background-color: #FFF5F0;
        }

        .nav-link {
            font-weight: 500;
        }

        .banner_image {
            width: 750px;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav
        class="navbar navbar-expand-lg sticky-top navbar-light bg-light border border-3 border-dark rounded-3 mx-2 mb-2">
        <div class="container-fluid d-flex justify-content-between">
            <a href="#"><img src="assets/Logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item border-left border-right">
                        <a class="nav-link text-dark px-4" href="#">Home</a>
                    </li>
                    <li class="nav-item border-left border-right">
                        <a class="nav-link text-dark px-4" href="#Aboutus">About Us</a>
                    </li>
                    <li class="nav-item border-left border-right">
                        <a class="nav-link text-dark px-4" href="#our-benefits">Academics</a>
                    </li>
                    <li class="nav-item border-left border-right">
                        <a class="nav-link text-dark px-4"
                            href="<?php echo base_url() . "Student/admissionForm" ?>">Admissions</a>
                    </li>
                    <li class="nav-item border-left border-right">
                        <a class="nav-link text-dark px-4" href="#footer">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="d-lg-flex justify-content-between mx-2 mx-lg-5">
        <div class="text-center">
            <img src="<?php echo base_url()?>/assets/Banner_Image.png" class="banner_imag img-fluid text-center" alt="Banner">
        </div>
        <div class="text-center col-lg-6 p-2 p-md-5 my-auto">
            <p><u>Welcome to Little Learners Academy</u></p>
            <h2><b>Where Young Minds Blossom and <span style="color: #FF8D4D;">Dreams Take Flight.</span> </b></h2>
            <p>Our kinder garden school provides a nurturing and stimulating environment, fostering a love for learning
                that lasts
                a lifetime. Join us as we embark on an exciting educational journey together!</p>

            <div class="d-md-flex justify-content-evenly text-center border border-3 border-dark rounded-3 p-0 p-md-2"
                style="background-color: #FFEFE5;  box-shadow: 5px 10px #FFBE99;">
                <div>
                    <h3><b>+7000</b></h3>
                    <p>Students Passed Out</p>
                </div>
                <div>
                    <h3><b>+37</b></h3>
                    <p>Awards & Recognitions</p>
                </div>
                <div>
                    <h3><b>+15</b></h3>
                    <p>Experience Educators</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2 -->
    <div id="our-benefits" class="mt-5 my-5">
        <div class="text-center pt-3">
            <button class="border border-3 border-dark rounded bg-light p-2" style="font-weight: 500;">Children Deserve
                Bright Future</button>
            <h2 class="py-3 "><b>Our Benefits</b></h2>
            <p class="mx-3">With a dedicated team of experienced educators, state-of-the-art facilities, and a
                comprehensive curriculum,
                we aim to lay a strong foundation for your child's future.</p>
        </div>
        <div class="container d-md-flex justify-content-evenly text-center">
            <img src="<?php echo base_url()?>/assets/card01.png" alt="1" class="img-fluid my-1 mx-1">
            <img src="<?php echo base_url()?>/assets/card2.png" alt="2" class="img-fluid my-1 mx-1">
            <img src="<?php echo base_url()?>/assets/card3.png" alt="3" class="img-fluid my-1 mx-1">
        </div>
        <div class="container d-md-flex justify-content-evenly text-center">
            <img src="<?php echo base_url()?>/assets/card4.png" alt="4" class="img-fluid my-1 mx-1">
            <img src="<?php echo base_url()?>/assets/card5.png" alt="5" class="img-fluid my-1 mx-1">
            <img src="<?php echo base_url()?>/assets/card6.png" alt="6" class="img-fluid my-1 mx-1">
        </div>
    </div>

    <!-- Section 3 -->
    <div id="testimonials" class="mt-5 my-5">
        <div class="text-center pt-3">
            <button class="border border-3 border-dark rounded bg-light p-2" style="font-weight: 500;">Their Happy Words
                🤗</button>
            <h2 class="py-3 "><b>Our Testimonials</b></h2>
            <p class="mx-3">Our testimonials are heartfelt reflections of the nurturing environment we provide, where
                children flourish
                both academically and emotionally.</p>
        </div>
        <div class="container d-md-flex justify-content-evenly text-center ">
            <img src="<?php echo base_url()?>/assets/testimonial1.png" alt="1" class="img-fluid my-1 mx-3">
            <img src="<?php echo base_url()?>/assets/testimonial2.png" alt="2" class="img-fluid my-1 mx-3">
            <img src="<?php echo base_url()?>/assets/testimonial3.png" alt="3" class="img-fluid my-1 mx-3">
        </div>
    </div>

    <!-- Section 4 -->
    <div id="Aboutus" class="mt-5 my-5">
        <div class="text-center pt-3">
            <button class="border border-3 border-dark rounded bg-light p-2" style="font-weight: 500;">Mission &
                Visions</button>
            <h2 class="py-3 "><b>Our Mission & Visions</b></h2>
            <p class="mx-3">We are here to provide a nurturing and inclusive environment where young minds can thrive,
                fostering a love for learning and personal growth.</p>
        </div>
        <div class="container d-md-flex justify-content-evenly text-center">
            <img src="<?php echo base_url()?>/assets/Mission.png" alt="1" class="img-fluid my-1">
            <img src="<?php echo base_url()?>/assets/Vision.png" alt="2" class="img-fluid my-1">
        </div>
    </div>

    <!-- Footer -->
    <footer class="border border-3 border-dark rounded bg-light p-2 p-md-5 m-2 m-md-5" id="footer">
        <div class="d-md-flex justify-content-evenly py-4 px-5">
            <div class="col-md-6">
                <img src="<?php echo base_url()?>/assets/Footer Logo.png" alt="logo">
                <p class="pt-3">We believe in the power of play to foster creativity, problem-solving skills, and
                    imagination.</p>
            </div>
            <div class="col-md-6 ms-md-5 py-3">
                <p><span class="text-dark border border-3 border-dark rounded  py-1 px-2 mx-2"
                        style="background-color: #FFEFE5;"><i class="bi bi-envelope-fill"></i></span>
                    hello@littlelearners.com</p>
                <p><span class="text-dark border border-3 border-dark rounded  py-1 px-2 mx-2"
                        style="background-color: #FFEFE5;"><i class="bi bi-telephone-fill"></i></span> +91 91813 232309
                </p>
                <p><span class="text-dark border border-3 border-dark rounded  py-1 px-2 mx-2"
                        style="background-color: #FFEFE5;"><i class="bi bi-geo-alt-fill"></i></span> Somewhere in the
                    World</p>
            </div>
        </div>
        <hr>
        <p class="text-center py-2 py-md-3">Terms of Service <span class="px-2"> | </span> Privacy Policy <span
                class="px-2"> | </span> Cookie Policy</p>
        <hr>

        <p class="text-center">Copyright © [2023] Little Learners Academy. All rights reserved.</p>
    </footer>

</body>
</html>