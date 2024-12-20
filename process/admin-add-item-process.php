<?php
		$category_id = $_POST['category_id'];
		$item_name = $_POST['item_name'];
		$brand = $_POST['brand'];
		$item_price = $_POST['item_price'];
		$item_details = $_POST['item_details'];
		$item_image = $_POST['item_image'];

		$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
		mysqli_query($conn, "INSERT INTO `item` (`category_id`, `item_name`, `brand`, `item_price`, `item_details`, `item_image`) VALUES ('".$category_id."', '".$item_name."', '".$brand."', '".$item_price."', '".$item_details."', '".$item_image."');");
		
		header("Location: ../admin-add-item.php");
?>