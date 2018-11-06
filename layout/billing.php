
  <h4>Cash Register</h4>
  
  <style> 
input[type=text] {
    width: 300px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    max-width: 500px;
    border-radius: 10px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 18px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}

table {
    /*font-family: arial, sans-serif;*/
    border-collapse: collapse;
    width: 100%;
    border-radius: 10px;
}

td, th {
	font-family: "courier";
    border: 1px solid #dddddd;
    text-align: center;
    font-size: 16px;
    height: 40px;
    padding: 8px;

}


tr:nth-child(even) {
    background-color: #f2f2f2;
}

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 11; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <?php
//$_GET['search'] = '0';
?> -->


 <span>Product Code/Name: </span>
  <form method="get" action="layout/billing_products.php" >
        <input type="text" name="search" id="serch" placeholder="Search..">
        <button type="submit" id="lets_search" class="btn">Search</button>
</form>

<!-- <text id="lol" >jjjsak</text>
 -->



<script>
	$(function() {
        $("#lets_search").bind('submit',function() {
          var value = $('#serch').val();
           $.post('db_query.php',{value:value}, function(data){
             $("#search_results").html(data);
           });
           return false;
        });
      });
</script>

<?php 
  include("$_SERVER[DOCUMENT_ROOT]/config/db_config.php");

  $oder_db = new database();
  $max_order = "select max(order_number) from sales";
  $max_unfr = $oder_db->select($max_order);
  $max_order_num = $max_unfr->fetch_assoc();
  $order_num = $max_order_num['max(order_number)']+1;
 ?>




<div class="panel panel-default" style="border-radius: 10px; margin-top: 30px;">
    <div class="panel-heading" style="border-radius: 10px; font-weight: bold;">Order Number: <?php echo $order_num?></div>
    <div class="panel-body" style="border-radius: 10px;">
      <!-- table of billing products -->

    <table>
  <tr style="margin-top: 10px;">
    <th>Product Code</th>
    <th>Product Name/Model</th>
    <th>Price(Rate)</th>
    <th>Quantity</th>
    <!-- <th>Sub Total</th> -->
    <th>Action</th>
  </tr>
  <?php
  $order_show = new database();
  $temp_order_query = "select * from orders natural join products";
    $resl_unfech = $order_show->select($temp_order_query);
    $total_price = 0;
  if($resl_unfech){
   
    while($result_fach = $resl_unfech->fetch_assoc()){

        $total_price+=(float) $result_fach['product_price_sale'];
        ?>
        <tr>
          <td><text><?php  echo $result_fach['product_code'];?></text></td>
          <td><text><?php  echo $result_fach['product_name'];?></text></td>
          <td><text><?php  echo $result_fach['product_price_sale'];?></text></td>
          <td><!-- <select class="form-control" id="sel1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
              </select> -->
              <text>1</text>
          </td>

    <td><a href="/layout/remove_from_cart.php?delete=<?php  echo $result_fach['product_code'];?>" type="button" class="btn btn-warning">Remove</a></td>
  </tr>
        <?php
       }
     }else{
      echo '<text style ="padding:10px; font-size:20px; color:red;">The Cart is empty</text>';
     }
?>
</table>

      <!-- table of billing products -->


    </div>
  </div>

<div class="row" style="padding-top: 50px;">
  <div class="panel panel-default">
      <div class="panel-heading">
        <a data-toggle="collapse"  style="font-weight: bold;">Total Amount</a>
      
      </div>
      <div  class="panel-collapse ">
        <div class="panel-body" style="font-weight:bold;">Total Price:<text style='float: right; padding-right: 10px;'> <?php  echo $total_price;?> &nbsp; &nbsp; Taka<text></div>
        
      </div>
    </div>
  </div>

  <div >

        <form method="post" action="/layout/make_print_bill.php">
            <label>Customer Name: </label>
            <br>
              <input type="text" name="cust_name">
              <br>
              <br>
            <label>Phone Number: </label>
            <br>
              <input type="text" name="cust_phone" placeholder="01xxxxxxxxxxx">
              
  <button  id="myBtn" type="submit" style="float: right; border-radius: 5px; font-weight: bold;" class="btn btn-info " disabled>Payment</button>

      </form>
</div>

<script>
  $(document).ready(function(){
    var total = <?php echo $total_price;?>

        if(total>0){
            $('#myBtn').removeAttr('disabled');
        
    }
});
</script>