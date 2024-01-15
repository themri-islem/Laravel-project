<!DOCTYPE html>
<html dir="ltr" lang="en-US" style="position: relative; min-height: 100%;">
    <head>
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-BD3C8E34SP"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-BD3C8E34SP');
        </script>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="assets/css/bootstrap.css" >
        <link rel="stylesheet" href="assets/css/style.css" >
        <link rel="stylesheet" href="assets/css/dark.css" >
        <link rel="stylesheet" href="assets/css/font-icons.css" >
        <link rel="stylesheet" href="assets/css/animate.css" >
        <link rel="stylesheet" href="assets/css/magnific-popup.css" >
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/css/custom.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="img/favicon.ico">

        <title> - Joint Urban Remote Sensing Event</title>

    </head>

    <body class="stretched">

      @include('nav')

        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Videos & Photos
                </h3>
            </div>
        </div>

        <div class="container mb-5">

            <h3>Videos</h3>

            <div class="row justify-content-center">

                <div class="col-lg-4 mb-4">
                </div>
    
            </div>

            <h3>Photos</h3>

            <div id="photos" class="d-flex align-items-stretch row col-mb-50">

            </div>

            <div id="loadMoreButton" class="text-center">
                <a class="button button-3d button-large button-rounded button-purple mt-5" onclick="handleLoadMore()">Load More</a>
            </div>

        </div>

        <footer class="text-center text-lg-start bg-footer mt-5">
            <div class="container p-4">
                <section class="footer-text">
                    <div class="row">

                        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3 text-center">
                            <div class="mb-2">
                                <h4 class="white">Stay connected!</h4>
                            </div>
                            <a href="https://www.facebook.com/rslabgr/" target="_blank" class="social-icon inline-block si-dark si-small mb-0 pb-0 si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="https://twitter.com/JURSE2023/" target="_blank" class="social-icon inline-block si-dark si-small si-borderless mb-0 si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="https://www.youtube.com/playlist?list=PLyHJqeu2tpN5iLzj1HaVP9oCirvFoBN7r" target="_blank" class="social-icon inline-block si-dark si-small si-borderless mb-0 si-youtube">
                                <i class="icon-youtube"></i>
                                <i class="icon-youtube"></i>
                            </a>
                        </div>

                        <hr class="w-100 clearfix d-md-none mt-3" />

                        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3 text-center">
                            <div class="mb-1">
                                <h4 class="white mb-0">Contact person</h4>
                            </div>
                            Nektarios Chrysoulakis<br>
                            zedd2@iacm.forth.gr<br>
                            +30 2810-391-762 <br>
                            +30 6932-929-775
                        </div>

                        <hr class="w-100 clearfix d-md-none mt-3" />

                        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3 text-center">
                            <div class="mb-1">
                                <h4 class="white mb-0">Venue</h4>
                            </div>
                            Cultural Conference Center of Heraklion<br>
                            N. Plastira Avenue 49, Heraklion, 71201 Greece
                        </div>
                    </div>

                </section>
            </div>
            <div class="text-center p-3 footer-text" style="background-color: rgba(0, 0, 0, 0.2)">
                © Copyright <span id="year"></span>: Remote Sensing Laboratory, Foundation for Research and Technology - Hellas (FORTH)
            </div>

        </footer>

        <script>
            document.getElementById("year").innerHTML = new Date().getFullYear();
        </script>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/plugins.min.js"></script>
        <script src="assets/js/functions.js"></script>
        <script src="assets/js/code.js"></script>
        <script src="assets/js/load-more.js"></script>

    </body>
</html>
