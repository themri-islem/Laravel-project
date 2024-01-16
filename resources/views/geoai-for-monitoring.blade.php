
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

        <title> Joint Urban Remote Sensing Event</title>

    </head>


    <body class="stretched">

        @include('nav')
        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Special Sessions
                </h3>
            </div>
        </div>

        <div class="container mb-5">
            
            <div class="text-center mt-2">
                <h3 class="titular-title gradient-horizon gradient-text mb-4">GeoAI for Monitoring Rapid Urbanization Processes</h3>
                <small><i><b>Claudio Persello</b>, University of Twente, The Netherlands</i></small><br>
                <small><i><b>Dalton Lunga</b>, Oak Ridge National Laboratory, USA</i></small><br>
                <small><i><b>Monika Kuffer</b>, University of Twente, The Netherlands</i></small>

                <div class="my-5 w-75 mx-auto">
                    <p align="start" class="mb-3 h5">
                        <b>Abstract</b>
                    </p>
                    <p align="justify">
                        Rapid urbanization is a global phenomenon that is reshaping the urban environment all over the world. 
                        This process is associated with significant socio-economic and demographic transformations, 
                        such as gentrification, but also the proliferation of deprived and vulnerable urban neighbourhoods. 
                        Studying this phenomenon is often hindered by the lack of updated spatial information, 
                        preventing a global understanding of the ongoing transformations and the potential design of effective interventions.
                    </p>
                    <p align="justify">
                        GeoAI technologies such as the combination of remote sensing data with machine learning offer the opportunity to systematically monitor these rapid developments, 
                        providing relevant information for better understanding urbanization processes in different parts of the world. 
                        Advances in deep learning can largely contribute to mapping urban land cover, 
                        land use, and identifying informal and vulnerable areas. 
                        Automated techniques to analyze temporal image series can reveal vital information about urban growth patterns and morphological changes.
                    </p>
                </div>
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

    </body>
</html>
