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
		// Comparison Operators
		// == Equal, === Identical, != NotEqual, <> Nto Equal, !== Not Identical
		// > Greater than, < Less than, >= Greater than or equal to, <= Less than or equal to

		$num1 = 10;
		$num2 = 2;

		$real_or_not = $num1 == $num2;
		echo "<h1> $real_or_not </h1>";
		?>
	</div>
</body>

</html>

<?php
// Comparison Operators
// == Equal, === Identical, != NotEqual, <> Nto Equal, !== Not Identical
// > Greater than, < Less than, >= Greater than or equal to, <= Less than or equal to

$num1 = 10;
$num2 = 2;

$real_or_not = $num1 > $num2;
echo "<h1>$real_or_not</h1>";
?>
