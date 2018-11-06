<?php
    include '/config/db_config.php';
    $db_add_product = new database();

    $pr_code = $_POST['p_code'];
    $pr_name = $_POST['p_name'];
    $pr_type = $_POST['p_type'];
    $pr_brand = $_POST['p_brand'];
    $pr_quantity = $_POST['p_quantity'];
    $pr_cost = $_POST['p_cost'];
    $pr_price = $_POST['p_price'];

   $add_prod_quary = "INSERT INTO products( product_code, product_name, product_brand, product_price_sale, product_price_buy, product_type, quantity) VALUES ('$pr_code','$pr_name','$pr_brand','$pr_price','$pr_cost','$pr_type','$pr_quantity')";

    $db_add_product->insert($add_prod_quary);
    ?>