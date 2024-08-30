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
		// Arrays and loop through them
		$name = "Jeff";
		$friends = ["Victor", "Juan", "Pedro", "Maria", "Ana", $name];

		############
		# for loop #
		############
		echo "<br>";
		for ($i = 0; $i < count($friends); $i++) {
			echo $i + 1 . ". $friends[$i]<br>";
		}

		################
		# Foreach loop #
		################
		echo "<br>";
		$i = 1;
		foreach ($friends as $friend) {
			echo $i . ". $friend<br>";
			$i++;
		}

		##############
		# While loop #
		##############
		echo "<br>";
		$i = 0;
		while ($i < count($friends)) {
			echo $i + 1 . ". $friends[$i]<br>";
			$i++;
		}

		################
		# Reverse loop #
		################
		echo "<br>";
		$i = count($friends) - 1;
		while ($i >= 0) {
			echo $i + 1 . ". $friends[$i]<br>";
			$i--;
		}
		?>

	</div>
</body>

</html>
