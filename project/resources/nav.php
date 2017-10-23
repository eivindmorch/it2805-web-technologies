<nav id="topNav">
	<?php 
	$Page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	
	echo('<ul>');
	
	if ($Page == 'index.php') {echo '<li class="lightBlueFont">Hjem</li>';}
	else echo '<li><a href="index.php">Hjem</a></li>';
	
	if ($Page == 'news.php') {echo '<li class="lightBlueFont">Nyheter</li>';}
	else echo '<li><a href="news.php">Nyheter</a></li>';
	
	if ($Page == 'about.php') {echo '<li class="lightBlueFont">Om oss</li>';}
	else echo '<li><a href="about.php">Om oss</a></li>';
	
	if ($Page == 'employees.php') {echo '<li class="lightBlueFont">Ansatte</li>';}
	else echo '<li><a href="employees.php">Ansatte</a></li>';
	
	if ($Page == 'offers.php') {echo '<li class="lightBlueFont">Kontoret tilbyr</li>';}
	else echo '<li><a href="offers.php">Kontoret tilbyr</a></li>';

	if ($Page == 'prices.php') {echo '<li class="lightBlueFont">Priser</li>';}
	else echo '<li><a href="prices.php">Priser</a></li>';
	
	if ($Page == 'contact.php') {echo '<li class="lightBlueFont">Kontakt</li>';}
	else echo '<li><a href="contact.php">Kontakt</a></li>';
	
	if ($Page == 'booking.php') {echo '<li class="lightBlueFont">Timebestilling</li>';}
	else echo '<li><a href="booking.php">Timebestilling</a></li>';
	
	if ($Page == 'links.php') {echo '<li class="lightBlueFont">Nyttige lenker</li>';}
	else echo '<li><a href="links.php">Nyttige lenker</a></li>';
	
	echo('</ul>');
	?>
</nav>