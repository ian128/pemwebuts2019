<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Sign Up</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,300,700" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="signup.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="wrapper">
  		<div class="card card-register">
			<h2 data-type="header" class="title">Sign Up
			</h2>
			
			<form class="register-form" name="form" onsubmit="validateForm()" action="#">

				<!--First Name Date-->
				<label>First Name</label>
	  			<input type="text" class="form-control" name="FirstName" id="FirstName" required/>

				<!--Last Name Date-->
				<label>Last Name</label>
	  			<input type="text" class="form-control" name="LastName" id="LastName" required/>

				<!--Username-->
	  			<label>Username</label>
	  			<input placeholder="Username" type="text" class="form-control" name="userName" id="userName" required />

				<!--Place of birth-->
				<label>Place of Birth</label>
	  			<input placeholder="Birthplace" type="text" class="form-control" name="BirthPlace" id="BirthPlace" required />


	  			<!--Birth Date-->
	  			<label>Birth Date</label>
	  			<input type="date" class="form-control" name="birthDate" id="birthDate" required/>
				  

	  			<!--Sex-->
	  			<div>
		  			<label>Sex : </label>

					<!--Sex male-->
					<input type="radio" name="sex" id="checkboxM" value="male" name="sexMale" required/>
					<label class="radio-inline">Male</label>
					

					<!--Sex Female-->
					<input type="radio" name="sex" id="checkboxF" value="female" name="sexFemale" required/>
					<label class="radio-inline"> Female </label>
					
	  			</div>

	  			<!--Email-->
	  			<label>Email</label>
	  			<input placeholder="Email" type="text" class="form-control" name="email" id="email" required/>

	  			<!--Password-->
	  			<label>Password</label>
	  			<input placeholder="Password" type="password" class="form-control" name="pass" id="pass" required/>
				
				<!--Phone-->
				<label>Phone</label>
	  			<input placeholder="Phone" type="text" class="form-control" name="Phone" id="Phone" required/>

	  			<label>Sudah Punya akun?</label>
	  			<a href="login.php"><b><u>Login</u></b></a>

	  			<!--Button btn btn-block btn-round -->
			  	<div>
					<button type="submit" class="btn btn-block btn-round">Register</button>
	  			</div>
			</form>
  		</div>
	</div>
<script>
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

		if (username != "" && birthDate!="" && sex !="" && email !="" && pass !=") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>
</body>
</html>

