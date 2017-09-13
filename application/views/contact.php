<!-- basic-breadcrumb start -->
		<div class="basic-breadcrumb-area gray-bg ptb-70">
			<div class="container">
				<div class="basic-breadcrumb text-center">
					<h3 class="">Contact Us</h3>
					<ol class="breadcrumb text-xs">
						<li><a href="index.html">Home</a></li>
						<li class="active">Contact</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- basic-breadcrumb end -->

		<!-- basic-contact-area -->
		<div class="basic-contact-area pt-90 pb-50">
			<div class="container">
				<div class="row multi-columns-row">
					<div class="col-sm-4 col-md-4 col-lg-4 mb-40">
						<div class="contact-person">
							<h4>Chief Editor</h4>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In dui magna posuere.</p>
							<a href="mailto:#">chief@basictheme.net</a>
						</div>
					</div>

					<div class="col-sm-4 col-md-4 col-lg-4 mb-40">
						<div class="contact-person">
							<h4>Technical Director</h4>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In dui magna posuere.</p>
							<a href="mailto:#">director@basictheme.net</a>
						</div>
					</div>

					<div class="col-sm-4 col-md-4 col-lg-4 mb-40">
						<div class="contact-person">
							<h4>Lead Designer</h4>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In dui magna posuere.</p>
							<a href="mailto:#">designer@basictheme.net</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- basic-contact-area end -->
		
		<div class="map-area">
			<div class="container">
				<div id="map"></div>
			</div>
		</div>
		
		<div class="basic-contact-form ptb-90">
			<div class="container">
				<div class="area-title text-center">
					<h2>Let’s talk</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci.</p>
				</div>			
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<form id="contact-form" action="mail.php" method="post">
							<div class="row">
								<div class="col-md-6 form-group">
									<label class="sr-only">First Name</label>
									<input type="text" class="form-control input-lg" name="name" placeholder="First Name" >
									<p class="help-block text-danger"></p>
								</div>
								<div class="col-md-6 form-group">
									<label class="sr-only">Email</label>
									<input type="email" class="form-control input-lg" name="email" placeholder="Email" >
									<p class="help-block text-danger"></p>
								</div>
								<div class="col-md-12 form-group">
									<label class="sr-only">Subject</label>
									<input type="text" class="form-control input-lg" name="subject" placeholder="Subject" >
									<p class="help-block text-danger"></p>
								</div>
								<div class="col-md-12 form-group">
									<textarea class="form-control input-lg" rows="7" name="message" placeholder="Message*"></textarea>
									<p class="help-block text-danger"></p>
								</div>
								<div class="col-md-12 text-center">
									<button type="submit" class="btn btn-lg btn-round btn-dark">Send Email</button>
								</div>

							</div><!-- .row -->
						</form>
						<!-- Ajax response -->
						<div class="ajax-response text-center"></div>
					</div>
				</div>			
			</div>
		</div>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBceNl50o3BU6LrsIGJxSL9tKKvqBKIeVs"></script>
		<script>
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    scrollwheel: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
					styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!'
                });
            }
		</script>

		<style>
		.header-transparent .logo h4 {
		    color: #000000 !important;
		}
		.header-transparent .basic-menu li a {
		    color: #000000 !important;
		}
		</style>