<!DOCTYPE html>
<html lang="en-US" class="no-js">
	
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
		<!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<title>Contact</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Quickdev">

		<!-- ==============================================
		Favicon
		=============================================== -->  
        <link rel="shortcut icon" href="img/favicon.jpg">
        
		<!-- ==============================================
		CSS
		=============================================== -->  
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        <link rel="stylesheet" href="css/styles.css"> 
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
        <style>
		#black{color:black;}
		#gold{color:gold;}
		#white{color:#fff;}
		.service-name{color:gold;}
p.con {
    margin-left: 51px;
}
		</style>
</head>

<body>
  
<!-- LOADER -->
<div id="loader-wrapper">
<div id="loader"> <img src="img/preloader.gif" alt=""></div>
</div>
<!-- LOADER -->


<!-- MAIN CONTAINER -->
    <div class="wrapper">
        <!-- MAIN HEADER -->
        <div class="pages-headerc">
            <!-- MAIN NAVBAR -->
           <?php include('header.php');?>
        </div><!-- END MAIN HEADER -->
            
            
        </div><!-- END MAIN HEADER -->
        
        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2>GET IN TOUCH</h2>
                    <hr class="short">
                    <p>At Ezen Aviation Pvt Ltd, we are here to help you. Do get in touch with us by filling in the form below. One of our experts will be in touch. </p>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="span-contact">
                      <form method="POST" action="form.php">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control customize" placeholder="Name" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control customize" placeholder="Email address" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_phone" type="tel" name="phno" class="form-control customize" placeholder="Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control customize" placeholder="Your query" rows="6" required="required" data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                       <center> <p><input type="submit" class="btn btn-warning" name="submit" value="Send message"></p></center>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="sidebar">
                      <div class="address-box change1">
                        <div class="icon-circle"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                         <div class="address-info">
                          <h5>Address</h5>
                          <p class="footer-cahnge mobile">10 Zahra, Prof Almeida Road 
							Bandra <br />
							 Mumbai – 400050 India</p>
						
							<p class="footer-cahnge1">6/259 Albany Creek Road
							  Bridgemandowns
							  <br /> Queensland – 4035
							  Australia</p>
                         </div>
                      </div>
                        
                      <div class="address-box">
                        <div class="icon-circle"><i class="fa fa-phone" aria-hidden="true"></i></div>
                         <div class="address-info">
                          <h5>Phone</h5>
                          <p>+91 97699 18555 </p>
						  <p class="footer-cahnge2 mobile2">+61 4 5187 2512</p>
                         </div>
                      </div>
                     
                      <div class="address-box">
                        <div class="icon-circle"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="address-info">
                          <h5>Email</h5>
                          <p>ncreddy@ezenaviation.com</p>
                           <p class="con">sales@ezenaviation.com</p>
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        


    </div>
    <!-- END MAIN CONTAINER -->
    
  <!--  <div class="maps">
            <div id="map"></div>
            <script>
                      function initMap() {
                    // Styles a map in night mode.
                    var map = new google.maps.Map(document.getElementById('map'), {
                      center: {lat: 17.3850, lng: 78.4867},
                      zoom: 12,
                      styles: [
                                {
                                    "featureType": "administrative",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "color": "#444444"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "landscape",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "color": "#f2f2f2"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "poi",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "saturation": -100
                                        },
                                        {
                                            "lightness": 45
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "visibility": "simplified"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.arterial",
                                    "elementType": "labels.icon",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "transit",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "color": "#da1212"
                                        },
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                }
                            ]
                        });
                  }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKEb1AlchTdpu9dLzLVo8I8BNxYPlEldY&amp;callback=initMap" async defer></script>
        </div>  -->
    
         
   <?php include('footer.php');?>
    <!-- ==============================================
    SCRIPTS
   =============================================== -->
	<!-- LOAD JQUERY LIBRARY -->
	<script src="ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

	<!-- REVOLUTION JS FILES -->
	<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
	<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/top.js"></script>
    <script src='js/flickity.pkgd.min.js'></script> 
    <script src="js/testimonials.js"></script>
    <script src="js/counter.js"></script>    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/filters.js"></script>
    <script src='js/slick.min.js'></script>
    <script src="js/car.slider.js"></script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-101241150-1', 'auto');
      ga('send', 'pageview');
    </script>

</body>


</html>
