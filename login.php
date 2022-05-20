<?php
	// $name = "jason";
	
	 //echo"<pre>";print_r($xml_parse);echo"</pre>";
	SESSION_START();
	$url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	
	$fullname = "Jude Demnuvar L. Ribleza";

	if (isset($_REQUEST['login'])) {
		$xml=file_get_contents('data.xml');
		$xml_parse=simplexml_load_string($xml);
		foreach($xml_parse as$k=>$v){
		$uname = $v->username;
		$pass = $v->password;
		//$fullname = $v->username->fullname;

			if ($_REQUEST['uname'] != $uname) {
				header("Location: ".$url_add."?notexist");
			}
			elseif ($_REQUEST['uname']== $uname && $_REQUEST['psw'] != $pass) {
				header("Location: ".$url_add."?wrongpass");
			}
			elseif ($_REQUEST['uname']== $uname && $_REQUEST['psw'] == $pass) {
			header("Location: ".$url_add."?success");

				$_SESSION['username'] = $_REQUEST['uname'] != $uname ;
				$_SESSION['fullname'] = $fullname;
			
		}
			
	}

	 
	
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
	.tyek {
		margin-left: 43%;
	}

</style>

<link rel="stylesheet" href="styles.css">
<body>

	<div class="containerLogin">
		<h1>Login</h1>
		<form action="dashboard.php" method="post">

		<?php 
			if (isset($_REQUEST['notexist']) ===true) {
				echo "<div class='alert alert-danger' role='alert'>Username does not exist... </div>";
			}
			elseif (isset($_REQUEST['wrongpass']) ===true) {
				echo "<div class='alert alert-warning' role='alert'>Incorrect Password... </div>";
			}
			elseif (isset($_REQUEST['success']) ===true) {
				echo "<div class='alert alert-success' role='alert'>Redirecting... </div>";
				header("Refresh: 3; url='dashboard.php'");
			}
			elseif (isset($_REQUEST['logout'])===true) {
				echo "<script> alert('Successfully Logout!'); </script>";
			}
			elseif (isset($_REQUEST['logfirst'])) {
				echo "<div class='alert alert-info' role='alert'>Please Log-In First!!! </div>";
			}
			elseif (isset($_SESSION['ses_username'])===true) {
				echo "<div class='alert alert-warning' role='alert'>Please Logout First,<a href='dashboard.php'> click hare </a> </div>";
			}
		      				
		?>

		  	<div class="login-username">
			    <label for="uname"><b>Username</b></label> <br>
			    <input type="text" placeholder="Enter Username" name="uname" required><br>
		    </div>
		    <div class="login-password">
			    <label for="psw"><b>Password</b></label> <br>
			    <input type="password" placeholder="Enter Password" name="psw" required><br>
		    </div>
		    <div class="tyek">
		        <input type="checkbox" checked="checked" name="remember"> Remember me <br>
		    </div>
			  <div class="login-btn">
			  	<input type="submit" style="color: black;" value="Login" name="login"><br>
			  </div>
		  <div class="cancel">
		    <button type="button" class="cancelbtn"><a href="index.php">Sign-up?</a></button>
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