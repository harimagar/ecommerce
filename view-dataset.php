<?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Dataset for Recommendation System</h1>

                <form action="process/download-dataset-process.php" method="post">
                    <button type="submit">Click to Download Dataset</button>
                </form>

            	<table border="1">
                <tr>
                    <th>event_time</th>
                    <th>order_id</th>
                    <th>product_id</th>
                    <th>category_id</th>
                    <th>category_code</th>
                    <th>brand</th>
                    <th>price</th>
                    <th>user_id</th>
                </tr>


            <?php
                $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                $sql = mysqli_query($conn, "SELECT o.order_date, o.order_id, o.item_id, o.category_id, c.category_code, i.brand, i.item_price, o.customer_id FROM order_tbl o, item i, category c where i.item_id = o.item_id and o.category_id = c.category_id;");

                while($data = mysqli_fetch_array($sql)){
                	$order_id = $data['order_id']; 
                  echo "<tr>";
                  
                    echo "<td>".$data['order_date']."</td>";
                  	echo "<td>".$order_id."</td>";
                    echo "<td>".$data['item_id']."</td>";
                    echo "<td>".$data['category_id']."</td>";
                    echo "<td>".$data['category_code']."</td>";
                    echo "<td>".$data['brand']."</td>";
                    echo "<td>".$data['item_price']."</td>";
                    echo "<td>".$data['customer_id']."</td>";
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