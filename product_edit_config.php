<?php
include 'config/db_config.php';
$db_delete = new database();
						$pr_code = $_GET['pr_code'];
					    $pr_name = $_GET['pr_name'];
					    $pr_type = $_GET['pr_type'];
					    $pr_brand = $_GET['pr_brand'];
					    $pr_quantity = $_GET['pr_quan'];
					    $pr_cost = $_GET['pr_cost'];
					    $pr_price = $_GET['pr_price'];
					    $btn = $_GET['delete_button'];

					    if($btn=="Update"){

						$up_qurey = "update products SET product_name='$pr_name', product_type = '$pr_type', product_brand = '$pr_brand', quantity = '$pr_quantity',  	product_price_buy = '$pr_cost', product_price_sale = '$pr_price'  WHERE product_code ='$pr_code'";
						$db_delete->update_rec($up_qurey);
					   // echo '<meta http-equiv="refresh" content="0;url=products.php" />';
					}else if($btn=="Delete"){
						$del_query = "delete from products where product_code='$pr_code' ";
						$db_delete->delete_rec($del_query);
					}

					?>