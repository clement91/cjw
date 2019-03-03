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
        <link rel="stylesheet" href="vendors/glint/css/base.css">
        <link rel="stylesheet" href="vendors/glint/css/vendor.css">
        <link rel="stylesheet" href="vendors/glint/css/main.css">
        <link rel="stylesheet" href="css/index.css">

        <link rel="stylesheet" href="vendors/cs/css/jquery.classycountdown.css" />
        <link href="vendors/cs/css/responsive.css" rel="stylesheet">
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
                        <li><a class="smoothscroll"  href="#story" title="story">Our Story</a></li>
                        <li><a class="smoothscroll"  href="#gallery" title="gallery">Gallery</a></li>
                        <li><a class="smoothscroll"  href="#wedding" title="wedding">The Wedding</a></li>
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

        <!-- home vendors/glint/images/hero-bg.jpg
        ================================================== -->
        <section id="home">
          <div class="flex-center position-ref full-height">
              <div class="content">
                  <div class="customTitle title m-b-md">
                      Clement & Jaclyn
                  </div>
                  <p class="color_p">
                    June 29, 2019, 4.00 PM &nbsp; <b>|</b> &nbsp; Rasa Sayang Penang <br/>
                    #clejacweds
                  </p>
              </div>
          </div>
        </section>

        <!-- our story
        ================================================== -->
        <section id="story" class="s-story">
          <div class="row section-header has-bottom-sep" data-aos="fade-up">
                <div class="col-full">
                    <h1 class="display-2">
                      OUR STORY
                    </h1>
                </div>
          </div> <!-- end section-header -->
          <div class="row services-list block-1-2 block-tab-full">
              <div class="content" data-aos="fade-up">
                <p class="color_17">
                  WE ARE GETTING MARRIED (:
                </p>

                <p class="color_p flex-center">
                  test 222 I'm a paragraph. Click here to add your own text and edit me. It’s easy.<br/>
                  Just click “Edit Text” or double click me to add your own content and<br/>
                  make changes to the font. I’m a great place for you to tell a story and let<br/>
                  your users know a little more about you.
                </p>
                <br/>
              </div>
           </div> <!-- end services-list -->
        </section>

        <!-- gallery
        ================================================== -->
        <section id='gallery' class="s-works">
            <div class="intro-wrap">

                <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                    <div class="col-full">
                        <h3 class="color_14">OUR GALLERY</h3>
                        <h1 class="display-2 display-2--light">Sneak peak! Check out some of our pre wedding shoot</h1>
                    </div>
                </div> <!-- end section-header -->

            </div> <!-- end intro-wrap -->

            <div class="row works-content">
                <div class="col-full masonry-wrap">
                    <div class="masonry">

                        <div class="masonry__brick" data-aos="fade-up">
                            <div class="item-folio">

                                <div class="item-folio__thumb">
                                    <a href="vendors/glint/images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                        <img src="vendors/glint/images/portfolio/3.jpg"
                                             srcset="vendors/glint/images/portfolio/3.jpg 1x, vendors/glint/images/portfolio/3@2x.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        Shutterbug
                                    </h3>
                                    <p class="item-folio__cat">
                                        Branding
                                    </p>
                                </div>

                                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                    <i class="icon-link"></i>
                                </a>

                                <div class="item-folio__caption">
                                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                                </div>

                            </div>
                        </div> <!-- end masonry__brick -->

                        <div class="masonry__brick" data-aos="fade-up">
                            <div class="item-folio">

                                <div class="item-folio__thumb">
                                    <a href="vendors/glint/images/portfolio/gallery/g-6.jpg" class="thumb-link" title="6" data-size="1050x700">
                                        <img src="vendors/glint/images/portfolio/6.jpg"
                                             srcset="vendors/glint/images/portfolio/6.jpg 1x, vendors/glint/images/portfolio/6@2x.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        6
                                    </h3>
                                    <p class="item-folio__cat">
                                        Web Design
                                    </p>
                                </div>

                                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                    <i class="icon-link"></i>
                                </a>

                                <div class="item-folio__caption">
                                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                                </div>

                            </div>
                        </div> <!-- end masonry__brick -->

                        <div class="masonry__brick" data-aos="fade-up">
                            <div class="item-folio">

                                <div class="item-folio__thumb">
                                    <a href="vendors/glint/images/portfolio/gallery/g-beetle.jpg" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                        <img src="vendors/glint/images/portfolio/5.jpg"
                                             srcset="vendors/glint/images/portfolio/5.jpg 1x, vendors/glint/images/portfolio/5@2x.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        The Beetle
                                    </h3>
                                    <p class="item-folio__cat">
                                        Web Development
                                    </p>
                                </div>

                                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                    <i class="icon-link"></i>
                                </a>

                                <div class="item-folio__caption">
                                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                                </div>

                            </div>
                        </div> <!-- end masonry__brick -->

                        <div class="masonry__brick" data-aos="fade-up">
                            <div class="item-folio">

                                <div class="item-folio__thumb">
                                    <a href="vendors/glint/images/portfolio/gallery/g-1.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                                        <img src="vendors/glint/images/portfolio/1.jpg"
                                             srcset="vendors/glint/images/portfolio/1.jpg 1x, vendors/glint/images/portfolio/1@2x.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        Grow Green
                                    </h3>
                                    <p class="item-folio__cat">
                                        Branding
                                    </p>
                                </div>

                                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                    <i class="icon-link"></i>
                                </a>

                                <div class="item-folio__caption">
                                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                                </div>

                            </div>
                        </div> <!-- end masonry__brick -->

                        <div class="masonry__brick" data-aos="fade-up">
                            <div class="item-folio">

                                <div class="item-folio__thumb">
                                    <a href="vendors/glint/images/portfolio/gallery/g-2.jpg" class="thumb-link" title="2" data-size="1050x700">
                                        <img src="vendors/glint/images/portfolio/2.jpg"
                                             srcset="vendors/glint/images/portfolio/2.jpg 1x, vendors/glint/images/portfolio/2@2x.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        2
                                    </h3>
                                    <p class="item-folio__cat">
                                        Web Design
                                    </p>
                                </div>

                                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                    <i class="icon-link"></i>
                                </a>

                                <div class="item-folio__caption">
                                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                                </div>

                            </div>
                        </div> <!-- end masonry__brick -->

                        <div class="masonry__brick" data-aos="fade-up">
                            <div class="item-folio">

                                <div class="item-folio__thumb">
                                    <a href="vendors/glint/images/portfolio/gallery/g-4.jpg" class="thumb-link" title="4" data-size="1050x700">
                                        <img src="vendors/glint/images/portfolio/4.jpg"
                                             srcset="vendors/glint/images/portfolio/4.jpg 1x, vendors/glint/images/portfolio/4@2x.jpg 2x" alt="">
                                    </a>
                                </div>

                                <div class="item-folio__text">
                                    <h3 class="item-folio__title">
                                        4
                                    </h3>
                                    <p class="item-folio__cat">
                                        Web Design
                                    </p>
                                </div>

                                <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                    <i class="icon-link"></i>
                                </a>

                                <div class="item-folio__caption">
                                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                                </div>

                            </div>
                        </div> <!-- end masonry__brick -->

                    </div> <!-- end masonry -->
                </div> <!-- end col-full -->
            </div> <!-- end works-content -->

        </section> <!-- end s-gallery -->

        <!-- wedding
        ================================================== -->
        <section id="wedding" class="s-wedding">
          <div class="row section-header" data-aos="fade-up">
              <div class="col-full">
                  <h1 class="color_14">THE WEDDING</h1>
                  <div id="normal-countdown" data-date="2019/06/29"></div>
                  <br/>
                  <h3 class="subhead">When</h3>
                  <p class="color_p">June 29, 2019, 4:00 PM</p>
                  <h3 class="subhead">Where</h3>
                  <p class="color_p">
                    Rasa Sayang Penang,<br/>
                    Batu Feringgi Main Road, Jalan Batu Feringgi,<br/>
                    11100 Batu Feringgi, Pulau Pinang, Malaysia<br/>
                    +60 4-888 8888
                  </p>
                  <div class="home-content__buttons">
                      <a href="/rsvp" class="smoothscroll btn btn--stroke">
                          RSVP
                      </a>
                  </div>
              </div>
          </div> <!-- end section-header -->

        </section>

        <!-- RSVP ' another page
        ================================================== -->

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
          composer create-project --prefer-dist laravel/laravel projectname "5.2.*
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
        <script src="vendors/glint/js/plugins.js"></script>
        <script src="vendors/glint/js/main.js"></script>
      	<script src="vendors/cs/js/jquery.countdown.min.js"></script>
      	<script src="vendors/cs/js/scripts.js"></script>
        <!--
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
        -->
    </body>
</html>
