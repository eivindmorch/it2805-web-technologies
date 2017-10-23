<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Storgata Legekontor | Ansatte</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<?php include 'resources/header.html';?>
	<?php include 'resources/nav.php';?>
	<section>
	
	<aside>
	<ul>
	<?php 
	//Employee nav
	$emp = $_GET['emp']; //Get variable from url
	$emps = glob('employees/*.{html}', GLOB_BRACE); //List all .html files in the employees/ folder
	
	foreach ($emps as $temp) { //For each file listed
		$temp = substr($temp, strpos($temp, '/')+1); //Strip the folder from the filename
		$title = substr($temp, 0, strpos($temp, '.')); //Strip the .html from the filename
		if ($title == 'default') continue; //Skip the default message
		if ($emp == $title) {echo '<li>' . ucfirst($title) . '</li>';} //If this is the current page, print it as text.
		else echo '<li><a href="?emp=' . $title . '">' . ucfirst($title) . '</a></li>'; //Else genereate link to the page
	}
	//End Employee nav
	?>
	</ul>
	</aside>
	
	<article class="notAside">
	<?php 
	if (in_array('employees/' . $emp . '.html', $emps)) { //If the current url exists in the filelist
		include 'employees/' . $emp . '.html'; //Add the text from the file
	}
	else include 'employees/default.html'; //Else show default message
	?>
	
	</article>
	</section>
	
	<?php include 'resources/footer.html';?>
</body>
</html>