
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
  			<h2>Orders</h2>
  				<div style="padding-top: 20px;">
  
				    <a data-toggle="tab" href="#home">

				    	<button style="margin: 5px; width: 150px;" type="button" class="btn btn-success">  Billing <span class="glyphicon">&#xe040;</span></button>
				    </a>
				   <br><br>
				    <a data-toggle="tab" href="#menu1"><button style="margin: 5px; width: 150px;" type="button" class="btn btn-success"> Recent Bills  <span class="glyphicon">&#xe042;</span> </button></a>
				   
				    
	 			 </div>

		</div>
    </div>
    <div class="col-sm-8" style="background-color:white; border-radius: 10px; margin-left: 20px; padding-bottom: 30px;">
		      <div class="tab-content">
		    <div id="home" class="tab-pane fade in active">
		      <h3 style="text-align: center; font-weight:bold; color:#1d01b7;">Billing</h3>
		      <p>
		      	<?php 
		      		include('/layout/billing.php');
		      	?>
		      </p>
		    </div>
		    <div id="menu1" class="tab-pane fade">
		    
		      <?php 
		      		include('/layout/recent_bills.php');
		      	?>
		      </div>
		    
		    
		  </div>
		    </div>
    <div class="col-sm-1">
    	
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