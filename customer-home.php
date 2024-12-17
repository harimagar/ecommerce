		<?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Welcome to Customer Home</h1>
            	<h2>Select an item to Purchase</h2>

            	<p>
                
                <?php
                    
                      $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                      $sql = mysqli_query($conn, "SELECT * FROM `item`");

                      while($data = mysqli_fetch_array($sql)){
                      	$item_id = $data['item_id'];
                        $category_id = $data['category_id'];
                        $item_name = $data['item_name'];
                        $item_price = $data['item_price'];
                        $item_details = $data['item_details'];
                        $item_image = $data['item_image'];
                ?>
                <div class="items">
                  <img src="images/items/<?php echo $item_image; ?>" />
                  <p class="buy"><center><a href="customer-purchase.php?item_id=<?php echo $item_id; ?>"><button>BUY</button></a></center></p>
                  <p>Item ID: <?php echo $item_id; ?></p>
                  <p>Item Name: <?php echo $item_name; ?></p>
                  <p>Category ID: <?php echo $category_id; ?> </p>
                  <p>Item Price: <?php echo $item_price; ?></p>
                  <p><?php echo $item_details; ?></p>
                </div>

                <?php } ?>

                
              </p>
            
        		  
        	</div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>