		<?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Register as Customer</h1>

            	<script>
					function passwordRetypeCheck(){
						var customer_password = document.getElementById('customer_password').value;
						var repassword = document.getElementById('repassword').value;
						
						if(customer_password!=repassword){
							alert("Password and Retype Password does not match!!!");
							return false;
						}else{
							alert("User Registered Successfully.")
						}
						
					}
				</script>

            	<form method="post" action="process/register.php" onsubmit="return passwordRetypeCheck()">
            		<table>
            			<tr>
            				<td>Customer Name: *</td>
            				<td><input type="text" name="customer_name" id="customer_name" required="required"></td>
            			</tr>
            			<tr>
            				<td>Customer Username: *</td>
            				<td><input type="text" name="customer_username" id="customer_username" required="required"></td>
            			</tr>
            			<tr>
            				<td>Password: *</td>
            				<td><input type="password" name="customer_password" id="customer_password" required="required"></td>
            			</tr>
            			<tr>
            				<td>Retype Password: *</td>
            				<td><input type="password" name="repassword" id="repassword" required="required"></td>
            			</tr>
            			<tr>
            				<td>Customer Email: *</td>
            				<td><input type="email" name="customer_email" id="customer_email" required="required"></td>
            			</tr>
            			<tr>
            				<td>Customer Phone: *</td>
            				<td><input type="text" name="customer_phone" id="customer_phone" required="required"></td>
            			</tr>
            			<tr>
            				<td></td>
            				<td><input type="submit" name="submit" id="submit"></td>
            			</tr>
            		</table>
            	</form>
        	</div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>