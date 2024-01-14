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
                    Technical Tutorials
                </h3>
            </div>
        </div>

        <div class="container mb-5">

            <h3 class="mt-5 mb-3">DART model: A hands-on introduction to the Discrete Anisotropic Radiative Transfer (DART) Model</h3>
            <p><i>Tutor: <b>Prof. Jean-Philippe Gastellu-Etchegorry</b> (CESBIO)</i></p>

            <p>
                <a class="text-decoration-underline" href="https://dart.omp.eu" target="_blank">DART</a> is an ever-evolving radiative transfer model. 
                It simulates the 3D radiative budget (RB) and remote sensing (RS) satellite, 
                airborne and in-situ signals (spectroradiometer, LiDAR) of urban and natural landscapes, 
                from visible to thermal infrared. It is a reference tool for a wide range of RS studies (sensitivity studies, 
                inversion of RS images, design of new RS sensor, etc.). Licenses are free for research and education. 
                This tutorial is aimed to discover and/or deepen DART theory and functionalities.
            </p>

            <p>
                <b>Expected requirements:</b> <br>
                <a class="text-decoration-underline" href="https://dart.omp.eu/Public/documentation/contenu/documentation/DART_User_Manual.pdf" target="_blank">DART User Manual</a> (Work Package WP0). 
                Please install <a class="text-decoration-underline" href="https://mycore.core-cloud.net/index.php/s/7ytNOZ3KZTxCzZR" target="_blank">DART_5-9-6_2023-04-26_v1325</a> and <a class="text-decoration-underline" href="https://mycore.core-cloud.net/index.php/s/7ytNOZ3KZTxCzZR" target="_blank">WP0</a> 
                (<a class="text-decoration-underline" href="https://dart.omp.eu/index.php#/getDart" target="_blank">Free DART license</a> can be acquired).
            </p>

            <h3 class="mt-5 mb-3">Google Earth Engine: A hands-on introduction to Google Earth Engine</h3>
            <p><i>Tutor: <b>Noel Gorelick</b> (Google)</i></p>

            <p>
                This session is a hands-on workshop that takes participants through the basics of getting up and running with <a class="text-decoration-underline" href="https://earthengine.google.com/" target="_blank">Earth Engine</a>. 
                Participants will learn how to perform tasks such as image visualization, time-series compositing and areal statistic 
                computations using the Earth Engine API and interactive development environment.
            </p>

            <p>
                <b>Expected requirements:</b> <br>
                Recent version of Google Chrome installed<br>
            </p>

            <h3 class="mt-5 mb-3">EnMAP-Box: A hands-on introduction to the EnMAP-Box, a QGIS Plugin for Imaging Spectroscopy and Remote Sensing</h3>
            <p><i>Tutor: <b>Andreas Janz</b> (Humboldt University of Berlin)</i></p>

            <p>
                We show various basic and advanced components of the EnMAP-Box. Participants learn how to manage, 
                visualize and process raster and vector data inside the EnMAP-Box. We detail the multiple-viewer concept, 
                that allows the exploration of data in different visualizations at the same time. We highlight, 
                how we capitalize on the spectral characteristics of optical (hyperspectral) EO data, 
                e.g. by correctly plotting pixel profiles against the given center wavelength, or by quickly selecting target bands for visualization. 
                Finally, we perform a Regression-based Unmixing Workflow using urban EnMAP data to illustrate EO data processing inside the EnMAP-Box.
            </p>

            <p>
                <b>Expected requirements:</b> <br>
                QGIS 3.28 with EnMAP-Box 3.12 installed (will be released in April 2023) <br>
                Installation instructions: <a class="text-decoration-underline" href="https://enmap-box.readthedocs.io/en/latest/usr_section/usr_installation.html" target="_blank">https://enmap-box.readthedocs.io/en/latest/usr_section/usr_installation.html</a> <br>
            </p>

            <h3 class="mt-5 mb-3">Geohazards Exploitation Platform: Online EO Processing Services for Mapping and Monitoring Hazard-prone Areas in Urban Contextt</h3>
            <p><i>Tutor: <b>Dr. Michael Foumelis</b> (Aristotle University of Thessaloniki)</i></p>

            <p>
                The <a class="text-decoration-underline" href="https://geohazards-tep.eu/#" target="_blank">Geohazards Exploitation Platform</a> (GEP) is a cloud-based environment 
                providing access to satellite imagery and EO processing services that 
                allow for the mapping of hazard-prone land surfaces and monitoring of 
                terrain motion. The platform is continuously expanding to address the 
                constantly evolving objectives of the geohazards community, by integrating 
                a broad range of on-demand and systematic services hosted on cloud 
                resources. This tutorial aims to introduce the platform's interface 
                and available operational services while demonstrating its applicability 
                to the monitoring of urban environments. 
            </p>

            <p>
                <b>Expected requirements:</b> <br>
                Recent version of <a class="text-decoration-underline" href="https://qgis.org/en/site/forusers/download.html" target="_blank">QGIS</a> installed <br>
            </p>

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
