<!DOCTYPE html>
<html>
<title>Events @ Sri Chaitanya Engineering College </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
html{
	background-image:url('images/events/back.jpg');
	background-size:cover;
	}
body,h1,h2,h3,h4,h5 {font-family: "Lato", sans-serif}
body {font-size:16px;}
.material-icons{vertical-align:middle;}
th{font-weight:lighter;}
.bgimg-1 {
    background-image: url('images/civil/slider/slide1.jpg');
	height: 300px;
	width:	100%;
	background-attachment: fixed;
    background-position:right top;
    background-repeat: no-repeat;
}
</style>
<script src="js/jquery.min.js"></script>
<script src="js/wow.min.js"></script>
<body onLoad="scrollOnLoad()">

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
    <li class="w3-hide-small w3-dropdown-hover w3-hover-white"><a class="w3-hover-white" href="placements.php">Placements</a>
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
	<li class="w3-hide-small w3-hide-medium w3-right w3-padding-0"><img class="w3-right"src="logo.png" style="width:50%"/></li>

	
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
<?php
$myFile = "files/index/marquee.txt";
$lines = file($myFile);//file in to an array
foreach($lines as $line) 
{	
    $var = explode(':', $line, 2);
    $arr[$var[0]] = $var[1];
}
?>

<div class="w3-padding w3-conatiner">
<center><br/>
<br/>
<div class="w3-padding-32 w3-round w3-card-8 w3-white w3-animate-zoom" style="width:80%">
<div class="w3-round w3-padding-16 w3-white w3-center">
<span class="w3-xxxlarge w3-text-blue w3-border-bottom w3-border-red">Alumni</span>
<br/>
The Page is under construction...
<!--
<table class="w3-table w3-striped w3-hoverable">
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
-->
</center>
</div>

</div>


</div>
<br/><br/> 

</body>
</html>