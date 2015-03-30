<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
</head>
<body>
	<h1>The Blog</h1>
	<?php foreach($posts as $post ) : ?>
		<article>
			<h2><?= $post['title']; ?></h2>
			<div class="body">
				<?= $post['body']; ?>
			</div>
		</article>

	<?php endforeach; ?>
</body>
</html>