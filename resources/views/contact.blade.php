@extends('layouts.base')

<head>
    <title>HackCville - Contact</title>
     <style>
     #contactdiv {
            background: #ADD8E6;
            height: auto;
            margin: 0 auto;
            width: 100%;
            padding: 100px 0;
        }
     #map {
     	background: yellow;
     	display: inline-block;
        width: 37.5%;
        height: 50%;
        margin-left: 10%;
        margin-right: 5%;
     }
     #contactgreeting {
      	display: inline-block;
      	width: 37%;
      	height: 50%;
      	position:absolute;
     }
    </style>
</head>


@section('content')

<body>
	<div id="contactdiv">
	 	<div id= "map">
	 		<script>
  			function initMap() {
  				var mapDiv = document.getElementById('map');
  				var myLatLng = {lat: 38.035974, lng: -78.500286};
    			var map = new google.maps.Map(mapDiv, {
         	 	center: myLatLng,
          		zoom: 19
        		});
    			var marker = new google.maps.Marker({
   					position: myLatLng,
    				map: map,
    				title: 'HackCville'
  				});
    		}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"async defer></script>  
		</div>
	 	<div id= "contactgreeting">
			<p>
			<h2>Contact Us</h2>
			<h3>Or come visit us on the Corner!</h3>
			<br />
			You can email us at hello@hackcville.com. If you’re interested in recruiting opportunities, reach out to us at recruiting@hackcville.com.
			</p>
			<p>
			We’re located on #9 Elliewood Avenue on the Corner. Come visit us! We’re around M-F and Sunday 4-9pm.
			</p>
		</div>
		<!--<form action="form-to-email.php" name="myemailform" method="post">
    		<div>
        		<span>Name</span>
        		<input type="text" name="name" value="" placeholder="Your Name">
    		</div>
			<div>
        		<span>Email</span>
        		<input type="email" name="email" autocapitalize="off" autocorrect="off" value="" placeholder="example@domain.com">
    		</div>
			<div><textarea name="message" placeholder="Message"></textarea></div>
			<div class="code">
        		<button><input type="submit" name='submit' value="Send"></button>
    		</div>
    		<i class="clear" style="display: block"></i>
    		</div>
		</form>
		-->

	</div>
</body>
@endsection