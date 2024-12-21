		<?php
			session_start();
			
		?>
		<?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Customer Shipping Address</h1>
            	<h2>Please confirm order by filling the form.</h2>
        		<p>** Please note you can only edit Number of Items in the following form.</p>

        		<?php 
        			$item_id = $_GET['item_id'];
					$category_id = $_GET['category_id'];
        			$customer_id = $_SESSION['customer_id'];
        		?>

        		<script>
					function confirm(){
						var number_of_items = document.getElementById('number_of_items').value;
						
						if(number_of_items !== null && number_of_items !== ''){
							alert("Item has been listed as Ordered Successfully.");
						}
						
					}
				</script>

        		<form method="post" action="process/order-process.php" onsubmit="return confirm()">
        			<table>
        				<tr>
        					<td>Customer ID: *</td>
        					<td><input type="text" name="customer_id" id="customer_id" value="<?php echo $customer_id; ?>" required="required" readonly></td>
        				</tr>
        				<tr>
        					<td>Item ID: *</td>
        					<td><input type="text" name="item_id" id="item_id" value="<?php echo $item_id; ?>" required="required" readonly></td>
        				</tr>
						<tr>
        					<td>Category ID: *</td>
        					<td><input type="text" name="category_id" id="category_id" value="<?php echo $category_id; ?>" required="required" readonly></td>
        				</tr>
        				<tr>
        					<td>Number of Items: *</td>
        					<td><input type="number" name="number_of_items" id="number_of_items" value="1" required="required"></td>
        				</tr>
        				<tr>
        					<td>Purchase Date: *</td>
        					<td><input type="text" name="order_date" id="order_date" value="<?php echo date("Y-m-d h:i:s"); ?>" required="required" readonly></td>
        				</tr>
        				<tr>
        					<td></td>
        					<td><input type="submit" name="submit" id="submit"></td>
        				</tr>
        			</table>
        		</form>

        		<p></p>  
        	</div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>