<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Codemy_course</title>
	<link href="css/style.css" rel="stylesheet">
</head>

<body bgcolor="#f3f3f3">
	<div style="display: grid; place-items: center;">
		<?php
		// If, Else, Elseif
		$first_name = "John";
		$age = 22;

		if ($first_name === "John") {
			echo "Hello $first_name";
		} elseif ($first_name == "Sally") {
			echo "Hello $first_name";
		} else {
			echo "Hello User";
		}
		?>
	</div>
</body>

</html>
