<?php

require 'functions.php';
use Blog\DB;

// connect to db
$conn = DB\connect($config);

if ( !$conn ) die('Problem connecting to the db.');

// fetch all the posts
$posts = DB\query('SELECT * FROM posts WHERE id = :id', 
	array('id' => $_GET['id']), 
	$conn);

print_r($posts);	