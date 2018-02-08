<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Page Info / Información de Página -->
    <meta charset="utf-8">
    <title>HMRO© - Official Website</title>
    <meta name="Research, Art and Design" content="HMRO© - Official Portfolio Website">
    <meta name="Homero Ruiz García" content="Portfolio Website">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/faviconhmro.png"/>

    <!-- Fonts -->
    <link rel="stylesheet" href="fonts/webfonts.css">
    <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600%7CLato:400,300,100,700,900' rel='stylesheet' type='text/css'>

    <!-- Icon Fonts -->
    <link rel="stylesheet" href="stylesheets/ionicons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="stylesheets/bootstrap.css">
    <link rel="stylesheet" href="elements/css/elements.css">
    <link rel="stylesheet" href="stylesheets/sinister.css">
    <link rel="stylesheet" href="stylesheets/venobox.css">
    <link rel="stylesheet" href="stylesheets/owl.carousel.css">
    <link rel="stylesheet" href="stylesheets/slimmenu.css">
    <link rel="stylesheet" href="stylesheets/main.css">
    <link rel="stylesheet" href="stylesheets/main-bg.css">
    <link rel="stylesheet" href="stylesheets/main-responsive.css">


</head>

<body>

    <!-- Preloader -->
    <?php include_once("partials/preloader.html"); ?>
    <!-- end : preloader -->


    <!-- Nav Link Show Panel -->
    <div class="link-show-poster">
      <div class="valign"><h1 class="black font2"></h1></div>
    </div>



    <!-- Header -->
    <?php include_once("partials/menu.html"); ?>
    <!-- end : masthead -->


    <!-- Master Content / Contenido Master -->
    <section class="mastwrap">



      <section class="container about  add-bottom">

        <div class="row">
              <article class="col-md-4 text-left  inner-pad">
                <h6 class="promo-text  font2light black">Contact</h6>
                <h4 class="black font3">hmro.contact[at]gmail.com</h4>
              </article>
              <article class="col-md-8 text-left ">
                <h3 class="main-heading  font2 black">Let's get in touch</h3>
                <div class="row add-top-quarter">
                  <article class="col-md-12">

                        <div class="contact-item">
                              <div class="alert alert-error error color-bg" id="fname">
                                <p class="white">Name must not be empty</p>
                              </div>
                              <div class="alert alert-error  error color-bg" id="fmail">
                                <p class="white">Please provide a valid email</p>
                              </div>
                               <div class="alert alert-error  error color-bg" id="fmsg">
                                 <p class="white">Message should not be empty</p>
                               </div>
                                <form name="myform" id="contactForm" action="sendcontact.php" enctype="multipart/form-data" method="post">
                                  <article>
                                    <input type="text" placeholder="Your Name" id="name" name="name" size="100" class="border-form white font4light">
                                  </article>
                                  <article>
                                     <input type="text" placeholder="Valid email ID" name="email" id="email" size="30" class="border-form white font4light">
                                   </article>
                                   <article>
                                    <textarea placeholder="Your Message" name="message" cols="40" rows="5" id="msg" class="border-form white font4light"></textarea>
                                    <div class="btn-wrap  text-left">
                                      <button class="btn  btn-krome btn-krome-dark" id="submit" name="submit" type="submit">Send Message</button>
                                    </div>
                                  </article>
                               </form>
                        </div>



                  </article>
                </div>
              </article>
        </div>

      </section>




      <div class="container-fluid">
            <div class="row">
                <article class="col-md-12 map-wrap no-pad">
                    <div id="map" class=" fullheight"></div>
                </article>
            </div>
      </div>


    </section>



  <!-- Footer -->

<footer class="mastfoot silver-bg ">

      <div class="container">
        <div class="row">
          <article class="col-md-1">
            <nav class="footnav ">
                  <ul>
                    <li><a class="font1" href="http://www.hmro.co/">Design</a></li>
                    <li><a class="font1" href="#"></a></li>
                    <li><a class="font1" href="#"></a></li>
                  </ul>
            </nav>
          </article>
          <article class="col-md-3 text-left">
            <h3 class="font2 black">hmro.co</h3>
            <h6 class="font1 grey">Based in Weimar Germany. Art, Technology &amp Design Research. Think, create, collaborate.</h6>
          </article>
          <article class="col-md-6 text-left">
            <h3 class="font2 black">&copy;</h3>

            <h6 class="font1 grey">Copyright 2018. Weimar, Germany<br/><a href="http://www.hmro.co/">Homero Ruiz</a></h6>
          </article>
          <article class="col-md-2 text-right">
            <img alt="" title="" class="img-responsive foot-logo" src="images/logo.png">
          </article>
        </div>
      </div>

    </footer>


    <!-- JS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="javascripts/libs/common.js"></script>
    <script src="elements/js/elements.js"></script>
    <script src="javascripts/custom/form-validation.js"></script>
    <script src="javascripts/custom/main.js"></script>

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 14,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(50.9745958, 11.329037299999982), // Weimar, Germany.

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(50.9745958, 11.329037299999982),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>

</body>

</html>