<!DOCTYPE html>
<html>
<title>Placements</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Lato", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
th{font-weight:lighter;}
.material-icons{vertical-align:middle;}

</style>
<script src="js/jquery.min.js"></script>
<script src="js/slick.js"></script>
<body>
<div class="w3-top w3-cyan w3-card-4" style="z-index:2">
  <ul class="w3-navbar" id="myNavbar">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-hover-black" href="javascript:void(0);" onClick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
    </li>
    <li class="w3-hover-white"><a href="index.php" class="w3-hover-white">Home</a></li>
    <li class="w3-hide-small w3-dropdown-hover w3-hover-white"><a href="about.html" class="w3-hover-white">About SCEC</a>
		<div class="w3-dropdown-content" style="background-color:transparent">
			<div class="w3-animate-zoom w3-blue w3-card-4">
			<a href="about.html#chairman" 	class="w3-hover-white w3-animate-bottom">Chairman</a>
			<a href="about.html#biography" 	class="w3-hover-white w3-animate-top">Chairman Biography</a>
			<a href="about.html#secretary" 	class="w3-hover-white w3-animate-bottom">Secretary</a>
			<a href="about.html#ceo" 		class="w3-hover-white w3-animate-top">CEO</a>
			<a href="about.html#principal" 	class="w3-hover-white w3-animate-bottom">Principal</a>
			<a href="about.html#organising" class="w3-hover-white w3-animate-top">Organisation Chart</a>
			<a href="about.html#governing" 	class="w3-hover-white w3-animate-bottom">Governing Body</a>
			<a href="about.html#mandatory" 	class="w3-hover-white w3-animate-top">Mandatory Disclosure</a>
			<a href="about.html#location" 	class="w3-hover-white w3-animate-bottom">Location</a>
		</div>
		</div>
	</li>
    <li class="w3-hide-small w3-dropdown-hover w3-hover-white"><a class="w3-hover-white" href="admissions.html"> Admissions</a>
		<div class="w3-dropdown-content" style="background-color:transparent">
			<div class="w3-animate-zoom w3-blue w3-card-4">
			<a href="admissions.html#procedure" 	class="w3-hover-white w3-animate-top">Admission Procedure</a>
			<a href="admissions.html#download" 		class="w3-hover-white w3-animate-bottom">Download Prospectus</a>
			<a href="admissions.html#application" 	class="w3-hover-white w3-animate-top">Application Form</a>
			<a href="admissions.html#intake" 		class="w3-hover-white w3-animate-bottom">Intake</a>
			<a href="admissions.html#contact" 		class="w3-hover-white w3-animate-top">Contact @ Admission</a>
		</div>
		</div>
	
	
	</li>
    <li class="w3-hide-small w3-dropdown-hover w3-hover-white"><a class="w3-hover-white">Departments</a>
		<div class="w3-dropdown-content" style="background-color:transparent">
			<div class="w3-animate-zoom w3-blue w3-card-4">
			<a href="department_cse.php" 	class="w3-hover-white w3-animate-top">CSE</a>
			<a href="department_mech.php" 	class="w3-hover-white w3-animate-bottom">MECH</a>
			<a href="department_eee.php" 	class="w3-hover-white w3-animate-top">EEE</a>
			<a href="department_ece.php" 	class="w3-hover-white w3-animate-bottom">ECE</a>
			<a href="department_civil.php" 	class="w3-hover-white w3-animate-top">CIVIL</a>
			<a href="department_hbs.php" 	class="w3-hover-white w3-animate-bottom">HBS</a>
			<a href="department_mba.php" 	class="w3-hover-white w3-animate-top">MBA</a>
			</div>
		</div>
	
	</li>
    <li class="w3-hide-small w3-dropdown-hover w3-hover-white"><a class="w3-hover-white" href="facilities.html">Facilities</a>
		<div class="w3-dropdown-content" style="background-color:transparent">
			<div class="w3-animate-zoom w3-blue w3-card-4">
			<a href="facilities.html#central" 	class="w3-hover-white w3-animate-bottom">Central Library</a>
			<a href="facilities.html#digital" 	class="w3-hover-white w3-animate-top">Digital Library</a>
			<a href="facilities.html#library" 	class="w3-hover-white w3-animate-bottom">Visual Library</a>
		</div>
		</div>
	
	</li>
    <li class="w3-hide-small w3-dropdown-hover w3-white"><a class="w3-white" href="placements.php">Placements</a>
		<div class="w3-dropdown-content" style="background-color:transparent">
			<div class="w3-animate-zoom w3-blue w3-card-4">
			<a href="placements.php#training" 	class="w3-hover-white w3-animate-bottom">Placement Cell</a>
			<a href="placements.php#companies" 	class="w3-hover-white w3-animate-top">Companies Visited</a>
			<a href="placements.php#overview" 	class="w3-hover-white w3-animate-bottom">Overview</a>
			<a href="placements.php#gallery" 	class="w3-hover-white w3-animate-bottom">Gallery</a>
		</div>
		</div>
	</li>
    <li class="w3-hide-small w3-hover-white"><a class="w3-hover-white" href="gallery.php">Gallery</a></li>
    <li class="w3-hide-small w3-hover-white"><a class="w3-hover-white" href="NSS.php">NSS</a></li>
    <li class="w3-hide-small w3-hover-white"><a class="w3-hover-white" href="contact.html">Contact</a></li>
	
  </ul>
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-white">
	<li class="w3-hide-small w3-hover-white"><a>Home</a></li>
    <li class="w3-hide-small w3-hover-white"><a>About SCEC</a>
	<li class="w3-hide-small w3-hover-white"><a>Admissions</a></li>
    <li class="w3-hide-small w3-hover-white"><a>Depratments</a>
	<li class="w3-hide-small w3-hover-white"><a>Facilities</a>
    <li class="w3-hide-small w3-hover-white"><a>Placements</a></li>
    <li class="w3-hide-small w3-hover-white"><a>Gallery</a></li>
    <li class="w3-hide-small w3-hover-white"><a>NSS</a></li>

    </ul>
  </div>
