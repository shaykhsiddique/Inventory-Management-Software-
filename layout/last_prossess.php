<?php
	include("$_SERVER[DOCUMENT_ROOT]/config/db_config.php");
	
	//$bd_clear->insert($query_copy);
	$bd_clear = new database();
	$query_copy = "INSERT into billings SELECT * FROM orders";

	  $bd_clear->insert($query_copy);
	
	require "$_SERVER[DOCUMENT_ROOT]/layout/delete_row.php";

	
?>

