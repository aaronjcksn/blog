<h1>Create New Post</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="title">Title: </label>
			<input type="text" name="title" id="title">
		</li>
		<li>
			<label for="body">Body: </label>
			<textarea name="body" id="body" cols="30" rows="10"></textarea>
		</li>
		<li>
			<input type="submit" value="Create Post">
		</li>
	</ul>

	<?php if ( isset($status) ) : ?>
		<p><?= $status; ?></p>
	<?php endif; ?>
</form>