

<!DOCTYPE html>
<html>
<head>
	<title>Billing Print</title>
<style>
	@page {
   size: 7in 9.25in;
   margin: 27mm 16mm 27mm 16mm;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<style>
	
	tr, th{
		float: center;
		text-align: center;
	}
</style>
</head>

<?php  
include("$_SERVER[DOCUMENT_ROOT]/config/db_config.php");

$order_bd = new database();

$bill_query = "select * from orders natural join products";
$qry_ord = "select max(order_number) from sales";

$unfech_num = $order_bd->select($qry_ord);
$fech_num = $unfech_num->fetch_assoc();
$order_num = $fech_num['max(order_number)']+1;

$unfech_bill =  $order_bd->select($bill_query);

?>

<body style="padding: 30px; font-family: Courier; font-size: 15px">
<center><h1 style="font-size: 50px; font-weight: bold;">Ratul Motors</h1>
	<p style="font-weight: bold;">
	 Phone: +8801979000020
	 <br>Masdair, Isdair,
	<br> Narayanganj, Dhaka.
	</p>
</center>
<hr>
<div class="container" style="border:1px solid silver; background: #E8E8E8">
	<br>
<label>Customer Name: </label>
<text style="margin-left: 30px; "><?php echo $_POST['cust_name'];?></text>
<text style="float: right;"> <?php echo date("d-m-Y");?></text>
<label style="float: right;">Date:  </label>
<br>
<label>Customer phone: </label>
<text style="padding-left: 20px;"><?php echo $_POST['cust_phone'];?></text>
<br>
<label>Order No: </label>
<text style="padding-left: 20px;">#<?php echo $order_num;?></text>
</div>
<div class="container" style="border:1px solid silver;">
            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Product Brand</th>
        <th>Price(BDT)</th>
      </tr>
    </thead>
    <tbody>
    <?php
    		if($unfech_bill){
    			$total_money = 0;
    			while ($billing_arr = $unfech_bill->fetch_assoc()) {
    				# code...
    				$total_money+= $billing_arr['product_price_sale'];
    				?>
							<tr>
					        <td><?php echo "#".$billing_arr['product_code']; ?></td>
					        <td><?php echo $billing_arr['product_name']; ?></td>
					        <td><?php echo $billing_arr['product_brand']; ?></td>
					        <td><text style="float: right; margin-right:20px;"><?php echo $billing_arr['product_price_sale']; ?></text></td>
					      </tr>
    				<?php
    			}
    		}

    ?>
      
      <tr>
      	<td></td>
		<td></td>
		<td><hr><text style="font-weight: bold;"> Total:</text> </td>
		<td><hr><text style="float: right; margin-right:20px; font-weight: bold;"><?php echo round($total_money) ?>.00/-</text></td>
      </tr>
    </tbody>
  </table>

</div>
<div class="container">
	<label>Total Amount(In Word): </label>
	<?php
  	$fm = new NumberFormatter("en", NumberFormatter::SPELLOUT);
  	echo ucwords($fm->format((int)$total_money))." Taka only.";
  ?>
</div>

<div class="container" style="padding-top: 55px;">
		<div class="row">
			<label style=" border-top: 1px solid black;">Received By</label>
			<label style=" float: right; border-top: 1px solid black;">Authorized By</label>
		</div>
	
</div>
 
 <div class="container" style="background: #dddddd; padding: 10px; margin-top: 20px; border-radius: 5px;">
 	
	<label style="float: left;">Software Developed By: ABC Software LTD.</label>
	<label style="float: right;">Contact: +8801521306492</label>
</div>

</body>
</html>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {

	var answer = confirm("Are You Sure to Save and Print?")
		if (answer) {
		    //some code
		    window.print();
		    window.location = "/layout/last_prossess.php";


		}
		else {
		    //some code
		    window.location = "/";
		}
    
});
</script>
