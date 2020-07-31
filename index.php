<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/727a6d1d11.js" crossorigin="anonymous"></script>
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <!-- animate on scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="./assets/css/loader.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <title>Foodify</title>
</head>
<body>
    <!-- loader -->
    <div id="loader-container">
        <h3 class="loader-text">a CHEF on your mobile . . .</h3>
        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
   
   <!-- header starts -->
    <header>
        <nav class="navbar h-100">
            <a class="navbar-brand" href="#">FOODIFY</a>
            <nav class="nav">
                <a class="nav-link px-2 px-sm-3" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="nav-link px-2 px-sm-3" href="#"><i class="fab fa-instagram"></i></a>
                <a class="nav-link px-2 px-sm-3" href="#"><i class="fab fa-twitter"></i></a>
            </nav>
    </header>
    <!-- header ends -->

    <!-- hero section -->
    <section id="hero" class="">
        <div class="row h-100 boxed">
            <div id="hero-text" class="text-field pb-5 pb-md-0 px-0 pr-4 col-12 col-md-7 d-flex flex-column justify-content-center align-items-start">
                <div>
                    <h2 class="hero-header pb-2">Name any meal in seconds </h2>
                    <p>Identify meals around you, get awesome recipes and find out possible dishes with available food items.</p>
                    <p>All in one App, a CHEF right on your mobile</p>
                </div>
                <div class="countdown w-100 w-sm-75 pt-3">
                    <p>Coming soon!</p>
                    <div class="timer row px-0 d-flex text-center">
                        <div id="days" class="col-3 time py-3 align-middle">45<br> <span>days</span></div>
                        <div id="hours" class="col-3 time py-3 align-middle">12<br> <span>hours</span></div>
                        <div id="minutes" class="col-3 time py-3 align-middle">59<br> <span>minutes</span></div>
                        <div id="seconds" class="col-3 time py-3 align-middle">36<br> <span>seconds</span></div>
                    </div>
                </div>
                <div class="notification w-100 pt-4">
                    <p>Be the first to know when we launch!</p>
                    <form action="form.php" method="POST" id="form" class="row w-100 m-0 mr-sm-2">
                        <div class="col-7 col-sm-6 pl-0 pl-md-2 pr-0">
                            <input type="email" name="email" id="email" placeholder="Your Email address" required>
                        </div>
                        <div class="col-4 mr-0 pr-0">
                            <button type="submit" name="submit" class="btn">Subscribe</button>
                        </div>
                    </form>
                    <?php
                        if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<div class='text-center alert alert-danger p-1 col-10 mt-2' role='alert'>$error</div>";
                        }
                    ?>
                </div>
            </div>
            <div class="col-12 col-md-5 pt-5 pt-md-0 px-0 img-wrapper d-flex justify-content-center justify-content-md-end align-items-center">
                <img id="hero-img" class="phone-1 img-fluid animate__animated animate__slideInDown animate__slower" src="./assets/imgs/svgs/Group 150.svg" alt="" >
            </div>
        </div>
    </section>

    <!-- screen sections -->
    <section id="sec-1">
        <div class="img-wrapper d-flex" style="background-image: url(./assets/imgs/img-5.png);">
            <div class="boxed row">
                <div class="col-6 px-0 px-md-2 d-flex justify-content-start justify-content-md-center">
                    <img class="phone" src="./assets/imgs/svgs/Group 151.svg" alt="" srcset="" data-aos="fade-left" data-aos-easing="ease-in-out-sine" data-aos-once="true">
                </div>
                <div class="col-6 px-0 px-md-2 d-flex justify-content-center align-items-center">
                    <div class="text-wrapper">
                        <h3 class="pb-3">Get access to as many matching recipes</h3>
                        <p>Ever wondered what meals you could make with the foodstuff you have handy? Foodify uses AI recognition of ingredients to give you the best possible recipes for making your next great meal.</p>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <section id="sec-2">
        <div class="img-wrapper d-flex" style="background-image: url(./assets/imgs/img-2.png);">
            <div class="boxed row">
                <div class="col-6 order-2 px-0 px-md-2 d-flex justify-content-end justify-content-md-center">
                    <img class="phone" src="./assets/imgs/svgs/Group 144.svg" alt="" srcset="" data-aos="fade-right" data-aos-easing="ease-in-out-sine" data-aos-once="true">
                </div>
                <div class="col-6 px-0 px-md-2 order-1 d-flex justify-content-center align-items-center">
                    <div class="text-wrapper left">
                        <h3 class="pb-3">Leave your taste buds wanting more </h3>
                        <p>No matter the meal, we always ensure there is room to accomodate what your taste buds crave. Spicy? Sweet? Hot? Delicious? 
                            Foodify recipes gives you freedom to choose.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec-3">
        <div class="img-wrapper d-flex" style="background-image: url(./assets/imgs/img-3.png);">
            <div class="boxed row">
                <div class="col-6 px-0 px-md-2 d-flex justify-content-start justify-content-md-center">
                    <img class="phone" src="./assets/imgs/svgs/Group 149.svg" alt="" srcset="" data-aos="fade-left" data-aos-easing="ease-in-out-sine" data-aos-once="true">
                </div>
                <div class="col-6 px-0 px-md-2 d-flex justify-content-center align-items-center">
                    <div class="text-wrapper">
                        <h3 class="pb-3">Recreate those tasty meals anytime</h3>
                        <p>Foodify lets you save recipes you have grabbed so you can always recreate them whenever you want. Are you at a party and found out a new meal, we let you recreate those delicacies for you and your family.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec-4">
        <div class="img-wrapper d-flex" style="background-image: url(./assets/imgs/img-4.png);">
            <div class="boxed row">
                <div class="col-6 order-2 px-0 px-md-2 d-flex justify-content-end justify-content-md-center">
                    <img class="phone" src="./assets/imgs/svgs/Group 148.svg" alt="" srcset="" data-aos="fade-right" data-aos-easing="ease-in-out-sine" data-aos-once="true">
                </div>
                <div class="col-6 px-0 px-md-2 order-1 d-flex justify-content-center align-items-center">
                    <div class="text-wrapper left">
                        <h3 class="pb-3">Stay and up to date with foodie trends</h3>
                        <p>In addition to the meals you grabbed, we also let you in on the hottestt and in-demand meals on our platform. Check our top picks for every week and get inspired for your next trip to the kitchen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer id="footer">
        <div class="boxed">
            <h2 class="p-5 text-center">Get the most out of every meal!</h2>
            <div class="row text-center footer-ill mx-auto pb-5">
                <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                    <img src="./assets/imgs/svgs/footer-1.svg" alt="">
                    <h3 class="py-3">Put names to a meals in no time</h3>
                    <p>Using our super fast food recognition software, we help you identify meals in seconds and give you a free recipe</p>
                </div>
                <div class="col-12 col-md-6 pt-5 pt-md-0 d-flex flex-column align-items-center">
                    <img src="./assets/imgs/svgs/footer-2.svg" alt="">
                    <h3 class="py-3">Whip up even greater meals</h3>
                    <p>Unsure what meal to make of the foodstuff available for you? The meal maker feature puts brilliant ideas in mind.</p>
                </div>
            </div>
        </div>
            <div class="coming-soon py-5">
                <p class="mx-auto mx-sm-0 w-75 w-sm-100 m-0 text-center">Coming soon for Android and iOS devices</p>
            </div>
            <div class="footer-nav pt-3 pb-0">
                <nav class="nav justify-content-center pb-2">
                    <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                </nav>
                <p class="text-center">Copyright 2020 Foodify - All rights reserved.</p>
            </div>
    </footer>

    <!-- boostrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- animate on scroll js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- custom js -->
    <script src="./assets/js/app.js"></script>
</body>
</html>

<?php
    if(isset($_SESSION['error'])){
        unset($_SESSION['error']);
    }
    if(isset($_SESSION['success'])){
        unset($_SESSION['success']);
    }
?>