<?php
	$host 		= "localhost";
	$username 	= "wenlly";
	$password 	= "12345678";
	$db_name 	= "play";

	$link = new mysqli($host, $username, $password, $db_name);
	@mysqli_set_charset($link,"utf8mb4");
