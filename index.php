<?php

declare(strict_types=1);

include("variables.php")

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<?php require_once("navbar.php") ?>
	<div class="container">

		<?php if (!empty($_POST)): ?>
			<h1 class="name">Hello there, <?php echo htmlspecialchars($_POST["name"]) ?>!</h1>
			<form class="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
				Name: <input type="text" name="name" />
				<br>
				<br>
				<input type="submit" class="btn btn-secondary">
			</form>
		<?php else: ?>
			<h1>Hello ")</h1>
			<form class="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
				Name: <input type="text" name="name" />
				<br>
				<br>
				<input type="submit" class="btn btn-secondary">
			</form>
		<?php endif; ?>


		<p>Copyright (c) <?php echo $my_name; ?> - All Rights Reserved</p>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<style>
	* {
		font-family: Arial, sans-serif;
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	h1 {
		margin-top: 20px;
		text-align: center;
	}

	.name {
		margin-top: 20px;
		text-align: center;
	}

	.myForm {
		margin-top: 20px;
		text-align: center;
	}

	p {
		margin-top: 100px;
		text-align: center;
		font-size: 0.8rem;
	}
</style>

</html>
