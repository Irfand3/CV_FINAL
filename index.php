<?php 
require 'config/db.php';
	
//POST SUGGESTION
if (isset($_POST['submitSuggestion'])) {
	
	$name = $_POST['suggestionname'];
	$suggestion = $_POST['suggestiontext'];

	

	$query = "INSERT INTO suggestion(name, suggestion) VALUES ('$name' , '$suggestion')";

 
	if (mysqli_query($connection, $query)) {

 
  }
  else
  {
    echo "error";
  }
   mysqli_free_result($result);
	}

//GETTING ALL SUGESTIONS FROM DB
 $query2 = 'SELECT * FROM suggestion';

  $result2 = mysqli_query($connection, $query2);

  $suggestions = mysqli_fetch_all($result2, MYSQLI_ASSOC);


  //SENDING MAIL BUT IT IS NOT WORKING IN LOCAL HOST

  if (isset($_POST['submitEmail'])) {

  $receiver = "Irfan98@live.com";
  $subject = "CV Email sender";
  $sender = $_POST['email'];
  $content = $_POST['emailcontent'];


  mail($receiver,$subject,$contet,$sender);
}

	

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Irfan Duric">
	<meta name="description" content="CV project">
	<meta name="keywords" content="CV, Personal, Project">
	<title>Irfan Duric CV</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<script src="https://kit.fontawesome.com/6005d190be.js" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function show() {
  		var show = document.getElementById("suggestionDiv");
  				if (show.style.display === "none") {
    			show.style.display = "block";
  				} else {
    			show.style.display = "none";
  				}
			}
	</script>

</head>
<body>

<!--  Title: Name and profession -->


	
<div>
<header>
	<div >
		<h3 style="display: inline; float: left; color: #E8BCA2; margin-left: 15px;" class="navtitle">Irfan Duric</h3>	
		<nav>
			<ul>
				<li  class="navbarLink" style="margin-right: 15px;"><a id="link1" href="calculator.php">Calculator</li></a>	
				<li  class="navbarLink"><a id="link2" href="https://irfand3.github.io/CVProject/">Progress 3</li></a>
				<li  class="navbarLink"><a id="link2" href="https://irfand3.github.io/CV_progress_2/">Progress 2</li></a>
				<li  class="navbarLink"><a id="link3" href="https://irfand3.github.io/CVProject_progress1/">Progress 1</li></a>
				<li  class="navbarLink"><a id="link8" href="#sendEmail">Email me</li></a>
				<li  class="navbarLink"><a id="link4" href="#about">About Me</li></a>
				<li  class="navbarLink"><a id="link5" href="#contact">Contact</li></a>
				<li  class="navbarLink"><a id="link6" href="#education">Education</li></a>
				<li  class="navbarLink"><a id="link7" href="#programming">Programming Languages skills</li></a>	

			</ul>
		</nav>
	</div>
</header>
</div>

<div class="container">

<div class="container">
<!--  About me part -->
<div id="about">
	<div class="aboutme">
	<h3 style="margin:10px; padding: 15px; color: #A2E8B2" >About Me</h3>
	<img src="Img/profile.jpg" style="margin-bottom: 20px" id="img">
	<p style="line-height: 1.5">My name is Irfan Duric.I am a highly motivated fourth year student of Software Engineering.I do not have any working experience.I did a few projects on my own and also a few projects on faculty in teams. My passion is coding and working in a team as well as gaining new knowledge and sharing my own. Having worked with several technologies and always ready to learn and adapt to new one. Ready to take next challenges. </p>
</div>
</div>
<hr style="border: 1px solid #E8BCA2">

<!--  Personal information part -->
<div id="contact" class="contact">
<h3 style="text-align: center; padding: 5px; margin:5px; color: #A2E8B2">Personal Info</h3>
<p><b>First Name:</b> Irfan</p>
<p><b>Second Name:</b> Duric</p>
<p><b>Age:</b> 21</p>
<address>
<p><b>Phone number:</b> 062-012-395</p>
<a href="mailto:Irfan98@live.com"><p><b>Email:</b> Irfan98@live.com</p></a>
<p><b>Physical address:</b> Bosanska bb, Fojnica</p>
</address>
<br>
<hr style="border: 1px solid #E8BCA2">
</div>

<!--  Education tag -->
<div id="education" class="education">
<h3 style="text-align: center; padding: 5px; margin: 5px; color: #A2E8B2">Education</h3>
<p><b>Elementary School: </b>OŠ Muhsin Rizvic Fojnica</p>
<p><b>High School: </b>SMŠ Zijah Dizdarevic Fojnica</p>
<p><b>University: </b>IUS, Faculty of Engineering and Natural Sciences, Software Engineering</p>
<br>
<hr style="border: 1px solid #E8BCA2">
</div>

<!--  All programming languages I have worked with and progress of my knowledge on them -->
<div id="programming" class="programming">
<h3 style="text-align: center; padding: 10px; margin: 10px; color: #A2E8B2">Programming Languages skills</h3>
<ul>
<li style="margin-top: 10px" id="html"><i class="fab fa-html5 fa-3x" style="margin-bottom: 2px;"></i><h3 class="html" style="color: white; display: none;">HTML</h3></li><progress value="100" max="100"></progress>

<li style="margin-top: 10px" id="css"><i class="fab fa-css3-alt fa-3x"style="margin-bottom: 2px;"></i><h3  class="css" style="color:white; display: none">CSS</h3></li> <progress value="100" max="100"></progress>

