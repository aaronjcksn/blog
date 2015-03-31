<?php

require 'functions.php';
use Blog\DB;

// connect to db
$conn = DB\connect($config);

if ( !$conn ) die('Problem connecting to the db.');

// fetch all the posts
$post = DB\query('SELECT * FROM posts WHERE id = :id LIMIT 1', 
	array('id' => $_GET['id']), 
	$conn)[0];

if ( $post ) {
	$post = $post[0];
	// filter through and display on page
	$view_path = 'views/single.view.php';
	include 'views/layout.php';	
} else {
	header('location:/');
}