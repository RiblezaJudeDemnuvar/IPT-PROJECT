
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jude Webpage</title>
	<link rel="stylesheet" href="stylee.css">
</head>
	<style>
	.skills,h3 h4 {
  		margin-left: 70%;
  		margin-top: -13%;
	}
	.personal-info {
  		margin-top: 1px;
	}
	.personal-info h4{
  		margin-left: 50px;
	}

	.shape {
		  padding: 50px;
		  background: #FFFAFA;
		  width: 1100px;
		  height: 60px;
		  margin-top: -13%;
		  margin-left: 2%;
		  border-radius: 10px;
		  box-shadow: 5px 5px 5px #888888;
	}
	</style>

<body>

	<div class="navs">
			<form class="navi">
				<button><a href="#" style="color: black">HOME</a></button>
				<button><a href="#" style="color: black">MY PROFILE</a></button>
				<button><a href="#" style="color: black">CONTACTS</a></button>
				<button><a href="#" style="color: black">ABOUT</a></button>
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

	<div class="personal-info">
		<hr class="dashed">
		<h2 style="font-family: sans-serif;">PERSONAL INFORMATION</h2>
		<hr>
		<h4>NAME: JUDE DEMNUVAR L. RIBLEZA</h4>	
		<h4>ADDRESS: PUYOG, BOAC, MARINDUQUE</h4>
		<h4>BIRTHDAY: JULY 31, 2000</h4>
		<h4>AGE: 21</h4>

		<div class="skills">
			<h3>EXPERTISE</h3>
			<h4>Feeling Expert</h4>
			<h4>Fake Developer</h4>
			<h4>Fake Agent</h4>
		</div>


		<div class="shape">
		
	</div>
		<hr class="dashed">
	</div>
	

	

</body>
</html>