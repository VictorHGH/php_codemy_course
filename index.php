<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Codemy_course</title>
	<link href="css/style.css" rel="stylesheet">
</head>

<body bgcolor="#f3f3f3">
	<div style="display: grid; place-items: center; margin-top: 30px;">
		<?php
		// Associative Arrays and loop through them
		$fav_color = [
			"Victor" => "Green",
			"Juan" => "Blue",
			"Pedro" => "Red",
			"Maria" => "Yellow",
			"Ana" => "Pink"
		];

		foreach ($fav_color as $key => $value) {
			echo "The favorite color of $key is $value <br>";
		}
		?>

	</div>
</body>

</html>
