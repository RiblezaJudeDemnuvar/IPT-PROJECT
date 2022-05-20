<?php
	SESSION_START();
	$xml=file_get_contents('data.xml');
	$xml_parse=simplexml_load_string($xml);
	foreach($xml_parse as$k=>$v){
	$uname = $v->username;
	$pass = $v->password;
	
	if (isset($_SESSION['username'])===true)  {
    header("Location: login.php?logfirst");
	} 
	elseif (isset($_REQUEST['logout']) ===true) {
	    session_destroy();
	    header("Location: login.php?logout");
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<link rel="stylesheet" href="styles.css">
</head>
<script type="text/javascript">
	function tooglemenu(){
		document.getElementById('sidebar').classList.toogle.(active);
	}
</script>
<body>

		<div class="navs">
			<form class="navi">
				<button><a href="#">HOME</a></button>
				<button><a href="profile.php">MY PROFILE</a></button>
				<button><a href="#">CONTACTS</a></button>
				<button><a href="#">ABOUT</a></button>
			</form>
		</div>

		<div class="menu">

			<input class="menu" type="checkbox" name="" checked="checked">
			<span class="icon"></span>
			<ul>
				<li><a href="#"> REPORT</a></li>
				<li><a href="#">HELP</a></li>
				<li><a href="#">SETTING</a></li>
				<form action="login.php" method="POST"><li><a href="?logout">LOG OUT</a></li></form>
			</ul>

		</div>
	</div>

	<div id="pictures">

	<div class="gallery">
  <a target="_blank" href="images/cap1.avif">
    <img src="images/cap1.avif" alt="Cinque Terre" width="600" height="800">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap2.avif">
    <img src="images/cap2.avif" alt="Forest" width="600" height="800">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/cap3.avif">
    <img src="images/cap3.avif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

	</div>

	<div class="dashboardBox">
		
	</div>


	<div class="nexxt">
		<button><a href="#" style="color: black;">PREVIOUS</a></button>
		<button><a href="#" style="color: black;">NEXT</a></button>

	</div>

	

	
</body>
</html>