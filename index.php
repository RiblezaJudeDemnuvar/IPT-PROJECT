<?php
 //  session_start();

	// $url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

	// if (isset($_REQUEST['btn1']) ===true) {
	// 	if ($_REQUEST['email'] == "jude") {
	// 		echo "jude";
	// 	}
	// }
  if(isset($_REQUEST['Enters'])){
      $xml=new DOMDocument("1.0","UTF-8");
      $xml->load("data.xml");
     $rootTag=$xml->getElementsByTagName("user")->item(0);
      $dataTag=$xml->createElement("data");
      $usernameTag=$xml->createElement("username",$_REQUEST['username']);
      $passwordTag=$xml->createElement("password",$_REQUEST['password']);
      $dataTag->appendChild($usernameTag);
      $dataTag->appendChild($passwordTag); 
     $rootTag->appendChild($dataTag);
     $xml->save("data.xml");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>\</title>
	
</head>
<link rel="stylesheet" href="stylee.css">
<body>
	<form action="index.php" method="POST">
  <div class="containerIndex">
  	<h3>	</h3>
  	<h2>WELCOME!</h2>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>

    <div class="form-email">
	    <label for="email"><b>Email</b></label>  <br>
	    <input type="text" placeholder="Enter Email" name="username" id="username" required> <br>
    </div>

    <div class="pass1">
	    <label for="psw"><b>Password</b></label>  <br>
	    <input type="password" placeholder="Enter Password" name="password" id="password" required>  <br>
    </div>

<!--     <div class="pass1">
	    <label for="psw-repeat"><b>Confirm Password</b></label> <br>
	    <input type="password" placeholder="Confirm Password" name="psw-repeat" id="psw-repeat" required>
    </div> -->
    <div class="button1">
    	<button type="submit" style="color: black;" name="Enters" >Register</button>
    </div>
    </div>
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>

    <div class="box">
    
  	</div>

  <div class="container signin">
    
  </div>

  <div class="terms">
  	  <p>By creating an account you agree to our <a href="terms.php">Terms & Privacy</a>.</p>
  </div>


</form>

</body>
</html>