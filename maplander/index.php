<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Map Lander</title>
<script type="text/javascript" src="http://maps.google.co.il/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src='http://j.maxmind.com/app/geoip.js'></script>
<script type="text/javascript" src="markers.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css" />
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
    <div class="container">
		<div id="header" class="full">
			<h1>
				Prepare Yourself For an Exciting Career in Design...
				<br />
				But First Read Our Guidelines Below:
			</h1>
		</div>
			
		<div id="container" class="full">   
			<div class="grid-left">
				<div id="mapContainer"></div>
				<div id="side-bar" class="desktop-only">
					 We have helped 1,132 students graduate since 1998. We provide a real Guarantee. There is high chance that you will see a new Life in Design. It may be 
					 - <strong class="highlight">THEY ALL STARTED LIKE YOU!</strong>
				<button class="accuracy" onclick="Sex.improveAccuracy()">To adjust the accuracy of our service,  click here to share your position.</button> 
				</div>
				<div id="side-bar" class="mobile-only">
					 We have helped 1,132 students graduate since 1998 - <strong class="highlight">THEY ALL STARTED LIKE YOU!</strong>
				<button class="accuracy" onclick="Sex.improveAccuracy()">Share your position.</button> 
				</div>
				<div class="submit mobile-only">
					<a href="go.php" class="btn">I Agree</a>
				</div>
				<div id="avatars">
					<a href="go.php" target="_blank"><img src="images/avatar-1.jpg" style="margin: 5px;" /></a>
					<a href="go.php" target="_blank"><img src="images/avatar-2.jpg" style="margin: 5px;" /></a>
					<a href="go.php" target="_blank"><img src="images/avatar-3.jpg" style="margin: 5px;" /></a>
					<a href="go.php" target="_blank"><img src="images/avatar-4.jpg" style="margin: 5px;" /></a>
				</div>
			</div>
						<div id="form" class="grid-right">
				<h2 class="rule">The Rules:</h2>
				<div id="rules">
					<p>
						<img src="images/check-small.png" class="im_king" />
						If you see someone you know, you DO NOT publicize it. Do not spread rumors.
					</p>
					<p>
						<img src="images/check-small.png" class="im_king" />
						When you speak with any of our members, it is your responsibility to stay safe.
					</p>
					<p>
						<img src="images/check-small.png" class="im_king" />
						Respect other members. Our members are normal men and women; they are not movie stars or crazy. 
					</p>
					<p>
						<img src="images/check-small.png" class="im_king" />
						We periodically close registration for men. This is to have approximately an equal number of male and female members. 
					</p>
				</div>
				
				<h2>Registration for MEN is currently OPEN and it is FREE, so we advise you to register now, while slots for male members are open.</h2>
				<p>If you Agree, click the "I Agree" button below to proceed to Registration Page.</p>
			
				<div class="submit desktop-only">
					<a href="go.php" class="btn">I Agree</a>
				</div>
			</div>

			<div class="full notes" id="footer">
				<h2>You Will Get into Shenkar. Guaranteed!</h2>
			</div>
		
		</div>
	</div>
<!-- TRACKING HERE -->


<!-- GOOGLE MAP -->
<script type="text/javascript"> 
var georesult;
var city = geoip_city(),
    country = geoip_country_name();
