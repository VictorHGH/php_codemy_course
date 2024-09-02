<?php

declare(strict_types=1);

include("variables.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Codemy_course</title>
</head>

<body bgcolor="#f3f3f3">
	<?php require_once("navbar.php") ?>
	<div style="display: grid; place-items: center; margin-top: 30px;">
		<?php
			echo $site_title
		?>
	</div>
</body>

</html>
