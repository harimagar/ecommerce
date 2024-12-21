<?php
	include('../database.php');
?>
<?php
		$customer_id = $_POST['customer_id'];
		$item_id = $_POST['item_id'];
		$category_id = $_POST['category_id'];
		$number_of_items = $_POST['number_of_items'];
		$order_date = $_POST['order_date'];

		$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
		mysqli_query($conn, "INSERT INTO `order_tbl` (`customer_id`, `item_id`, `category_id`, `number_of_items`, `order_date`) VALUES ('".$customer_id."', '".$item_id."', '".$category_id."', '".$number_of_items."', '".$order_date."');");
		
		header("Location: ../customer-home.php");
		
?>