myplace = "" == city ? country : city + ", " + country;
var Sex = {
    map: null,
    mapContainer: document.getElementById("mapContainer"),
    markers: [],
    visibleInfoWindow: null,
    init: function () {
        Sex.map = new google.maps.Map(Sex.mapContainer, {
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: !0,
            disableDoubleClickZoom: !0,
            overviewMapControl: !1,
            zoomControl: !1,
            streetViewControl: !1,
            mapTypeControl: !1,
            scrollwheel: !1
        });
        geocoder = new google.maps.Geocoder;
        Sex.geoLocate();
        window.setTimeout(function () {
            Sex.generateRandomMarkers(Sex.map.getCenter(),2,1)
        }, 2E3)
    },
    geoLocate: function () {
        geocoder.geocode({
            address: myplace,
            partialmatch: !0
        }, Sex.geocodeResult)
    },
    geocodeResult: function (b, a) {
        "OK" == a && 0 < b.length ? (Sex.map.fitBounds(b[0].geometry.viewport), Sex.map.setZoom(12), lng = Sex.map.getCenter().lng()) : alert("Sorry but we can't find your location")
    },
    generateRandomMarkers: function (b,numM, clear) {
        if (clear == 1) {
			Sex.clearMarkers();
		}
		var currentBounds = Sex.map.getBounds();
		var a = 0;
		for (var i = 0; i < locations.length; i++) {
			if (a < numM){
				var point = new google.maps.LatLng(locations[i][0], locations[i][1]);
				if(currentBounds.contains(point)) { 
						var c = new google.maps.LatLng(locations[i][0], locations[i][1]),
						c = new google.maps.Marker({
							map: Sex.map,
							title: datass.net[a].name + ", " + datass.net[a].age,
							position: c,
							icon: datass.net[a].pin,
							draggable: !1
						});
						georesult = Sex.addmarker(c,a);
						a++;
				} else	{
//					console.log("Not In Bounds: " + i);
				}			
			}
		}
    },
	addmarker: function (marker, a) {
							marker.setMap(Sex.map);
							Sex.markers.push(marker);
							d = new google.maps.InfoWindow({
								content: "" + ('<div class="mavatar"><a href="go.php" target="_blank"><img class="photo" src="' + datass.net[a].avatar + '" /></a><div class="minfo"><span class="mname">' + datass.net[a].name + '</span> <span class="mage">Age: ' + datass.net[a].age + '</span><div class="status"><img src="images/online-status.gif" /> <span><a href="go.php" class="viewprofile" target="_blank">View Profile</a></span></div></div></div>'),
								size: new google.maps.Size(50, 400)
							});
							google.maps.event.addListener(marker, "click", Sex.openInfoWindow(d, marker));
	},
    openInfoWindow: function (b, a) {
        return function () {
            Sex.visibleInfoWindow && Sex.visibleInfoWindow.close();
            b.open(Sex.map, a);
            Sex.visibleInfoWindow = b
        }
    },
    generateTriggerCallback: function (b, a) {
        return function () {
            google.maps.event.trigger(b, a)
        }
    },
    clearMarkers: function () {
        for (var b = 0, a; a = Sex.markers[b]; b++) a.setVisible(!1)
    },
	improveAccuracy: function () {
		if (navigator.geolocation)
		{
			navigator.geolocation.getCurrentPosition(Sex.showPosition);
		}
			else{console.log("Geolocation is not supported by this browser.");
		}
	},
	showPosition: function (position)  {
		  Sex.map.setCenter(new google.maps.LatLng(position.coords.latitude,position.coords.longitude));
		  Sex.generateRandomMarkers(Sex.map.getCenter(),10, 0);
	}
	
};
var locations =[
	[32.09106,34.87858],
	[32.0845,34.8840],
	[32.0828,34.8945],
	[31.90365,34.799933333],
	[31.90219,34.793293333],
	[31.90219,34.793293333],
	[31.895233333,34.8439],
	[31.881583333,34.85635],
	[31.90715,35.009466667],
	[31.88325,35.010483333],
	[31.883533333,35.022616667],
	[31.7892,35.210383333],
	[31.78895,35.208333333],
	[31.78705,35.2161],
	[31.787483333,35.219833333],
	[31.776866667,35.221166667],
	[31.7962,34.649883333],
	[31.80005,34.6586],
	[31.8033,34.6421],
	[31.81115,34.646416667],
	[31.8125,34.6672],
	[32.08195,34.787983333],
	[32.054683333,34.8188],
	[32.087916667,34.772883333],
	[32.07185,34.7673],
	[32.087483333,34.7867],
	[32.0733,34.780183333],
	[32.0653,34.83305],
	[32.11715,34.86755],
	[32.247266667,34.908266667],
	[32.218083333,34.991016667],
	[32.1867,34.940883333],
	[32.172466667,34.920116667],
	[32.172883333,34.83555],
	[32.0909,34.888333333],
	[32.324466667,34.85505],
	[32.350216667,34.854533333],
	[32.319533333,34.86175],
	[32.489033333,34.912433333]
];
new google.maps.event.addDomListener(window, "load", Sex.init, Sex);
</script>  
</body>
</html>
