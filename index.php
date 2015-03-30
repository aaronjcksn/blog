<?php 

require 'functions.php';
use Blog\DB;

// connect to db
$conn = DB\connect($config);

if ( !$conn ) die('Problem connecting to the db.');

// fetch all the posts
$posts = DB\get('posts', $conn);

// filter through and display on page
include 'index.view.php';