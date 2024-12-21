<?php
	$order_id = $_GET['order_id'];
	$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
    mysqli_query($conn, "DELETE FROM `order_tbl` WHERE order_id = ".$order_id);

    
	header('Location: ../customer-order-details.php');
?>