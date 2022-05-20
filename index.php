<?php
 //  session_start();

	// $url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

	// if (isset($_REQUEST['btn1']) ===true) {
	// 	if ($_REQUEST['email'] == "jude") {
	// 		echo "jude";
	// 	}
	// }
  
  
      $xml=file_get_contents('data.xml');
      $xml_parse=simplexml_load_string($xml);
      foreach($xml_parse as$k=>$v){
      $uname = $v->username;
      $pass = $v->password;
  if(isset($_REQUEST['Enters'])){
      

        if ($_REQUEST['username'] == $uname) {
          echo "Already Exist!!";
            
          }
        

        elseif ($_REQUEST['username'] != $uname) {
          $xml=new DOMDocument("1.0","UTF-8");
          $xml->load("data.xml");
         $rootTag=$xml->getElementsByTagName("user")->item(0);
          $dataTag=$xml->createElement("data");
          $usernameTag=$xml->createElement("username",$_REQUEST['username']);
          $passwordTag=$xml->createElement("password",$_REQUEST['password']);
          $fullnameTag=$xml->createElement("fullname",$_REQUEST['fullname']);
          $fulladdresTag=$xml->createElement("fulladdress",$_REQUEST['fulladdress']);
          $dataTag->appendChild($usernameTag);
          $dataTag->appendChild($passwordTag);
          $dataTag->appendChild($fullnameTag);
          $dataTag->appendChild($fulladdresTag);
         $rootTag->appendChild($dataTag);
         $xml->save("data.xml");

       }

}
break;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>\</title>
	
</head>
<link rel="stylesheet" href="styles.css">
<body>
	<form action="index.php" method="POST">
  <div class="container">
  	<h3>	</h3>
  	<h2>WELCOME!</h2>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>

    <div class="form-email">
	    <label for="email"><b>Username</b></label>  <br>
	    <input type="text" placeholder="Enter Email" name="username" id="username" required> <br>
    </div>
    <div class="form-email">
      <label for="email"><b>Full Name</b></label>  <br>
      <input type="text" placeholder="Enter Email" name="fullname" id="fullname" required> <br>
    </div>

    <div class="form-email">
      <label for="email"><b>Full Address</b></label>  <br>
      <input type="text" placeholder="Enter Email" name="fulladdress" id="fulladdress" required> <br>
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