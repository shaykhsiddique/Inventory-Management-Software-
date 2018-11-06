
<?php 
session_start();

if (!isset($_SESSION['usrnm'])) {
  header('location: login.php');
}else{
	//header file loaded
	// include('/layout/header.php');

	//print username
	
	
	?>

<?php }
include('/layout/header.php');

 ?>	





 
 <div class="container-fluid" style="padding-top: 180px;">

  <div class="row">
    <div class="col-sm-3" style="background-color:lavender;  border-radius: 10px; padding-bottom: 30px;">
      <div class="container">
  			<h2>Stocks</h2>
  				<div style="padding-top: 20px;">
  
				    <a data-toggle="tab" href="#home">
				    	<button style="margin: 5px; width: 150px;" type="button" class="btn btn-success">Add New</button>
				    </a>
				   <br><br>
				    <a data-toggle="tab" href="#menu1"><button style="margin: 5px; width: 150px;" type="button" class="btn btn-success">Stock Details</button></a>

				    <br><br>
				    <a data-toggle="tab" href="#edt_prod"><button style="margin: 5px; width: 150px;" type="button" class="btn btn-success">Edit Stock</button></a>
				   
				    
	 			 </div>

		</div>
    </div>
    <div class="col-sm-8" >
		      <div class="tab-content">
		    <div id="home" class="tab-pane fade in active">
		      <h3 style="text-align: center; font-weight:bold; color:#1d01b7;">Add New Product</h3>
		      <p>
		      	<?php 
		      		 include('/layout/addnew.php');
		      	?>
		      </p>
		    </div>
		    <div id="menu1" class="tab-pane fade">
		    
		      <?php 

		      		include('/layout/stock_details.php');
		      	?>
		      </div>
		    <div id="edt_prod" class="tab-pane fade">
		    <h3 style="text-align: center; font-weight:bold; color:#1d01b7; padding-bottom: 20px;">Edit Product</h3>
		      <?php 

		      		include('/layout/edit_product.php');
		      	?>
		      </div>
		    
		  </div>
		    </div>
   
  </div>
</div>
<style>
	.footer {
   
  
   width: 100%;
   background-color: silver;
   color: white;
   height: 60px;
   text-align: center;
}
</style>



<!-- <?php 
// include('/layout/header.php');
 ?>
 -->


 </body>
 <footer>
        <div class="row" style="background: silver;">
          <div class="col-sm-12"  style="padding-top: 2px;">
             <p style="font-size:15px; text-align: center; ">&copy;<font face="Times New Roman"> <b>Copyright 2018 by Frndzz IT</b></font></p> 
          </div>
        </div>
        </div>
        <div class="col-sm-1">
        </div>
 </footer>
</html>