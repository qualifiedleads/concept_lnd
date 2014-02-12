<!DOCTYPE html>
<html lang="he"  dir="rtl">
<head>
<meta charset="utf-8">
<title>Map Lander</title>
<script type="text/javascript" src="http://maps.google.co.il/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src='http://j.maxmind.com/app/geoip.js'></script>
<script type="text/javascript" src="http://commondatastorage.googleapis.com/lnd/mob/markers.js"></script>
<link rel="stylesheet" href="http://commondatastorage.googleapis.com/lnd/mob/style.css" />
<meta name="viewport" content="width=device-width" />
<link rel="apple-touch-icon" href="apple-touch-icon.png"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes" /> 

</head>

<body>
    <div class="container">
		<div id="header" class="full">
			<h1>Get a Career in Styling<br /></h1>
		</div>
			
		<div id="container" class="full">   
			<div class="grid-left">
				<div id="mapContainer"></div>
	<div id="side-bar" class="desktop-only"><button class="accuracy" onclick="geoLander.improveAccuracy()">See Stylists near You</button>Find Pro-Stylists - Approved by <strong class="highlight">The Israeli Assocciation of Stylists</strong>
			</div>
				<div id="side-bar" class="mobile-only"><button class="accuracy" onclick="geoLander.improveAccuracy()">See Stylists near You</button>Find Pro-Stylists - Approved by <strong class="highlight">The Israeli Assocciation of Stylists</strong>
			</div>
</div>
    <div id="form" class="grid-right">
	<img src="http://commondatastorage.googleapis.com/lnd/mob/stylist_logox2.png" style="float:left" width="50" height="80" style=padding:3px />
	<h2 class="rule"><strong class="highlight">Israel Association of Stylists has approved only one Trainining Institution</strong></h2>
	<h2 class="rule">תנאים להצלחה:</h2>
    <div id="rules">
    <p> <img src="http://commondatastorage.googleapis.com/lnd/mob/check-small.png" class="im_king" />התעניינות עמוקה וכנה בעיצוב פנים</p>
    <p> <img src="http://commondatastorage.googleapis.com/lnd/mob/check-small.png" class="im_king" />הבטחה לא לסרב להצעות העבודה שאקבל במהלך הלימודים ו/או בסיומם</p>
    <p><img src="http://commondatastorage.googleapis.com/lnd/mob/check-small.png" class="im_king" /> כשאתה סוגר עיסקה עם אחד הספקים שהמלצנו לך, זו אחריות שלך לסגור עיסקה טובה לך וללקוח שלך</p>
    <p><img src="http://commondatastorage.googleapis.com/lnd/mob/check-small.png" class="im_king" />הבטחה לא לקבל " רגליים קרות" כשאתבקש לעצב פרויקט אמיתי</p>
    <p><img src="http://commondatastorage.googleapis.com/lnd/mob/check-small.png" class="im_king" />חברותיות ויכולת עבודה בקבוצה לצד עבודה אישית</p>
    <p><img src="http://commondatastorage.googleapis.com/lnd/mob/check-small.png" class="im_king" />פתיחות לקבלת רעיונות חדשים</p>
    <p><img src="http://commondatastorage.googleapis.com/lnd/mob/check-small.png" class="im_king" />רצון אמיתי להתעצם כמעצב/תי</p>
    <p><img src="http://commondatastorage.googleapis.com/lnd/mob/check-small.png" class="im_king" />רצון אמיתי לפתח קריירה בתחום</p>
    </div>

<h2>אם את/ה מסכים/ה לתנאים, לחצי על הכפתור " אני מסכימ/ה" כדי להתחיל קריירה בעיצוב.
</h2>
<div class="submit mobile-only">
	<a href="go.php" class="btn">I want to Join Them</a>
</div>
<div class="submit desktop-only">
					<a href="go.php" class="btn">I Want To Join</a>
				</div>
			</div>

			<div class="full notes" id="footer">
				<h2>Exclusively Approved by Israel Association of Stylists</h2>
				<h4>Address: Street, Tel Aviv, 60717 IL</h4>
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
var geoLander = {
    map: null,
    mapContainer: document.getElementById("mapContainer"),
    markers: [],
    visibleInfoWindow: null,
    init: function () {
        geoLander.map = new google.maps.Map(geoLander.mapContainer, {
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
        geoLander.geoLocate();
        window.setTimeout(function () {
            geoLander.generateRandomMarkers(geoLander.map.getCenter(),2,1)
        }, 2E3)
    },
    geoLocate: function () {
        geocoder.geocode({
            address: myplace,
            partialmatch: !0
        }, geoLander.geocodeResult)
    },
    geocodeResult: function (b, a) {
        "OK" == a && 0 < b.length ? (geoLander.map.fitBounds(b[0].geometry.viewport), geoLander.map.setZoom(12), lng = geoLander.map.getCenter().lng()) : alert("Sorry but we can't find your location")
    },
    generateRandomMarkers: function (b,numM, clear) {
        if (clear == 1) {
			geoLander.clearMarkers();
		}
		var currentBounds = geoLander.map.getBounds();
		var a = 0;
		for (var i = 0; i < locations.length; i++) {
			if (a < numM){
				var point = new google.maps.LatLng(locations[i][0], locations[i][1]);
				if(currentBounds.contains(point)) { 
		var c = new google.maps.LatLng(locations[i][0], locations[i][1]),c = new google.maps.Marker({map: geoLander.map, title: datass.net[a].name + ", " + datass.net[a].age, position: c, icon: datass.net[a].pin, draggable: !1 }); georesult = geoLander.addmarker(c,a); a++;
    } else	{
//		console.log("Not In Bounds: " + i);
			}
			}
		}
    },
addmarker: function (marker, a) {
marker.setMap(geoLander.map);
geoLander.markers.push(marker);
d = new google.maps.InfoWindow({
content: "" + ('<div class="mavatar"><a href="go.php" target="_blank"><img class="photo" src="' + datass.net[a].avatar + '" /></a><div class="minfo"><span class="mname">' + datass.net[a].name + '</span> <span class="mage">גיל: ' + datass.net[a].age + '</span><div class="status"><img src="http://commondatastorage.googleapis.com/lnd/mob/active.gif" /> <span><a href="go.php" class="viewprofile" target="_blank">View Profile</a></span></div></div></div>'),
size: new google.maps.Size(50, 400)
});
google.maps.event.addListener(marker, "click", geoLander.openInfoWindow(d, marker));
	},
    openInfoWindow: function (b, a) {
        return function () {
            geoLander.visibleInfoWindow && geoLander.visibleInfoWindow.close();
            b.open(geoLander.map, a);
            geoLander.visibleInfoWindow = b
        }
    },
    generateTriggerCallback: function (b, a) {
        return function () {
            google.maps.event.trigger(b, a)
        }
    },
    clearMarkers: function () {
        for (var b = 0, a; a = geoLander.markers[b]; b++) a.setVisible(!1)
    },
	improveAccuracy: function () {
		if (navigator.geolocation)
		{
			navigator.geolocation.getCurrentPosition(geoLander.showPosition);
		}
			else{console.log("Geolocation is not supported by this browser.");
		}
	},
	showPosition: function (position)  {
		  geoLander.map.setCenter(new google.maps.LatLng(position.coords.latitude,position.coords.longitude));
		  geoLander.generateRandomMarkers(geoLander.map.getCenter(),10, 0);
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
new google.maps.event.addDomListener(window, "load", geoLander.init, geoLander);
</script>  
</body>
</html>
