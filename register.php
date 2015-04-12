<?php
require('includes/header.php');
require('includes/navbar.php');
?>

<div class="container">
	<div class="registerFields">
		<input type="text" name="username" id="usernameReg" placeholder="User Name" ><br/>
		<input type="password" name="password" id="passwordReg" placeholder="Password"><br/>
		<input type="password" name="password" id="fnameReg" placeholder="First Name"><br/>
		<input type="password" name="password" id="lnameReg" placeholder="Last Name"><br/>
		<input type="password" name="password" id="emailReg" placeholder="Email"><br/>

		<input type="submit" id="submitReg" value="Register"><br/>
		<input type="submit" id="cancelReg" value="Cancel"><br/>
	</div>

</div>
<script> var controls = new controls() </script>
<?php
require('includes/footer.php');
?>