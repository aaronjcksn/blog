<?php

require 'blog.php';
use Blog\DB;

// fetch all the posts
$post = DB\query('SELECT * FROM posts WHERE id = :id LIMIT 1', 
	array('id' => $_GET['id']), 
	$conn)[0];

if ( $post ) {
	$post = $post;
	// filter through and display on page
	$view_path = 'views/single.view.php';
	include 'views/layout.php';	
} else {
	header('location:/');
}