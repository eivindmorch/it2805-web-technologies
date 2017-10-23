<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Storgata Legekontor | Hjem</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<?php include 'resources/header.html';?>
	<?php include 'resources/nav.php';?>
	<section>

	<article>
			<img src="images/building/building.jpg" alt="Building" style="width:100%;height:200px">
		<br>
		<h4>
			Velkommen til Storgata Legekontors hjemmeside
		</h4>
		<p>
			Storgata Legekontor er et legekontor i Oslo som har et variert tilbud for alle aldre. Våre ansatte rangerer fra nyutdannede
			leger til spesialister innenfor en rekke fagfelt. Det varierte personalet vil sørge for at du får den beste behandlingen.
			Vi utfører alt fra vaksineringer til konsulering. Se sidene 

			<a href="about.php">om oss</a>,
			<a href="employees.php">ansatte</a>, og
			<a href="contact.php">kontakt</a> for merinformasjon. Hvis du trenger hjelp er det bare å
			kontakte oss ved hjelp av fax, e-post, telefon eller møte opp ved våre lokaler.
		</p>
	</article>	

	<article class="newsArticle">
		<h3>Siste nytt</h3>
		<?php
		$news= simplexml_load_file('resources/news.xml');
	
		foreach($news->children() as $article) {
			echo '<strong>' . $article->heading . '</strong>';
			foreach ($article->body->children() as $paragraph) {
				echo '<p>' . $paragraph . '</p>';
				break;
			}
			break;
	  	}
		
		?>
		
		<p>
			<a href="news.php">Les mer på våre nyhetssider</a>
		</p>
	</article>
	


	</section>
	
	<?php include 'resources/footer.html';?>
</body>
</html>