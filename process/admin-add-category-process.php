<?php
	include('database.php');
?>
<?php
		$category_name = $_POST['category_name'];
		$category_code = $_POST['category_code'];
		$category_details = $_POST['category_details'];

		$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
		mysqli_query($conn, "INSERT INTO `category` (`category_name`, `category_code`, `category_details`) VALUES ('".$category_name."', '".$category_code."', '".$category_details."');");
		
		header("Location: ../admin-add-category.php");
?>