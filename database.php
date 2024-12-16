<?php
		$host = "localhost";
		$username = "root";
		$password = "";
		
			$conn = mysqli_connect($host,$username,$password) or die ("could not connect" .mysqli_error());
			if(!mysqli_select_db($conn, "ecommerce_db"))
			{
				header("Location: setup.php");
				exit();
			}
			//mysql_select_db("ecommerce_db") or die("database doesnot exist");
			
?>