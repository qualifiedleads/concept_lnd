var georesult,city,country,myplace;var datass={net:[{name:"שירי קדוש",age:26,pin:"http://commondatastorage.googleapis.com/lnd/mob/1p.png",avatar:"http://commondatastorage.googleapis.com/lnd/mob/1.jpg"},{name:"שגיא מילר",age:37,pin:"http://commondatastorage.googleapis.com/lnd/mob/2p.png",avatar:"http://commondatastorage.googleapis.com/lnd/mob/2.jpg"},{name:"ענת סמל",age:31,pin:"http://commondatastorage.googleapis.com/lnd/mob/3p.png",avatar:"http://commondatastorage.googleapis.com/lnd/mob/3.jpg"},{name:"אייל ארצי",age:24,pin:"http://commondatastorage.googleapis.com/lnd/mob/4p.png",avatar:"http://commondatastorage.googleapis.com/lnd/mob/4.jpg"},{name:"נורית רז",age:27,pin:"http://commondatastorage.googleapis.com/lnd/mob/5p.png",avatar:"http://commondatastorage.googleapis.com/lnd/mob/5.jpg"},{name:"מורן נחמיאס",age:26,pin:"http://commondatastorage.googleapis.com/lnd/mob/6p.png",avatar:"http://commondatastorage.googleapis.com/lnd/mob/6.jpg"},{name:"לימור ירון",age:25,pin:"http://commondatastorage.googleapis.com/lnd/mob/7p.png",avatar:"http://commondatastorage.googleapis.com/lnd/mob/7.jpg"},{name:"גלינה ראובני",age:22,pin:"http://commondatastorage.googleapis.com/lnd/mob/8p.png",avatar:"http://commondatastorage.googleapis.com/lnd/mob/8.jpg"},{name:"בן ירושלמי",age:21,pin:"http://commondatastorage.googleapis.com/lnd/mob/9p.png",avatar:"http://commondatastorage.googleapis.com/lnd/mob/9.jpg"},{name:"אנה טרבלסי",age:25,pin:"http://commondatastorage.googleapis.com/lnd/mob/10p.png",avatar:"http://commondatastorage.googleapis.com/lnd/mob/10.jpg"},{name:"יהודית גרינפלד",age:25,pin:"http://commondatastorage.googleapis.com/lnd/mob/11p.png",avatar:"http://commondatastorage.googleapis.com/lnd/mob/11.jpg"},{name:"אתי",age:39,pin:"http://commondatastorage.googleapis.com/lnd/mob/12p.png",avatar:"http://commondatastorage.googleapis.com/lnd/mob/12.jpg"}]};var locations=[[32.09106,34.87858],[32.0845,34.884],[32.0828,34.8945],[31.90365,34.799933333],[31.90219,34.793293333],[31.90219,34.793293333],[31.895233333,34.8439],[31.881583333,34.85635],[31.90715,35.009466667],[31.88325,35.010483333],[31.883533333,35.022616667],[31.7892,35.210383333],[31.78895,35.208333333],[31.78705,35.2161],[31.787483333,35.219833333],[31.776866667,35.221166667],[31.7962,34.649883333],[31.80005,34.6586],[31.8033,34.6421],[31.81115,34.646416667],[31.8125,34.6672],[32.08195,34.787983333],[32.054683333,34.8188],[32.087916667,34.772883333],[32.07185,34.7673],[32.087483333,34.7867],[32.0733,34.780183333],[32.0653,34.83305],[32.11715,34.86755],[32.247266667,34.908266667],[32.218083333,34.991016667],[32.1867,34.940883333],[32.172466667,34.920116667],[32.172883333,34.83555],[32.0909,34.888333333],[32.324466667,34.85505],[32.350216667,34.854533333],[32.319533333,34.86175],[32.489033333,34.912433333]];$(document).ready(function(){$.getScript("http://j.maxmind.com/app/geoip.js").done(function(){$.getScript("https://maps.googleapis.com/maps/api/js?sensor=false&callback=geoLander.init",function(){city=geoip_city();country=geoip_country_name();myplace=""==city?country:city+", "+country})})});var geoLander={map:null,mapContainer:document.getElementById("mapContainer"),markers:[],visibleInfoWindow:null,init:function(){geoLander.map=new google.maps.Map(geoLander.mapContainer,{mapTypeId:google.maps.MapTypeId.ROADMAP,disableDefaultUI:!0,disableDoubleClickZoom:!0,overviewMapControl:!1,zoomControl:!1,streetViewControl:!1,mapTypeControl:!1,scrollwheel:!1});geocoder=new google.maps.Geocoder;geoLander.geoLocate();window.setTimeout(function(){geoLander.generateRandomMarkers(geoLander.map.getCenter(),2,1)},2e3)},geoLocate:function(){geocoder.geocode({address:myplace,partialmatch:!0},geoLander.geocodeResult)},geocodeResult:function(e,t){"OK"==t&&0<e.length?(geoLander.map.fitBounds(e[0].geometry.viewport),geoLander.map.setZoom(12),lng=geoLander.map.getCenter().lng()):alert("Sorry but we can't find your location")},generateRandomMarkers:function(e,t,n){if(n==1){geoLander.clearMarkers()}var r=geoLander.map.getBounds();var i=0;for(var s=0;s<locations.length;s++){if(i<t){var o=new google.maps.LatLng(locations[s][0],locations[s][1]);if(r.contains(o)){var u=new google.maps.LatLng(locations[s][0],locations[s][1]),u=new google.maps.Marker({map:geoLander.map,title:datass.net[i].name+", "+datass.net[i].age,position:u,icon:datass.net[i].pin,draggable:!1});georesult=geoLander.addmarker(u,i);i++}else{}}}},addmarker:function(e,t){e.setMap(geoLander.map);geoLander.markers.push(e);d=new google.maps.InfoWindow({content:""+('<div class="mavatar"><a href="go.php" target="_blank"><img class="photo" src="'+datass.net[t].avatar+'" /></a><div class="minfo"><span class="mname">'+datass.net[t].name+'</span> <span class="mage">גיל: '+datass.net[t].age+'</span><div class="status"><img src="http://commondatastorage.googleapis.com/lnd/mob/active.gif" /> <span><a href="go.php" class="viewprofile" target="_blank">View Profile</a></span></div></div></div>'),size:new google.maps.Size(50,400)});google.maps.event.addListener(e,"click",geoLander.openInfoWindow(d,e))},openInfoWindow:function(e,t){return function(){geoLander.visibleInfoWindow&&geoLander.visibleInfoWindow.close();e.open(geoLander.map,t);geoLander.visibleInfoWindow=e}},generateTriggerCallback:function(e,t){return function(){google.maps.event.trigger(e,t)}},clearMarkers:function(){for(var e=0,t;t=geoLander.markers[e];e++)t.setVisible(!1)},improveAccuracy:function(){if(navigator.geolocation){navigator.geolocation.getCurrentPosition(geoLander.showPosition)}else{console.log("Geolocation is not supported by this browser.")}},showPosition:function(e){geoLander.map.setCenter(new google.maps.LatLng(e.coords.latitude,e.coords.longitude));geoLander.generateRandomMarkers(geoLander.map.getCenter(),10,0)}}