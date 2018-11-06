

<center><h2>Recent Bills</h2></center>

<style>


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

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  


  <div class="panel panel-default" style="border-radius: 10px;">
    <div class="panel-heading" style="border-radius: 10px; font-weight: bold;">Orders</div>
    <div class="panel-body" style="border-radius: 10px;">
      
<table id="tab_list">
<thead>
  <tr>
    <th>Order Number</th>
    <th>Seller</th>
    <th>Quantity</th>
    <th>Time</th>
    <th>Total Price</th>
  </tr>
</thead>

<tbody>
    <!-- php my sql quary for searching products -->

     <?php 
   //  include '/config/db_config.php';
  $db_sales = new database();

  $p_query = "select * from sales order by order_number desc";

  $unfeched_data = $db_sales->select($p_query);
  if($unfeched_data)
  while($produ_list = $unfeched_data->fetch_assoc()){
      ?>
                <tr>
                    <td><?php echo $produ_list['order_number'];?></td>
                    <td>admin</td>
                    <td><?php echo $produ_list['sales_quantity'];?></td>
                    <td><?php echo $produ_list['sales_time'];?></td>
                    <td><?php echo $produ_list['sales_revenue'];?></td>
                    
               </tr>
      <?php
  }
?>
  </tbody> 
</table>
</div>
</div>




    
<script src="http://code.jquery.com/jquery-3.2.1.min.js"
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
                        "targets": 0,
                        "searchable": true,
                        "visible": true
                    }
                ],
                "order": [[2, "desc"]]
        });
    });
</script>
    </script>


      <!-- table of billing products -->


    </div>
  </div>



<script type="text/javascript" src="dataTables/js/datatables.min.js"></script>
