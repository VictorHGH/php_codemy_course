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

		// Assignment Operators
		// =, +=, -=, *=, /=, %=, **=

		$num = 10;

		echo "<h1 style='margin-bottom: 5px'> Num 1: $num</h1>";

		echo "Num 1 += 10: " . $num += 10;
		echo "<br/>";

		echo "Num 1 -= 5: " . $num -= 5;
		echo "<br/>";

		echo "Num 1 *= 2: " . $num *= 2;
		echo "<br/>";

		echo "Num 1 /= 3: " . $num /= 3;
		echo "<br/>";

		echo "Num 1 **= 2: " . $num **= 2;
		echo "<br/>";

		echo "Num 1 %= 2: " . $num %= 2;
		echo "<br/>";
		?>
	</div>
</body>

</html>

<?php
echo "Hola mundo";
?>
