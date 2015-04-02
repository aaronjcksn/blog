<?php 

require 'blog.php';
use Blog\DB;

// fetch all the posts
$posts = DB\get('posts', $conn);

// filter through and display on page
$view_path = 'views/index.view.php';
include 'views/layout.php';