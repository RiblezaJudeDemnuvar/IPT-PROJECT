<!DOCTYPE html>
<html>
<head>
	<title>Log-In</title>
	<style>

	</style>
</head>
<link rel="stylesheet" href="style.css">
<body>

	<div class="containerLogin">
		<h1>Login</h1>
		<form action="action_page.php" method="post">

		  	<div class="login-username">
			    <label for="uname"><b>Username</b></label> <br>
			    <input type="text" placeholder="Enter Username" name="uname" required><br>
		    </div>
		    <div class="login-password">
			    <label for="psw"><b>Password</b></label> <br>
			    <input type="password" placeholder="Enter Password" name="psw" required><br>
		    </div>
		    <div class="check">
		        <input type="checkbox" checked="checked" name="remember"> Remember me <br>
		    </div>
			  <div class="login-btn">
			  	<button type="submit" style="color: black;">Login</button><br>
			  </div>
		  <div class="cancel">
		    <button type="button" class="cancelbtn"><a href="index.php">Back</a></button>
		    <span class="psw">Forgot <a href="#">password?</a></span>
	  	</div>

	  	<div class="termLogin">
  	  <p>By creating an account you agree to our <a href="terms.php">Terms & Privacy</a>.</p>
  </div>

		</form>
		<div class="login-box">
    
  	</div>
</div>
</body>
</html>