<?php

include 'config/db_config.php';

    $login_db = new database();
    $prd_code = $_POST['pp_code'];
    $query = "select * from products where product_code = '$prd_code' order by quantity";
      $post = $login_db->select($query);



      if($post){
      	$result = $post->fetch_assoc();
      		}


?>

<?php 
include'layout/header.php';
 ?>




<div class="row" style="padding-top: 180px;">
	<div class="col-sm-2"></div>
	<div class="col-sm-4">

		<h2>Edit Product</h2>
	<?php
		if($post){
			?>
		<form  action="product_edit_config.php" method="get">
		<label for="usr">Product Code:</label>
		<input type="text" name="pr_code" class="form-control" id="submit"  value=<?php  echo $result['product_code'];?>>
		<br>
		<label for="usr">Product Name/Model:</label>
		<input type="text" name="pr_name" class="form-control" id="submit" value=<?php  echo $result['product_name'];?>>
		<br>
		<label for="usr">Product Type:</label>
		<input type="text" name="pr_type" class="form-control" id="submit" value=<?php  echo $result['product_type'];?>>
		<br>
		<label for="usr">Product Brand:</label>
	  	<input type="text" name="pr_brand" class="form-control" id="submit" value=<?php  echo $result['product_brand'];?>>
		<br>
	  	<label for="usr">Product Quantity:</label>
	  	<input type="text" name="pr_quan" class="form-control" id="submit" value=<?php  echo $result['quantity'];?>>
		<br>
	  	<label for="usr">Product Per Cost:</label>
	  	<input type="text" name="pr_cost" class="form-control" id="submit" value=<?php  echo $result['product_price_buy'];?>>
		<br>
	  	<label for="usr">Product Per Price:</label>
	  	<input type="text"  name="pr_price" class="form-control" id="submit" value=<?php  echo $result['product_price_sale'];?>>
			<div class="row" style="padding-top: 30px;">
			<button type="submit" style="float:right; " class="btn btn-info" name="delete_button" value="Update" ><i style="font-size:18px;" class="fa">&#xf05d;</i> Update</button>
			<button type="submit" class="btn btn-warning" style="float:left; " name="delete_button" value="Delete" ><i style="font-size:18px" class="fa">&#xf05c;</i> Delete</button>

				<!-- <button id="Cancel" name="action"  value="delete" style="float: left;" class="btn btn-success"> <i style="font-size:18px" class="fa">&#xf05c;</i> Delete</button>
				<button id="btn_submit" type="submit" style="float: right;" class="btn btn-success"> <i style="font-size:18px" class="fa">&#xf058;</i> Update</button> -->
			</div>
		</form>

	  	<?php
	  			
	  	 }
	  	else{
	  	?>
	  	<div class="container" style="padding-top: 30px;">
	  		<label>No product found for product code: </label> <text><?php  echo $prd_code;?></text>
	  		<meta http-equiv="refresh" content="1;url=products.php" />
	  	</div>
	  	<?php }?>
	</div>
</div>


 <footer style="padding-top: 30px;">
        <div class="row" style="background: silver;">
          <div class="col-sm-12"  style="padding-top: 2px;">
             <p style="font-size:15px; text-align: center; ">&copy;<font face="Times New Roman"> <b>Copyright 2018 by Frndzz IT</b></font></p> 
          </div>
        </div>
        </div>
        <div class="col-sm-1">
        </div>
 </footer>