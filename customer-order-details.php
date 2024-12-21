		<?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Customer Order Details</h1>

            	<table border="1">
                <tr>
                  <th>Order ID</th>
                  <th>Customer ID</th>
                  <th>Item ID</th>
                  <th>Category ID</th>
                  <th>Number of Items</th>
                  <th>Order Date</th>
                  <th>Edit</th>
                </tr>

              <?php
                $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                $sql = mysqli_query($conn, "SELECT * FROM `order_tbl`");

                while($data = mysqli_fetch_array($sql)){
                	$order_id = $data['order_id']; 
                  echo "<tr>";
                  	echo "<td>".$order_id."</td>";
                    echo "<td>".$data['customer_id']."</td>";
                    echo "<td>".$data['item_id']."</td>";
                    echo "<td>".$data['category_id']."</td>";
                    echo "<td>".$data['number_of_items']."</td>";
                    echo "<td>".$data['order_date']."</td>";
                    echo "<td><a href='process/delete-order.php?order_id=$order_id'>Delete</a></td>";
                  echo "</tr>";
                }
                      
              ?>
            </table>
            
        		  
        	</div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>