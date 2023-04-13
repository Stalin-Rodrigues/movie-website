<?php
  if(isset($_POST['submit'])){
	  $email = $_POST['email'];
	  $password = $_POST['password'];
	  
	  $host = 'localhost';
	  $user = 'root';
	  $pass = '';
	  $dbname = 'test1';
	  
	  $conn = mysqli_connect($host,$user,$pass,$dbname);
	  
	  $sql = "INSERT INTO users(email,password) values ('$email','$password')";
	  mysqli_query($conn,$sql);
	  
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<style>
*{
	padding: 0;
	margin: 0;
}
body{
	background: url(black.JPG);
	height: 100%;
	background-size: cover;
	align-items: center;
	justify-content: center;
	display: flex;
	font-family: sans-serif;
	background-repeat: no-repeat;
}

.container{
	position: relative;
	margin-top: 100px;
	width: 450px;
	height: auto;
	background: black;
      opacity: 0.5;
	border-radius: 5px;
}
.label{
	padding: 20px 130px;
	font-size: 35px;
	font-weight: bold;
	color: white;
}
.login_form{
	padding: 20px 40px;
}
.login_form .font{
	font-size: 18px;
	color: white;
	margin: 5px 0;
}
.login_form input{
	height: 40px;
	width: 350px;
	padding: 0 5px;
	font-size: 18px;
	outline: none;
	border: 1px solid silver;
}
.login_form .font2{
	margin-top: 30px;
}
.login_form button{
	margin: 45px 0 30px 0;
	height: 45px;
	width: 365px;
	font-size: 20px;
	color: white;
	outline: none;
	cursor: pointer;
	font-weight: bold;
	background: #1A237E;
	border-radius: 3px;
	border: 1px solid #3949AB;
	transition: .5s;
}
.login_form button:hover{
	background: #151c6a;
}
.login_form #email_error,
.login_form #pass_error{
	margin-top: 5px;
	width: 345px;
	font-size: 18px;
	color: #C62828;
	background: rgba(255,0,0,0.1);
	text-align: center;
	padding: 5px 8px;
	border-radius: 3px;
	border: 1px solid #EF9A9A;
	display: none;
}
 /* Media query for devices with max width of 1200px (typical mobile devices) */
    @media only screen and (max-width: 1200px) {
      /* Styles for mobile devices */
      body {
        width: 100%;
        height: 100vh;
        object-fit: cover;
      }
    }
    
    /* Media query for devices with max width of 767px (typical mobile devices) */
    @media only screen and (max-width: 767px) {
      /* Styles for mobile devices */
      body {
        width: 100%;
        height: 100vh;
        object-fit: cover;
      }
    }
</style>
</head>
<body>
	
	<div class="container">
		<h1 class="label">Sign In</h1>
		<form class="login_form" method="post" name="form" onsubmit="return validated()">
			<div class="font">Email</div>
			<input autocomplete="off" type="text" name="email">
			<div id="email_error">Please fill up your Email</div>
			<div class="font font2">Password</div>
			<input type="password" name="password">
			<div id="pass_error">Please fill up your Password</div>
			<button type="submit" name="submit">Sign In</button>
		</form>
	</div>
	<script src="valid.js"></script>
</body>
</html>