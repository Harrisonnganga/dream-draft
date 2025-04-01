<?php include "partials/head.php"; ?>
<style>
    .h_gallery_item .g_img_item img {
        height: 300px; 
        object-fit: cover; 
    }
</style>


<body>

    <?php include "partials/nav.php"; ?>

    <section class="banner_area">
        <div class="box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Portfolio</h2>
                        <div class="page_link">
                            <a href="/">Home</a>
                            <a href="/portfolio">Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="home_gallery_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>My Projects</h2>
                <p></p>
            </div>
                   <div class="isotope_fillter">
                    <ul class="gallery_filter list">
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        <li data-filter=".js"><a href="#">JavaScript</a></li>
                        <li data-filter=".php"><a href="#">PHP</a></li>
                        <li data-filter=".creative"><a href="#">Drupal</a></li>
                        <li data-filter=".py"><a href="#">Python</a></li>
                    </ul>
                </div> 
        </div>
        <div class="container">
            <div class="gallery_f_inner row imageGallery1">
                <div class="col-lg-4 col-md-6 col-sm-6  php ">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="img/gallery/quiz.jpg" alt="">
                            <a class="light alt="></a>
                        </div>
                        <div class="g_item_text">
                            <h4><a href="#">Quiz App</a></h4>
                            <p>A user-friendly platform allowing members to log in, take quizzes, and track their progress in real-time</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 creative php ">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="img/gallery/Tours.jpg" alt="Tours and travel">
                            <a class="light"><img src="img/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4><a href="#">Tours and travel</a></h4>
                            <p>A dynamic platform in development that simplifies travel planning and booking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 js">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="img/gallery/weather.jpg" alt="">
                            <a class="light"><img src="img/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4><a href="https://weather-forcast1.netlify.app/">Weather App</a></h4>
                            <p>A real-time weather forecasting platform developed using JavaScript.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6  php creative">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                        <img class="img-fluid" src="img/gallery/recommend.jpg" alt="">
                        <a class="light"><img src="img/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4><a href="#">Pet Store</a></h4>
                            <p> compassionate platform built on Drupal, allowing users to explore pets available for adoption.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 php js">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                        <img class="img-fluid" src="img/gallery/task-manager.jpg" alt="">
                        <a class="light"><img src="img/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4><a href="#">Task Manager</a></h4>
                            <p>A robust task management tool built to enhance productivity and organization.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 php">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                        <img class="img-fluid" src="img/gallery/quiz.jpg" alt="">
                        <a class="light"><img src="img/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4><a href="#">Quiz App</a></h4>
                            <p>A user-friendly platform allowing members to log in, take quizzes, and track their progress in real-time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="padding: 50px;" style="text-align: center;">
            <h2 style="text-align: center;" class="more_btn">
                <center>See more on my GitHub</center>
            </h2>
            <center><a href="https://github.com/Harrisonnganga" class="main_btn">My GitHub Handle</a></center>
        </div>
        </div>
        <div class="more_btn">
            <a href="/contact" class="main_btn">Let's Talking</a>
        </div>
        </div>
    </section>
  
    <?php include "partials/footer.php"; ?>




   
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>