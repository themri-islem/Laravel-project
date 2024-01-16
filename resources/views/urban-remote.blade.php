

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
                    Special Sessions
                </h3>
            </div>
        </div>

        <div class="container mb-5">
            
            <div class="text-center mt-2">
                <h3 class="titular-title gradient-horizon gradient-text mb-4">Urban remote sensing for the Global South</h3>
                <small><i><b>Tais Grippa</b>, Université Libre de Bruxelles, Belgium</i></small><br>
                <small><i><b>Stefanos Georganos</b>, KTH Royal Institute of Technology, Sweden</i></small>

                <div class="my-5 w-75 mx-auto">
                    <p align="start" class="mb-3 h5">
                        <b>Abstract</b>
                    </p>
                    <p align="justify">
                        The Global South (GS) is currently facing rapid urbanization rates. 
                        This rapid urban growth will induce major changes in human population distribution, 
                        with important consequences on the environment, health and socio-economic development. 
                        Satellite remote sensing offers an effective solution for mapping settlements, 
                        monitoring urbanisation at different spatial and temporal scales and better understanding socio-economic patterns and their evolution. 
                        While a large part of the literature is dedicated to the mapping of urban areas in developed countries, 
                        studies focusing on the GS remain a minority. 
                        Intrinsic differences between cities in the GS, 
                        such as disparaging socio-economic fragmentation, 
                        extremely high population density, proliferation of deprived urban areas and data scarcity, 
                        require the use of specifically tailored approaches. 
                        This session will focus on novel remote sensing methods for improving our understanding of the urban environment in the GS, 
                        such as Machine and Deep learning, data fusion, new sensors or unconventional data. 
                        Along with applications that focus on the classification of the built environment (i.e land cover and land use) 
                        other types of remote sensing applications will be explored (ecosystem services, socio-economic, epidemiologic and demographic mapping).
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
        <script src="aasets/js/jquery.js"></script>
        <script src="aasets/js/plugins.min.js"></script>
        <script src="aasets/js/functions.js"></script>

    </body>
</html>
