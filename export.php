<?php
	require_once 'conn.php';
	
	header('Content-Type: text/csv; charset=UTF-8');
	header('Content-Disposition: attachment; filename=data.csv');
	
	$output = fopen("php://output", "w");
	fputcsv($output, array('emp_id', 'firstname', 'lastname', 'address', 'age', 'job'));
	$query = $conn->query("SELECT * FROM `employee` ORDER BY `lastname` ASC");
	while($fetch = $query->fetch_assoc()){
		fputcsv($output, $fetch);
	}
	
	fclose($output);
?>