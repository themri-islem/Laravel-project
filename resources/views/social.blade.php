
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
                    Social Events
                </h3>
            </div>
        </div>

        <div class="py-1">
            <div class="container">

                <p>
                    The JURSE 2025 program will host social events, which are addressed to all registered participants and accompanying persons.
                </p>

                <h4 class="mb-3 mt-2">Ice Breaker (May 16)</h4>

                <p>
                    This welcome event will take place at the <a class="text-decoration-underline" href="venue.html" target="_blank">conference venue</a> and will include snack buffet and beverages. 
                    This event is ideal for networking among participants in a hospitable setting, while participants 
                    will also have the chance to register in advance for the conference.
                </p>

                <h4 class="mb-3 mt-2">Cultural Tour (May 17)</h4>

                <p>
                    A guided cultural tour at the <a class="text-decoration-underline" href="https://www.knossospalace.gr/" target="_blank">Knossos Palace</a> has been planned including 
                    transport with bus from/to the conference venue. Visitors will learn about the 
                    thriving Minoan civilization and will wander across the ruins of this unique 
                    archaeological site. The tour will end with a buffet and beverages on-site.
                </p>

                <h4 class="mb-3 mt-2">Gala Dinner (May 18)</h4>

                <p>
                    A visit to the <a class="text-decoration-underline" href="https://www.lyrarakis.com/en/home" target="_blank">Lyrarakis winery</a> at the Heraklion outskirts with bus from/to the 
                    conference venue has been organized. Visitors will have the chance to taste different local wine 
                    varieties and delectable cuisine at a site surrounded by the natural beauty of the island. 
                    During the dinner, the result of the student contest will be announced too.
                </p>

                <div class="row mb-5 mt-5">
                    <div class="col-lg-6">
                        <img src="images/knossos.png" alt="">
                    </div>
                    <div class="col-lg-6">
                        <img src="images/winery.png" alt="">
                    </div>
                </div>

            </div>
        </div>

        <footer class="text-center text-lg-start bg-footer">
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
        <script src="assets/js/venue.js"></script>

    </body>
</html>
