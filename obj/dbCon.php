<?php

	$servename = "localhost";
	$username = "root";
	$password = "";
	$dbname = "concert_app";

	$conn = new mysqli($servename, $username, $password, $dbname);

	if($conn->connect_error) {
		die("Connection failed:" . $conn->connect_error);
	}