<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Sign Up</title>

	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="signup.css">
	<link rel="icon" type="image/png" href="../login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../login/css/main.css">
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w card card-register" action="../../controller.php" method="post">
					<span class="login100-form-title p-b-51">
						Sign Up
					</span>
					<a href="../login" align="center">Have an account? Login</a>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "First Name is required">
						<input class="input100" type="text" name="firstName" placeholder="First Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Last Name is required">
						<input class="input100" type="text" name="lastName" placeholder="Last Name">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "username is required">
						<input class="input100" type="text" name="userName" placeholder="username">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Birth Place is required">
						<input class="input100" type="text" name="birthPlace" placeholder="Birth Place">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Birth Date is required">
						<input class="input100" type="date" name="birthDate" id="birthDate" placeholder="Birth Date">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" >
						<div class="container">

							<!-- <input class="input100" type="radio" name="BirthPlace" placeholder="Birth Place">
						<span class="focus-input100"></span> -->
						<label>Sex : </label>

							<!-- Sex male -->
							<div class="row">
								<div class="col-md-6 col-sm-6 col-6">
									<center>
										<h6 class="radio-inline">Male</h6>
										<input type="radio" name="sex" id="checkboxM" value="male" name="sexMale" required/>
									</center>
								</div>
							

							<!-- Sex Female -->
								<div class="col-md-6 col-sm-6 col-6">
									<center>
									<h6 class="radio-inline"> Female </h6>
										<input type="radio" name="sex" id="checkboxF" value="female" name="sexFemale" required/>	
									</center>
								
								</div>
							
							</div>
						</div>					
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "City is required">
						<input class="input100" type="text" name="city" placeholder="City">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Phone is required">
						<input class="input100" type="text" name="phone" placeholder="Phone">
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn m-t-17">
						<button id="login" type="submit" name="signUp" class="login100-form-btn">Sign Up</button>
					</div>

				</form>
			</div>
		</div>
	</div>	
<script src="../login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../login/js/main.js"></script>
<script>
	$(document).ready(()=>{
		$("input[name='userName']").keyup(()=>{
			let selector = $("input[name='userName']");
			let value = selector.val()
			if(value.length > 10){
				selector.val(value.slice(0,10));
			}
		})
	})
	function validateForm() {
		var username = document.getElementById("username").value;
		var birthDate = document.getElementById("birthDate").value;

		var sex;
		if (sex == "male"){
			sex = document.getElementById("checkboxM").value;
		} else {
			sex = document.getElementById("checkboxF").value;
		}

		var email = document.getElementById("email").value;
		var pass = document.getElementById("pass").value;

		if (username != "" && birthDate!="" && sex !="" && email !="" && pass !="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>

</body>
</html>

