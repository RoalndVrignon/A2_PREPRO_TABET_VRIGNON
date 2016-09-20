<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="CSS/style.css">
</head>
<body>

	<?php

		include ('tableau.php');

		$id = $_GET['id'];

		echo '<div class="texte">';  
		echo $axe[$id]["nom"].'<br/>'.$axe[$id]["description"].'<br/>';

		echo '<img src="'.$axe[$id]['img'].'">'

		?>

</body>
</html>