</div>
<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-dark-grey w3-collapse w3-top w3-medium w3-padding sidebarw3" style="z-index:0;width:200px;" id="mySidenav"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-padding-xlarge w3-hide-large w3-display-topleft w3-hover-white" style="width:80%;">Close Menu</a>
	<div class="w3-container w3-margin-top w3-center w3-xlarge">
    <img src="logo.png" style="width:100%"/><br/>Placements
  </div>
  <a href="#training" onclick="w3_close()" class="w3-padding w3-hover-white w3-border-bottom">About Placement Cell</a> 
  <a href="#companies" onclick="w3_close()" class="w3-padding w3-hover-white w3-border-bottom">Companies Visited</a> 
  <a href="#overview" onclick="w3_close()" class="w3-padding w3-hover-white w3-border-bottom">Placements Overview</a>
  <a href="#gallery" onclick="w3_close()" class="w3-padding w3-hover-white w3-border-bottom">Placement Gallery</a> 
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-btn w3-red w3-border w3-border-white w3-margin-right" onclick="w3_open()">☰</a>
  <img src="logo.png"/>
</header>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:280px;">



  <!-- Header -->
  <div class="w3-container" id="training" style="margin-top:80px">
    <h1 class="w3-xlarge w3-text-red"><b>Training and Placements Cell</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
   <div class="w3-row w3-card-8 w3-round w3-padding-large">
	<div class="w3-col m4 l4">
		<img src="images/Chairman.jpg" style="width:100%;border-radius:50%;"/>
	</div>
		<div class="w3-col m8 l8 w3-padding-large w3-align-left"> 
		<span class="w3-xlarge">Training and Placements Officer</span><br/>
		<span class="w3-large w3-border-bottom">Smt.K.Valli Madhavi, <br/>
		M.Tech, M.Phil,(Ph.D.)</span><br/>
		<p class="w3-justify w3-hide-small w3-align-left w3-medium w3-text-black">
	This college has a specialty in imparting Soft Skills as a value addition to the potential engineers so that their scope of employability values is enhanced in the job world. A soft skills expert is under the payrolls as a full time trainer to inculcate soft skills like personality development, communication skills, team work and team building, leadership skills, Maintaining Positive Attitude etc.<br/><br/>

