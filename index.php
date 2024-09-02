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

		// Funtion
		function greetings(string $first_name = "John", string $last_name = "Doe") {
			echo "Hello There!, $first_name $last_name";
		}

		greetings("Tim", "Smith");
		?>

	</div>
</body>

</html>
