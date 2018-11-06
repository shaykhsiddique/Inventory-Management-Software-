
<center><h2>Stock Details</h2></center>

  <style> 
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

table {
    /*font-family: arial, sans-serif;*/
    border-collapse: collapse;
    width: 90%;
    background: white;
    border-radius: 10px;
}

td, th {
	font-family: "courier";
    border: 1px solid #dddddd;
    text-align: center;
    font-size: 12px;
    height: 40px;
    padding: 8px;

}


tr:nth-child(even) {
    background-color: #f2f2f2;
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  


 
    	<!-- table of billing products -->

<table id="tab_list">
<thead>
  <tr>
    <th>Product Code</th>
    <th>Product Name/Model</th>
    <th>Product Type</th>
    <th>Product Brand</th>
    <th>Product Cost</th>
    <th>Product Price</th>
    <th>Product Quantity</th>
  </tr>
</thead>
<tbody>
    <!-- php my sql quary for searching products -->

     <?php 
     include '/config/db_config.php';
  $db_sales = new database();

  $p_query = "select * from products order by quantity";

  $unfeched_data = $db_sales->select($p_query);
  if($unfeched_data)
  while($produ_list = $unfeched_data->fetch_assoc()){
      ?>
                <tr>
                    <td><?php echo $produ_list['product_code'];?></td>
                    <td><?php echo $produ_list['product_name'];?></td>
                    <td><?php echo $produ_list['product_type'];?></td>
                    <td><?php echo $produ_list['product_brand'];?></td>
                    <td><?php echo $produ_list['product_price_buy'];?></td>
                    <td><?php echo $produ_list['product_price_sale'];?></td>
                    <td><?php echo $produ_list['quantity'];?></td>
                    
               </tr>
      <?php
  }

?>
  </tbody>  
</table>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>

		
<script
            src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="js/vendor/jquery.sortelements.js" type="text/javascript"></script>
<script src="js/jquery.bdt.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready( function () {
        $("#tab_list").bdt({
             "ordering": true,
                "searching": true,
                "paging": true,
                "columnDefs": [
                    {
                        "targets": 1,
                        "searchable": true,
                        "visible": true
                    }
                ],
                "order": [[2, "desc"]]
        });
    });
</script>
   


    	<!-- table of billing products -->






<!-- pop up menu start -->
  

<!-- pop up menu end -->


<script type="text/javascript" src="dataTables/js/datatables.min.js"></script>






<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("btn_edit");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
	
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>