<li style="margin-top: 10px" id="js"><i class="fab fa-js fa-3x" style="margin-bottom: 2px;"></i> <h3 class="js" style="display: none; color: white;">JavaScript</h3></li> <progress value="80" max="100"></progress>

<li style="margin-top: 10px" id="angular"><i class="fab fa-angular fa-3x" style="margin-bottom: 2px;"></i><h3 class="angular" style="color: white; display: none;">Angular</h3></li><progress value="90" max="100"></progress>

<li style="margin-top: 10px" id="node"><i class="fab fa-node fa-3x" style="margin-bottom: 2px;"></i><h3 class="node" style="color: white; display: none;">NodeJS</h3></li><progress value="50" max="100"></progress>

<li style="margin-top: 10px" id="database"><i class="fas fa-database fa-3x" style="margin-bottom: 2px;"></i><h3 class="database" style="color: white; display: none;">Database</h3></li><progress value="50" max="100"></progress>

<li style="margin-top: 10px" id="cpp"><i class="fab fa-cuttlefish fa-3x" style="margin-bottom: 2px;"></i><h3 class="cpp" style="color: white; display: none;">C++</h3></li><progress value="80" max="100"></progress>
<li style="margin-top: 10px" id="java"><i class="fab fa-java fa-3x" style="margin-bottom: 2px;"></i><h3 class="java" style="display: none; color: white;">Java</h3></li><progress value="60" max="100"></progress>
<li style="margin-top: 10px" id="php"><i class="fab fa-php fa-3x" style="margin-bottom: 2px;"></i> <h3 class="php" style="display: none; color: white;">PHP</h3></li><progress value="40" max="100"></progress>

</ul>
</div>

<hr style="border: 1px solid #E8BCA2">
<!--  Working experience -->
<div style="min-height: 150px">
<div class="work" style="display: inline">
	<h3 style="text-align: center; color: #A2E8B2; margin-bottom: 10px;">Work Experience</h3>
	<p>- Never been employed</p>
</div>


<!--  Languages I know to speak -->
<div class="languages" style="display: inline"> 
	<h3 style="text-align: center; color: #A2E8B2; margin-bottom: 10px;">Languages</h3>
	<ul>
	<li>English - excellent</li>
	<li>Bosnian - primary language</li>
	</ul>
</div>

<div class="hobbies" style="display: inline;">
	<h3 style="text-align: center; color: #A2E8B2; margin-bottom: 10px;">Hobbies and interests</h3>
	<li>Gym</li>
	<li>Basketball</li>
	<li>Books</li>
	<li>Gun archery</li>
	<li>Travelling</li>


</div>
</div>
</div>
<div class="ContactMe" id="sendEmail">
	<form method="POST">
		<hr style="border: 1px solid #E8BCA2" class="container">
		<h3 style="text-align: center; color: #A2E8B2; margin-bottom: 20px; margin-top: 20px">Send me Email!</h3>
		<h4 style="text-align: center; margin: 10px; padding: 2px; color:white;">Enter your Email address</h4>
		<input class="fullwidth" type="email" name="email" required style="padding-top: 4px; padding-bottom: 4px">
		<h4 style="text-align: center; margin: 10px; padding: 2px; color:white;">Enter your Email content</h5>
		<input class="fullwidth" type="textbox" name="emailcontent" style=" padding-bottom: 80px; font-size: 15px" required>
		<div style="margin: 15px">
		<input class="submitClass" type="submit" name="submitEmail" value="Send">
		</div>

	</form>
</div>


		
		<div class="suggestion">
		<h2 style="text-align: center; color: #9BDFAD; margin-top: 30px; margin-bottom: 30px;">Leave a suggestion for a website</h2>
		<form method="POST">
			<h4 style="text-align: center; color: white; margin-bottom: 20px;">Enter your name: </h4>
			<input class="suggestionName" type="text" name="suggestionname">
			<h4 style="text-align: center; color: white; margin-bottom: 20px; margin-top: 20px;">Leave your suggestion below: </h4>
			<input class="suggestionText" type="textbox" name="suggestiontext">
			<div style="margin: 20px;">
			<button class="submitClass" type="submit" name="submitSuggestion">Send</button>
			</div>

		</form>
		</div>	
			

			<div style="text-align: center; margin-top: 10px; margin-bottom: 10px;">
			<button onclick="show()" class="submitClass" style="padding: 10px 20px;">Take a look at other suggestions</button>
			</div>

			<span style="margin-top: 20px; margin-bottom: 20px;  " id="suggestionDiv" >
			<?php foreach ($suggestions as $suggestion) {
				
			?>
				<div style="margin-top: 10px;">
				<h2 style="color: #9bdfad;" ><span style="color: white; margin-right: 10px; margin-left: 10px;">Name:</span> <?php echo $suggestion['name']; ?></h2>
				<h2 style=" color: #e8bba2;"><span style="color: white; margin-right: 10px; margin-left: 30px;">Text: </span><?php echo $suggestion['suggestion']; ?></h2>
				</div>
			
		<?php } ?>
		</span>
		
	

</div>
<footer class="footer">
	<div  id="github">
	<span>Created by: Irfan Duric</span>
	<!--
	<span ><a style="color: black; margin-left: 25px" href="https://irfand3.github.io/CVProject_progress1/">CV Progress 1</a></span>
	<span ><a style="color: black;  margin-left: 25px" href="https://github.com/Irfand3/CVProject_progress1">CV Progress 1 repository</a></span>
	<span ><a style="color: black;  margin-left: 25px" href="https://github.com/Irfand3/CVProject">CV Progress 2 repository</a></span>
	-->
	</div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>

</html>