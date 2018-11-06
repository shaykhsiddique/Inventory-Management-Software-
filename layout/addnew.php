<style>
	input:invalid {
		border:1px solid red;
  /*background-color: red;*/
}
input:valid {
		border:1px solid green;
  /*background-color: red;*/
}

</style>


	<div class="col-sm-5 " style=" padding-left: 35px;">
		<form id ="insertform"  action="new_add.php" method="post" >
			<label for="usr">Product Code:</label>
		  	<input type="text" class="form-control" name ="p_code" id ="p_code" required>
			<br>
			<label for="usr">Product Name/Model:</label>
		  	<input type="text" class="form-control" name ="p_name" id ="p_name" required>
			<br>
			<label for="usr">Product Type:</label>
		  	<input type="text" class="form-control" name ="p_type" id ="p_type" required>
			<br>
		  	<label for="usr">Product Brand:</label>
		  	<input type="text" class="form-control" name ="p_brand" id ="p_brand">
			<br>
		  	<label for="usr">Product Quantity:</label>
		  	<input type="number" min="1"  value="1"  class="form-control" name ="p_quantity" id ="p_quantity" required>
			<br>
		  	<label for="usr">Product Per Cost:</label>
		  	<input type="number" min="1" value="0.00"step="any" type="text" class="form-control" name ="p_cost" id ="p_cost">
			<br>
		  	<label for="usr">Product Per Price:</label>
		  	<input type="number" min="1" value="0.00" step="any" type="text" class="form-control" name ="p_price" id ="p_price">
			<br>

			<div style="float: right;">
				<button id="btn_submit" type="submit" class="btn btn-success"> <i style="font-size:24px" class="fa">&#xf058;</i> Add Product</button>
			</div>
		</form>
	</div>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>



$('#insertform').submit(function(){
	return false;
});
$('#btn_submit').click(function(){

	


	$.post(		
		$('#insertform').attr('action'),
		$('#insertform :input').serializeArray(),
		function(result){
			//alert("successfullt addes");
		
			
		}
	);
});
</script> -->



	<!-- <script>
		//on the click of the submit button 
$("#btn_submit").click(function(){
 //get the form values
 var p_code = $('#p_code').val();     

 var p_name = $('#p_name').val();     
 var p_type = $('#p_type').val(); 
 var p_brand = $('#p_brand').val(); 
 var p_quantity = $('#p_quantity').val(); 
 var p_cost = $('#p_cost').val(); 
 var p_price = $('#p_price').val(); 

 // //make the postdata
 var postData = 'p_code='+p_code+'&p_name='+p_name+'&p_type='+p_type+'&p_brand='+p_brand+'&p_quantity='+p_quantity +'&p_cost='+p_cost +'&p_price='+p_price;

 // //call your input.php script in the background, when it returns it will call the success function if the request was successful or the error one if there was an issue (like a 404, 500 or any other error status)

 $.ajax({
    url : "/new_add.php",
    type: "POST",
    data : postData,
    success: function(data,status, xhr)
    {
        //if success then just output the text to the status div then clear the form inputs to prepare for new data
        $("#status_text").html(data);
        $('#p_name').val('');
        $('#p_brand').val('');
    },
    error: function (jqXHR, status, errorThrown)
    {
        //if fail show error and server status
        $("#status_text").html('there was an error ' + errorThrown + ' with status ' + textStatus);
    }
 alert(postData);
});
	</script> -->