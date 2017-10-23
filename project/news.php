<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Storgata Legekontor | Nyheter</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<?php include 'resources/header.html';?>
	<?php include 'resources/nav.php';?>
	<section>
	<?php
	$news= simplexml_load_file('resources/news.xml');

	foreach($news->children() as $article) {
		echo '<article class="newsArticle"> <h3>' . $article->heading . '</h3>';
		foreach ($article->body->children() as $paragraph) {
			echo '<p>' . $paragraph . '</p>';
		}
		echo '</article>';
  	}?>
	</section>
	
	<?php include 'resources/footer.html';?>
</body>
</html>