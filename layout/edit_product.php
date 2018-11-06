
	<div class="col-sm-5 " style=" padding-left: 35px;">
		<form id ="insertform"  action="edit_config.php" method="post" >
			<label for="usr">Product Code:</label>
		  	<input type="text" class="form-control" name ="pp_code" id ="pp_code" required>
						<br>

			<div style="float: right;">
				<button id="btn_submit"  type="submit" class="btn btn-success"> <i style="font-size:24px" class="fa">&#xf058;</i> Add Product</button>
			</div>
		</form>
		
	</div>
<!-- <?php

?> -->

<!-- <div class="row" >
<div class="col-sm-4" style="padding-left: 50px;">
	<label for="usr">Product Code:</label>
		  	<text id="p_code" > </text>
			
					<br>
			<label for="usr">Product Name/Model:</label>
		  	<text id="p_name" > </text>
		  			<br>
			<label for="usr">Product Type:</label>
		  	<text id="p_type" > </text>
				<br>
		  	<label for="usr">Product Brand:</label>
		  	<text id="p_brand" > </text>
			<br>
		  	<label for="usr">Product Quantity:</label>
		  	<text id="p_quantity" > </text>
			<br>
		  	<label for="usr">Product Per Cost:</label>
		  	<text id="p_cost" > </text>
			<br>
		  	<label for="usr">Product Per Price:</label>
		  	<text id="p_price" > </text>

</div>
</div>




$('#insertform').submit(function(){
	return false;
});
$('#btn_submit').click(function(){

	var pp_code = $('#pp_code')	

	$.post('edit_config.php', {pp_code:pp_code}, function(data){

		('$result').html(data);
	});

	// $.post(		
	// 	$('#insertform').attr('action'),
	// 	$('#insertform :input').serializeArray(),
	// 	function(result){
	// 		alert(data);
	// 	// var value = $(this).val();
	// 	$("#result").text(data);
			
	// 	}
	// );
});
</script> -->