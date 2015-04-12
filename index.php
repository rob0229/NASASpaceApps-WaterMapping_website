<?php
require('includes/header.php');
require('includes/navbar.php');
?>

<div class="container">
	<div class="loginDiv">
		<input type="text" name="username" id="username" placeholder="User Name" ><br/>
		<input type="password" name="password" id="password" placeholder="Password"><br/>
		<input type="submit" id="loginBtn" value="Login"><br/>
		<input type="submit" id="registerBtn" value="Register"><br/>
	</div>
	<div id="map-canvas"></div>
</div>
<script> var controls = new controls() </script>
<?php
require('includes/footer.php');
?>