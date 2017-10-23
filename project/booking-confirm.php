<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Storgata Legekontor | Timebestilling på nett</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<?php 
	/* Unused in the final product, as the folk.ntnu.no servers did not give permission to create and edit local files*/
	/* Source: http://davidwalsh.name/watch-post-save-php-post-data-xml */
	/* print the contents of a url */
	function print_r_xml($arr,$wrapper = 'data',$cycle = 1)
	{
		//useful vars
		$new_line = "\n";
	
		//start building content
		if($cycle == 1) { $output = '<?xml version="1.0" encoding="UTF-8" ?>'.$new_line; }
		$output.= tabify($cycle - 1).'<'.$wrapper.'>'.$new_line;
		foreach($arr as $key => $val)
		{
			if(!is_array($val))
			{
				$output.= tabify($cycle).'<'.htmlspecialchars($key).'>'.$val.'</'.htmlspecialchars($key).'>'.$new_line;
			}
			else
			{
				$output.= print_r_xml($val,$key,$cycle + 1).$new_line;
			}
		}
		$output.= tabify($cycle - 1).'</'.$wrapper.'>';
	
		//return the value
		return $output;
	}
	
	/* tabify */
	function tabify($num_tabs)
	{
		for($x = 1; $x <= $num_tabs; $x++) { $return.= "\t"; }
		return $return;
	}
	/* End Source: http://davidwalsh.name/watch-post-save-php-post-data-xml */
	?>
	<?php include 'resources/header.html';?>
	<?php include 'resources/nav.php';?>
	<section>
	<h2>Takk for din bestilling</h2>
	<article>
	Din bestilling er registrert, <?php echo $_POST["name"]?>.<br>
	Du vil få bekreftelse eller svar via sms på nummer <?php echo $_POST["phone"]?> så raskt som mulig.<br>
	
	</article>
	</section>
	
	<?php include 'resources/footer.html';?>
</body>
</html>