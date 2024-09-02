<?php

declare(strict_types=1);

?>

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
		// FizzBuzz
		// Write a program that prints the numbers from 1 to 100.
		for ($i = 1; $i <= 100; $i++) {
			if ($i % 5 == 0 and $i % 3 == 0) {
				echo "$i. FizzBuzz<br/>";
			} elseif ($i % 3 == 0) {
				echo "$i. Fizz<br/>";
			} elseif ($i % 5 == 0) {
				echo "$i. Buzz<br/>";
			} else {
				echo "$i.<br/>";
			}
		}
		?>

	</div>
</body>

</html>
