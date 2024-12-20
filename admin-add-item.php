		<?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Add ECommerce Item</h1>

            	<script>
					function confirm(){
						var item_name = document.getElementById('item_name').value;
						var brand = document.getElementById('brand').value;
						var item_price = document.getElementById('item_price').value;
						var item_details = document.getElementById('item_details').value;
						var item_image = document.getElementById('item_image').value;
						
						if(item_name !== null && item_name !== '' && brand !== null && brand !== ''  && item_price !== null && item_price !== '' && item_details !== null && item_details !== '' && item_image !== null && item_image !== ''){
							alert("Item added Successfully.");
						}
						
						
					}
				</script>

            	<form method="post" action="process/admin-add-item-process.php" onclick="return confirm()">
            		<table>
            			<tr>
            				<td>Category ID: *</td>
            				<td><select name="category_id" id="category_id">
            					
            						<?php
						                $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
						                $sql = mysqli_query($conn, "SELECT * FROM `category`");

						                while($data = mysqli_fetch_array($sql)){
						                	$id = $data['category_id'];
						                ?>
						                <option value="<?php echo $id; ?>"><?php echo $id; ?></option>
						                <?php
						                }
						                      
						              ?>
            					</option>
            				</select></td>
            			</tr>
            			<tr>
            				<td>Item Name: *</td>
            				<td><input type="text" name="item_name" id="item_name" required="required"></td>
            			</tr>
						<tr>
            				<td>Brand: *</td>
            				<td><input type="text" name="brand" id="brand" required="required"></td>
            			</tr>
            			<tr>
            				<td>Item Price: *</td>
            				<td><input type="number" name="item_price" id="item_price" required="required"></td>
            			</tr>
            			<tr>
            				<td>Item Details: *</td>
            				<td><input type="text" name="item_details" id="item_details" required="required"></td>
            			</tr>
            			<tr>
            				<td>Item Image Name: *</td>
            				<td><input type="text" name="item_image" id="item_image" required="required"></td>
            			</tr>
            			<tr>
            				<td></td>
            				<td><input type="submit" name="submit" id="submit"></td>
            			</tr>
            		</table>
            	</form>

            	<h2>List of ECommerce Items</h2>
            	<table border="1">
                <tr>
                  <th>Item ID</th>
                  <th>Category</th>
                  <th>Item Name</th>
				  <th>Brand Name</th>
                  <th>Item Price</th>
                  <th>Item Details</th>
                  <th>Item Image Name</th>
                  <th>Edit</th>
                </tr>

              <?php
                $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                $sql = mysqli_query($conn, "SELECT * FROM `item`");

                while($data = mysqli_fetch_array($sql)){
                	$item_id = $data['item_id']; 
                  echo "<tr>";
                  	echo "<td>".$item_id."</td>";
                    echo "<td>".$data['category_id']."</td>";
                    echo "<td>".$data['item_name']."</td>";
					echo "<td>".$data['brand']."</td>";
                    echo "<td>".$data['item_price']."</td>";
                    echo "<td>".$data['item_details']."</td>";
                    echo "<td>".$data['item_image']."</td>";
                    echo "<td><a href='process/admin-delete-item.php?item_id=$item_id'>Delete</a></td>";
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