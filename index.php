<?php 

require 'blog.php';
use Blog\DB;

// fetch all the posts
$posts = Blog\DB\get('posts', $conn);

view('index', array(
		'posts' => $posts
));