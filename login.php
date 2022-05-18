<?php
	$error = false;
	if(isset($_REQUEST['login'])){
	    $username=preg_replace('/[^A-Za-z]/','',$_REQUEST['uname']);
	    $password=($_REQUEST['psw']);
	    if(file_exists('users/'.$username.'.xml')){
	        $xml=new SimpleXMLElement('users/'.$username.'.xml',0,true);
	        if($password==$xml->password){
    		session_start();
			$_SESSION['username']=$username;
			header('Location: myprofile.php');
			die;


		}
		
	}
	$error = true;


}
?>

<!DOCTYPE html PUBLIC"-// W3C // DTD XHTML 1.0 Transitional // EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Log-In</title>
	<style>

	</style>
</head>
<style>
	.checks {
		margin-left: 43%;
	}
</style>

<link rel="stylesheet" href="stylee.css">
<body>

	<div class="containerLogin">
		<h1>Login</h1>
		<form action="" method="post">

		  	<div class="login-username">
			    <label for="uname"><b>Username</b></label> <br>
			    <input type="text" placeholder="Enter Username" name="uname" required><br>
		    </div>
		    <div class="login-password">
			    <label for="psw"><b>Password</b></label> <br>
			    <input type="password" placeholder="Enter Password" name="psw" required><br>
		    </div>
		    <div class="checks">
		        <input type="checkbox" checked="checked" name="remember"> Remember me <br>
		    </div>
			  <div class="login-btn">
			  	<input type="submit" style="color: black;" value="Login" name="login"><br>
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