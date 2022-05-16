<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jude Webpage</title>
	<link rel="stylesheet" href="stylee.css">
</head>
<body>

	<div class="navs">
			<form class="navi">
				<button><a href="#">HOME</a></button>
				<button><a href="#">MY PROFILE</a></button>
				<button><a href="#">CONTACTS</a></button>
				<button><a href="#">ABOUT</a></button>
			</form>
		</div>

		<input type="checkbox" name="" checked="checked">
			<span class="icon"></span>
			<ul>
				<li><a href="#"> REPORT</a></li>
				<li><a href="#">HELP</a></li>
				<li><a href="#">SETTING</a></li>
				<li><a href="#">EXIT</a></li>
			</ul>

			<hr class="dashed">

	<div class="Jude">

		
		

		<div class="information">
			<div class="overlay"></div>
			<img src="image/jude.png" class="jhude">

			<div id="circle">
				<div class="feature one">
					<img src="image/javaa.png">
					<h1>Java</h1>
					<p>Skill Level = 7%</p>
				</div>

				<div class="feature two">
					<img src="image/phpp.png">
					<p>Skill Level = 6%</p>
				</div>

				<div class="feature three">
					<img src="image/html3.png">
					<h1>HTML 5</h1>
					<p>Skill Level = 10%</p>
				</div>

				<div class="feature four">
					<img src="image/sqll.png">
					<h1>SQL</h1>
					<p>Skill Level = 6%</p>
				</div>
			</div>


		</div>
		<div class="controls">
			<img src="image/up.png" id="up">
			<h3>Features</h3>
			<img src="image/down.png" id="down">
		</div>

	</div>



	<script >
		var circle = document.getElementById("circle");
		var up = document.getElementById("up");
		var down = document.getElementById("down");

		var rotateValue = circle.style.transform;
		var rotateSum;

		up.onclick = function()
		{
			rotateSum = rotateValue + "rotate(-90deg)";
			circle.style.transform = rotateSum;
			rotateValue = rotateSum;
		}
		down.onclick = function()
		{
			rotateSum = rotateValue + "rotate(90deg)";
			circle.style.transform = rotateSum;
			rotateValue = rotateSum;
		}
	</script>

</body>
</html>