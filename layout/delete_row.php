<?php

$db_tol = new database();
$qry_db = "select sum(product_price_sale ), max(order_number), count(order_number) from products, orders where products.product_code = orders.product_code";

$unfach_data = $db_tol->select($qry_db);
$fcah = $unfach_data->fetch_assoc();


$total_cash = $fcah['sum(product_price_sale )'];
$order_numb = $fcah['max(order_number)'];
$quantity = $fcah['count(order_number)'];
//$//usr_na = $_SESSION['usrnm'];
$total_cash = round($total_cash);





// echo $usr_na."    ";
	
	 $qry_log = "INSERT INTO sales(order_number, sales_quantity, sales_revenue) VALUES ('$order_numb', '$quantity', '$total_cash')";

	 $db_tol->insert($qry_log);

	 


	 // $qry = "(select product_code, count(order_number)  from products, orders where products.product_code = orders.product_code GROUP BY products.product_code";


	// $db_qry = "select * from orders";

	//  $ress = $db_tol->select($db_qry);

	//  while($anss = $ress->fetch_assoc()){
	//  	$prod_co =$anss['product_code'];
	//  	$db_qry = "update products set quantity = (quantity - 1) where product_code = '$prod_co'";
	//  }

?>