<?php 

      include("$_SERVER[DOCUMENT_ROOT]/config/db_config.php");

      $db_add_bill = new database();
      if($_GET['search']){
           
            
            $pro_cod =$_GET['search'];
            $bill_search_query = "select * from products where product_code = '$pro_cod'";
            $search_result = $db_add_bill->select($bill_search_query);
            if($search_result){
              $src_reslt = $search_result->fetch_assoc();
                //echo "$src_reslt['product_name']";

                // save data temporary to database
                $oder_db = new database();
                  $max_order = "select max(order_number) from sales";
                  $max_unfr = $oder_db->select($max_order);
                  $max_order_num = $max_unfr->fetch_assoc();
                  $order_num = $max_order_num['max(order_number)']+1;

                $db_order = new database();
                $add_order = "INSERT INTO orders(order_number, product_code) VALUES ('$order_num', '$pro_cod')";
                  $resu= $db_order->insert_src($add_order);
              ?>
              <text id="lol" ><?php  echo $src_reslt['product_name'];?></text><?php

            }else{
              echo "No product found....";
            }

    }

    //header("Location: /index.php");

?>


