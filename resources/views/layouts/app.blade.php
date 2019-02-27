<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <title>cjw</title>
        <meta name="description" content="">
        <meta name="author" content="ykchooi">

        <!-- mobile specific metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="vendors/cs/css/jquery.classycountdown.css" />
        <link href="vendors/cs/css/responsive.css" rel="stylesheet">
        <link href="vendors/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="vendors/bootstrap-select-1.13.2/dist/css/bootstrap-select.min.css" rel="stylesheet">

        <link rel="stylesheet" href="vendors/glint/css/base.css">
        <link rel="stylesheet" href="vendors/glint/css/vendor.css">
        <link rel="stylesheet" href="vendors/glint/css/main.css">
        <link rel="stylesheet" href="css/index.css">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

        <!-- script
        ================================================== -->
        <script src="vendors/glint/js/modernizr.js"></script>
        <script src="vendors/glint/js/pace.min.js"></script>

        <!-- favicons
        ================================================== -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

    </head>
    <body id="top">
        <!--
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        -->
        <!-- header
        ================================================== -->
        <header class="s-header">

            <div class="header-logo">
                <a class="site-logo" href="index.html">
                    <!--<img src="vendors/glint/images/logo.png" alt="Homepage">-->
                </a>
            </div>

            <nav class="header-nav">

                <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

                <div class="header-nav__content">
                    <h3>Navigation</h3>

                    <ul class="header-nav__list">
                        <li class="current"><a class="smoothscroll"  href="/" title="home">Home</a></li>
                        <li><a class="smoothscroll"  href="/#story" title="story">Our Story</a></li>
                        <li><a class="smoothscroll"  href="/#gallery" title="gallery">Gallery</a></li>
                        <li><a class="smoothscroll"  href="/#wedding" title="wedding">The Wedding</a></li>
                      <!--  <li><a class="smoothscroll"  href="#clients" title="vendors">Vendors</a></li>-->
                        <li><a class="smoothscroll"  href="/rsvp" title="rsvp">RSVP</a></li>
                    </ul>

                    <p>
                      Perspiciatis hic praesentium nesciunt. Et neque a dolorum
                      <a href='#0'>voluptatem</a>
                      porro iusto sequi veritatis libero enim.
                      Iusto id suscipit veritatis neque reprehenderit.
                    </p>

                    <ul class="header-nav__social">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                    </ul>

                </div> <!-- end header-nav__content -->

            </nav>  <!-- end header-nav -->

            <a class="header-menu-toggle" href="#0">
                <span class="header-menu-text">Menu</span>
                <span class="header-menu-icon"></span>
            </a>

        </header> <!-- end s-header -->

        @yield('content')



        <!-- footer
        ================================================== -->
        <footer>
            <div class="row footer-bottom">
                <div class="col-twelve">
                    <div class="copyright flex-center">
                      <div>#clejacweds<br/>
                        © Copyright By Clement & Jaclyn 2019</div>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div> <!-- end footer-bottom -->

        </footer> <!-- end footer -->


        <!-- preloader
        ================================================== -->

        <div id="preloader">
            <div id="loader">
                <div class="line-scale-pulse-out">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!--
        <div class="preloader-cube">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
        -->

        <!-- Java Script
        ================================================== -->
        <!--
        <script>
          // Initialize and add the map
          function initMap() {
          // The location of Uluru
          var uluru = {lat: -25.344, lng: 131.036};
          // The map, centered at Uluru
          var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({position: uluru, map: map});
          }
        </script>
        -->

        <script src="vendors/glint/js/jquery-3.2.1.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.js"></script>
        <script src="vendors/bootstrap-select-1.13.2/js/bootstrap-select.js"></script>
        <script src="vendors/glint/js/plugins.js"></script>
        <script src="vendors/glint/js/main.js"></script>
      	<script src="vendors/cs/js/jquery.countdown.min.js"></script>
      	<script src="vendors/cs/js/scripts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

        <!--
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
        -->

        <script src="{{ asset('js/rsvp.js') }}"></script>
    </body>
</html>
