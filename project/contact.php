<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Storgata Legekontor | Kontakt</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
	function initialize() {
		var mapCanvas = document.getElementById('map_canvas');
		var myLatlng = new google.maps.LatLng(59.913994, 10.751213);
		
        var mapOptions = {
			center: new google.maps.LatLng(59.913994, 10.751213),
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.ROADMAP
        }
		
		var map = new google.maps.Map(mapCanvas, mapOptions)
		
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Legekontor'
		});
      
	  }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>      
</head>
<body>
	<?php include 'resources/header.html';?>
	<?php include 'resources/nav.php';?>
	<section>
	
	<article>
	
		<h3> Kontaktinformasjon </h3>
		<p>
			Vi er tilgjengelig på telefon, e-post og fax. 
		</p>
		
		<p>
		Telefon: 815 49 300 <br>
		E-post: legekontor@storgatalegekontor.no <br>
		Fax: 815 49 301 <br>
		Adresse: Storgata 25, 0184 Oslo <br>
		Ved livstruende tilstander ring 113
		</p>
		
		<br/>	
		
		<h3> Åpningstider </h3>
		<p>
			Mandag–fredag: 09:00 -17:00
			Lørdag: 12:00 - 15:00
		</p>
		
		<br/>	
		
		<h3> Telefontider </h3>
		<p>
		Mandag-Fredag: <br>
		08.30 -12.00 og 13.00 -14.30 <br>
		</p>
		<h3> Kart </h3>
		<div id="map_canvas"> </div>
	
	</article>
	
	</section>
	
	<?php include 'resources/footer.html';?>
</body>
</html>