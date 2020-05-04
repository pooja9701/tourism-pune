<html>

<head>
	<title>PUNE TOURISM</title>
	<!-- stylesheets -->
  	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
 	<script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
	 
    <!-- jQuery - the core -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>




<script type="text/javascript">
$(document).ready(function(){
	$(".trigger").click(function(){
		$(".panel").toggle("slow");
		$(this).toggleClass("active");
		return false;
	});
});



</script>

</head>

<body>
<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Pune Tourism Test</h1>
				<h2> Lets begin your journey with us. </h2>		
				<p class="grey">You are free to use this login and registration system, this will going to help you in case of any emergency</p>
				<h2> Acclaim </h2>
				<p class="grey">This website is built by <a href="http://www.pccoepune.com" >PCCOE MCA </a> Department for the Pune tourism. It will help tourist to know about pune and its famous places and its near by places. Tourist can register and get more information about places.</p>
			</div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="check.php" method="post" name = "f1">
					<h1>Member Login</h1>
					<label class="grey" for="log">Username:</label>
					<input class="field" type="text" name="username" id="username" value="" size="23" />
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="password" id="password" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<a class="lost-pwd" href="#">Lost your password?</a>
				</form>
			</div>
			<div class="left right">			
				<!-- Register Form -->
				<form name = "member" action="reg.php" method="post">
					<h1>Not a member yet? Sign Up!</h1>				
					<label class="grey" for="signup">Username:</label>
					<input class="field" type="text" name="user_name" id="user_name" value="" size="23" />
					<label class="grey" for="email">Email:</label>
					<input class="field" type="text" name="email" id="email" size="23" />
                    <label class="grey" for="pass">Choose password:</label>
					<input class="field" type="password" name="pass_word" id="pass_word" value="" size="23" />
					<input type="submit" name="submit" value="Register" name="submit"class="bt_register" />
				</form>
			</div>
		</div>
</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hello Guest!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Log In | Register</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->

<div class="welcome">
<marquee direction="right" width="80%">Welcome to Pune Tourism.</marquee>
</div>


<ul class="menu2">
<li><a href="home.html"><b>Home</b></a></li>
<li><a href="visit.html"><b>Places To Visit</b></a></li>
<li><a href="photo.html"><b>Photos</b></a></li>
<li><a href="reach.html"><b>How To Reach</b></a></li>
<li><a href="contact.html"><b>Contact us</b></a></li>
<li><a href="search.html"><b>Search</b></a></li>
</ul>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img class="slideshow-container" src="images/Image1.jpg">
  <div class="text">Lonavala</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img class="slideshow-container"src="images/Image2.jpg">
  <div class="text">Shaniwar wada</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img class="slideshow-container" src="images/Image3.jpg">
  <div class="text">Sinhagad fort</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<div class="description">


		
		<h1>History Of Pune</h1> 
		<h2>It is a place where traditional and modern cultures coexist. An apt representation of the traditional culture would be the Ganapati Festival, a 10-day festival where decorative lights and festive music make the entire city come to life. Other festivals such as Eid, Christmas and New Year are also celebrated with joy and enthusiasm.</h2>
		<h1>Culture Of Pune</h1>
		<h2>Though the culture of Pune is very cosmopolitan, it is considered as the cultural capital of Maharashtra. It is a place where traditional and modern cultures coexist. The city is a bastion of arts, music, dance and theatre.Shaniwarwada Dance Festival is another such festival, attracting prominent classical dancers. Several theatres in the city serve as a platform for budding artists. Though the culture of Pune is very cosmopolitan, it is considered as the cultural capital of Maharashtra.</h2> 

	

<div/>


<div class="footer">
  <p><b>Copyright © 2020 Pimpri Chinchwad College of Engineering (Department of MCA)</b></p>
</div>
</body>
</html>
