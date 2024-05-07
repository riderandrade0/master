<?php
	$conn = new mysqli('localhost', 'root', '', 'base_csv');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>