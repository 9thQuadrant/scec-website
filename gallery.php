<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<title>Gallery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {font-weight:lighter;}
</style>
<script src="js/jquery.min.js"></script>
<body  onLoad="scrollOnLoad()" class="w3-light-grey w3-content" style="max-width:1600px">

<div class="w3-top w3-cyan w3-card-4" style="z-index:3">
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
    <li class="w3-hide-small w3-white"><a class="w3-white" href="gallery.php">Gallery</a></li>
    <li class="w3-hide-small w3-hover-white"><a class="w3-hover-white" href="NSS.php">NSS</a></li>
    <li class="w3-hide-small w3-hover-white"><a class="w3-hover-white" href="contact.html">Contact</a></li>
	
  </ul>
  </div>
</div>

<!-- Sidenav/menu -->
<nav class="w3-top w3-sidenav w3-collapse w3-padding w3-dark-grey" style="z-index:;width:200px;" id="mySidenav"><br/>
  <div class="w3-container w3-margin-top w3-center w3-xlarge">
    <img src="logo.png" width="100%"/><br/>Gallery
  </div>

      <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
	
<?php $arr =array();?>
<?php
	
	$folder='gallery';
	$i=0;
if ($handle = opendir($folder)) {
    $blacklist = array('.', '..', 'somedir', 'somefile.php');
    while (false !== ($file = readdir($handle))) {
        if (!in_array($file, $blacklist)) {
			$arr[$i]= $file;
			$i++;
		}
    }
    closedir($handle);
}
	for($i=0;$i<sizeof($arr);$i++)
	echo   '<a href="#'.str_replace("'",'',str_replace('"','',preg_replace('/\s+/','', $arr[$i]))).'" class="w3-padding w3-hover-white w3-border-bottom">'.$arr[$i].'</a>' 
?>
   
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-cyan" style="margin-left:200px;">

  <!-- Header -->

 
  <!-- First Photo Grid-->
<div class="w3-padding">
<br/><br/>
<div class="w3-container">
 <div class="w3-panel w3-white w3-leftbar w3-border-blue w3-pale-blue w3-padding-16">
	Click on an image for full size
  </div>
  </div>
<?php

for($i=0;$i<sizeof($arr);$i++)
{	
$folder_path = 'gallery/'.$arr[$i]; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 echo '<div class="w3-container w3-round" id="'.str_replace("'",'',str_replace('"','',preg_replace('/\s+/','', $arr[$i]))).'">
		<header class="w3-container">
			<br/><br/>
			<h1 class="w3-border-bottom w3-border-white">'.$arr[$i].'</h1></header>
			<div class="w3-animate-left">';
if($num_files > 0)
{
	while(false !== ($file = readdir($folder))) 
	{
  $file_path = $folder_path.'/'.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
	{
		echo'
			<div class="w3-quarter"><div class="w3-padding">
			<img class="w3-card-4 w3-border-white w3-round w3-topbar w3-bottombar w3-rightbar w3-leftbar"src="'.$file_path.'" width="100%" onClick="onClick(this)" alt="'.$file_path.'"/>
			</div></div>';

	}
	}
}
else
{
 echo "the folder was empty !";
}
echo '</div></div><br/>';
}

closedir($folder);

?>
</div>
</div>
</div>
  <!-- Second Photo Grid-->


  <!-- Pagination -->

  <!-- Images of Me -->



  <!-- Contact Section -->
 

  <!-- Footer -->

<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by<br/><img src="images/logo/logo.png"/>
</p>
</div>

 <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-padding-0" style="background-color:rgba(0,0,0,0.8)" onClick="$(this).fadeOut(200)">
    <span class="w3-closebtn w3-text-white w3-opacity w3-hover-opacity-off w3-xlarge w3-container w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-bottom w3-center w3-transparent w3-padding-64">
      <img id="img01" width="100%" class="w3-round">
      <p id="caption" class="w3-text-white"></p>
    </div>
  </div>

<!-- End page content -->
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
//image viewer
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

//scroll on click
$('#mySidenav').on('click', 'a', function(event){
   event.preventDefault();
	//w3_close();
    $('html,body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top-50
    }, 500);
});
//scroll on enter
function scrollOnLoad(){
setTimeout(function(){
if(window.location.hash!=='')
 $('html,body').animate({
        scrollTop: $( $(window.location.hash) ).offset().top-50
    }, 500);
},1000);
}
</script>

</body>
</html>
