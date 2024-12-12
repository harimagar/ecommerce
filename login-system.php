		<?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Login as Customer</h1>

            	<form method="post" action="process/login.php">
            		<table>
            			<tr>
            				<td>Customer Username: *</td>
            				<td><input type="text" name="customer_username" id="customer_username" value="Hari" required="required"></td>
            			</tr>
            			<tr>
            				<td>Customer Password: *</td>
            				<td><input type="password" name="customer_password" id="customer_password" value="hari@123" required="required"></td>
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