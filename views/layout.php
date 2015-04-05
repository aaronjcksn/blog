<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Blog</title>
	<style>
	.container { width: 600px; margin: 0 auto; }
	form ul { padding: 0; }
	form li { list-style: none; }
	form input, form textarea { margin-bottom: 1.5em; width: 100%; }
	form textarea { width: 100%; height: 350px; }
	label { display: block; }
	</style>
</head>
<body>
	<div class="container">
		<?php include ($path); ?>
	</div>
</body>
</html>