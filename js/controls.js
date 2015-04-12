function controls(){
	
	this.loadPage = function(){
		var _self = this;
		_self.properties();

	}

	$('#loginBtn').on("click", function(){
		console.log("loginBTn Clicked");

		//do login script and redirect here
		window.location="admin.php";
	});

	$('#registerBtn').on("click", function(){
		console.log("registerBtn Clicked");

		//do login script and redirect here
		window.location="register.php";
	});


	$('#submitReg').on("click", function(){
		console.log("submitReg Clicked");

		//do login script and redirect here
		window.location="index.php";

	});

	$('#submitReg').on("click", function(){
		console.log("submitReg Clicked");

		//do login script and redirect here
		window.location="index.php";

	});


	$('#cancelReg').on("click", function(){
		console.log("cancelReg Clicked");

		//do login script and redirect here
		window.location="index.php";

	});


	

	$('.logoutBtn').on("click", function(){
		console.log("logout Clicked");

		//do login script and redirect here
		window.location="index.php";

	});

	this.properties = function(){
		var _self = this;

	}

this.loadPage();
} 