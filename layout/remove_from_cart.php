<?php 
	include("$_SERVER[DOCUMENT_ROOT]/config/db_config.php");

	$pro_code = $_GET['delete'];
	$db_det = new database();
	$qry = "delete from orders where product_code = '$pro_code' LIMIT 1";

	$db_det->delete_rec($qry);

?>