Quite often students are trained and exposed to interview performance skills. Group discussions and mock interviews are carried out here as regular practice taking students towards perfection on campus interviews on a continuous basis. Lot of extracurricular activities are being conducted so as to improve their team work, leadership skills as part of Personality development program.
		</p>
  
  </div>
  </div>
  </div>
 <!-- Chairman-->


  <!-- Services -->
<div class="w3-container" id="companies">
 <h1 class="w3-xlarge w3-text-red"><b>Companies Visited</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
<div style="overflow:hidden;">
<div class="company">

<?php
$i=0;
$myFile = "files/index/companies.txt";
$lines = file($myFile);//file in to an array
#unset($lines[0]);
#unset($lines[1]); // we do not need these lines.
foreach($lines as $line) 
{	
    $var = explode(':', $line, 2);
    $com[$var[0]] = $var[1];
}
for($i=1;$i<sizeof($com);$i++)
echo '
    
	<div class="w3-quarter w3-padding">
		<div class="w3-card-4 w3-round w3-center w3-cyan">
		<div class="w3-padding"><img class="w3-image w3-white w3-round" width="100%" src="images/index/companies/'.$com['company-'.$i].'.png"/></div>
		'.$com['company-'.$i].'
		</div>
	</div>
	
    ';
?>

	</div>
  </div>
</div>
  <!-- Designers -->
  <div class="w3-container" id="overview">
 
    <h1 class="w3-xlarge w3-text-red"><b>Placements Overview</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
	<table class="w3-table w3-card-8 w3-round w3-striped w3-hoverable">
		<tr class="w3-cyan">
		<th>Year</th>
		<th>Placements</th>
		</tr>
		<tr class="w3-pale-blue">
		<th>This Year (2016 - 17 )</th>
		<th> 78 <span class="w3-text-grey">(Recruitment Under Progress...)</span></th>
		</tr>
		<tr>
		<th>Last Year (2015 - 16 )</th>
		<th>130</th>
		</tr>
		<tr>
		<th>2014 - 15</th>
		<th>200</th>
		</tr>
		<tr>
		<th>2013 - 14</th>
		<th>63</th>
		</tr>
		<tr>
		<th>2012 - 13</th>
		<th>95</th>
		</tr>
		<tr>
		<th>2011 - 12</th>
		<th>144</th>
		</tr>
		<tr>
		<th>2010 - 11</th>
		<th>136</th>
		</tr><tr>
		<th>2009 - 10</th>
		<th>159</th>
		</tr>
		<tr>
		<th>2008 - 09</th>
		<th>151</th>
		</tr>
		
		
		</table>


  </div>
  
  <!-- The Team -->
 <div id="gallery" class="w3-container">
     <h1 class="w3-xlarge w3-text-red"><b>Gallery</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
   <div class="w3-panel w3-white w3-leftbar w3-border-cyan w3-pale-blue w3-padding-16">

   <a href="gallery.php#placements"><i class="w3-xxxlarge material-icons">burst_mode</i> Goto Gallery</a>
</div>
 </div>

  <!-- Packages / Pricing Tables -->
 
  <!-- Contact -->
 
<!----------------->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by<br/><img src="images/logo/logo.png"/></p></div>
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black w3-padding-0" onclick="this.style.display='none'">
    <span class="w3-closebtn w3-text-white w3-opacity w3-hover-opacity-off w3-xxlarge w3-container w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
//scroll on click
$('#mySidenav').on('click', 'a', function(event){
   event.preventDefault();

    $('html,body').animate({
	
        scrollTop: $( $.attr(this, 'href') ).offset().top-50
    }, 500);
});
//scroll on enter
setTimeout(function(){
if(window.location.hash)
scrollToElement(window.location.hash);
},1000);
//companies slider
$('.company').slick({
  infinite: true,
  arrows:false,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay:true,
  autoplaySpeed:1000,
  pauseOnHover:false
});

function scrollToElement(ele) {

    //$(window).scrollTop(ele.offset().top).scrollLeft(ele.offset().left);
	    $('html,body').animate({
        scrollTop: $( $(ele) ).offset().top-50
    }, 500);
	
}
</script>

</body>
</html>
