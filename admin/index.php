<?php

require '../blog.php'; 
$data = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$title = $_POST['title'];
	$body = $_POST['body'];

	if ( empty($title) || empty($body) ) {
		$data['status'] = 'Please fill out both inputs.';
	} else {
		// create new row in the table
		Blog\DB\query("INSERT INTO posts(title, body) VALUES (:title, :body)", 
			array('title' => $title, 'body' => $body), 
			$conn);

			$data['status'] = "Row has been interted successfully.";

			}
	}

view('admin/create', $data);