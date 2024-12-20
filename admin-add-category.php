		<?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Add Category</h1>

            	<script>
					function confirm(){
						var category_name = document.getElementById('category_name').value;
						var category_code = document.getElementById('category_code').value;
						var category_details = document.getElementById('category_details').value;
						
						if(category_name !== null && category_name !== '' && category_code !== null && category_code !== '' && category_details !== null && category_details !== ''){
							alert("Category added Successfully.");
						}
						
						
					}
				</script>

            	<form method="post" action="process/admin-add-category-process.php" onclick="return confirm()">
            		<table>
            			<tr>
            				<td>Category Name: *</td>
            				<td><input type="text" name="category_name" id="category_name" required="required"></td>
            			</tr>
						<tr>
            				<td>Category Code: *</td>
            				<td><input type="text" name="category_code" id="category_code" required="required"></td>
            			</tr>
            			<tr>
            				<td>Category Details: *</td>
            				<td><input type="text" name="category_details" id="category_details" required="required"></td>
            			</tr>
            			<tr>
            				<td></td>
            				<td><input type="submit" name="submit" id="submit"></td>
            			</tr>
            		</table>
            	</form>

            	<h2>List of Categories</h2>
            	<table border="1">
                <tr>
                  <th>Category ID</th>
                  <th>Category Name</th>
				  <th>Category Code</th>
                  <th>Category Details</th>
                  <th>Edit</th>
                </tr>

              <?php
                $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                $sql = mysqli_query($conn, "SELECT * FROM `category`");

                while($data = mysqli_fetch_array($sql)){
                	$category_id = $data['category_id']; 
                  echo "<tr>";
                  	echo "<td>".$category_id."</td>";
                    echo "<td>".$data['category_name']."</td>";
					echo "<td>".$data['category_code']."</td>";
                    echo "<td>".$data['category_details']."</td>";
                    echo "<td><a href='process/admin-delete-category.php?category_id=$category_id'>Delete</a></td>";
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