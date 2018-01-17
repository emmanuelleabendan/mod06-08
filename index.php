<?php

require_once 'assets/lib/twelve_days.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	
	<title><?php echo getTitle(); ?> Lyrics</title>


	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	

</head>
<body>

	<div class="wrapper">
		<h1>12 Days of Christmas</h1>
	
		<?php
			echo getLyrics();
		?>
	
	
		<button id="hide">Hide Previous Stanza</button>
		<button id="show">Show Next Stanza</button>
	</div>



<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>