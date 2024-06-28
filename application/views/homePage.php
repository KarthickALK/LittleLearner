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

    <style>
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
                        <a class="nav-link text-dark px-4" href="#">About Us</a>
                    </li>
                    <li class="nav-item border-left border-right">
                        <a class="nav-link text-dark px-4" href="#">Academics</a>
                    </li>
                    <li class="nav-item border-left border-right">
                        <a class="nav-link text-dark px-4"
                            href="<?php echo base_url() . "Student/admissionForm" ?>">Admissions</a>
                    </li>
                    <li class="nav-item border-left border-right">
                        <a class="nav-link text-dark px-4" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="d-lg-flex justify-content-between mx-2 mx-lg-5">
        <div class="text-center">
            <img src="assets/Banner_Image.png" class="banner_imag img-fluid text-center" alt="Banner">
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

</body>

</html>