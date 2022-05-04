<!DOCTYPE html>
<html>
<title>Electrical and Electronics department</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Lato", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.material-icons{vertical-align:middle;}
th{font-weight:lighter;}
</style>
<script src="js/jquery.min.js"></script>
<script src="js/slick.js"></script>
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
    <li class="w3-hide-small w3-dropdown-hover w3-white"><a class="w3-white">Departments</a>
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
<nav class="w3-sidenav w3-dark-grey w3-collapse w3-top w3-medium w3-padding w3-animate-left sidebarw3" style="z-index:1;width:200px;" id="mySidenav"><br>
  <a href="javascript:void(0)" onClick="w3_close()" class="w3-padding-xlarge w3-hide-large w3-display-topleft w3-hover-white" style="width:80%;">Close Menu</a>
  <div class="w3-container w3-margin-top w3-center w3-xlarge">
  <img src="logo.png" width="100%"/><br/>
    EEE
  </div>
  <a href="#about"       onclick="w3_close()" class="w3-padding w3-hover-white w3-border-bottom">About EEE</a> 
  <a href="#vision"		 onclick="w3_close()" class="w3-padding w3-hover-white w3-border-bottom">Vision</a> 
  <a href="#mission"	 onclick="w3_close()" class="w3-padding w3-hover-white w3-border-bottom">Mission</a> 
  <a href="#courses"	 onclick="w3_close()" class="w3-padding w3-hover-white w3-border-bottom">Courses</a> 
  <a href="#faculty"	 onclick="w3_close()" class="w3-padding w3-hover-white w3-border-bottom">Faculty</a> 
  <a href="#workshops"	 onclick="w3_close()" class="w3-padding w3-hover-white w3-border-bottom">Workshops and Seminars</a> 
  <a href="#labs"		 onclick="w3_close()" class="w3-padding w3-hover-white w3-border-bottom">Labs</a> 

  </nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-btn w3-red w3-border w3-border-white w3-margin-right" onClick="w3_open()">☰</a>
  <img src="logo.png"/>
</header>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onClick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px;margin-right:20px">



  <!-- Header -->
    <div class="slider">
  <img src="images/eee/slider/slide1.jpg"/>
  <img src="images/eee/slider/slide2.jpg"/>
  <img src="images/eee/slider/slide3.jpg"/>
  <img src="images/eee/slider/slide4.jpg"/>
  </div>

   <div class="w3-container" id="about">
 
    <h1 class="w3-xlarge w3-text-red"><b>About EEE</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
   <div class="w3-row w3-card-8 w3-round w3-padding-large">
	<div class="w3-col m4 l4">
		<img src="images/eee/hod/hod.jpg" style="width:100%;border-radius:50%;"/>
	</div>
		<div class="w3-col m8 l8 w3-padding-large w3-align-left"> 
		<span class="w3-xlarge">HOD</span><br/>
		<span class="w3-large w3-border-bottom">Sri.G.Surya Kalyan
		<br/>M.Tech, Ph.D. Prof. & HOD
		</span><br/>
				mailto:<span class="w3-codespan">hodeee@cec.ac.in</span>
		<p class="w3-justify w3-hide-small w3-align-left w3-medium w3-text-black">
	Electrical and Electronics branch of Engineering in B.Tech was started in the year 2002 with an intake of 60 students and affiliated to JAWAHARLAL NEHRU TECHNOLOGICAL UNIVERSITY, Hyderabad and latter to JNTU Kakinada. Subsequently the intake was increased to 120.  Electrical and Electronics branch has been accreted by National Board of Accreditation, (NBA), ACICTE, New Delhi in the month of June 2010.
		</p>
  
  </div>
  </div>
  </div>
  
 <!-- Chairman-->
<div class="w3-container" id="vision">
 
    <h1 class="w3-xlarge w3-text-red"><b>Vision</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
  
  <div class="w3-panel w3-white w3-leftbar w3-pale-blue w3-border-cyan w3-padding-16">
  The Electrical & Electronics Engineering Department is to be a pioneer department in preparing students to compete globally in their profession, to reach the highest levels of intellectual attainment, making significant contributions to the society. 
  
  </div>
  </div>

  <!-- Services -->
<div class="w3-container" id="mission">
 
    <h1 class="w3-xlarge w3-text-red"><b>Mission</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
  
  <div class="w3-panel w3-white w3-leftbar w3-pale-blue w3-border-cyan w3-padding-16">

  <p>Department of EEE will strive continuously.<br/>
1.    To be the center of excellence with focus on advanced Technology.<br/>
2.    To prepare students for successful careers based on a strong moral and ethical values.<br/>
3.    To train and educate students to become entrepreneurs in their chosen field.
  
  </div>
  </div>
  
  <!----------->
  
  <div class="w3-container" id="courses">
 
    <h1 class="w3-xlarge w3-text-red"><b>Courses</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
	<div class="w3-card-8 w3-round w3-cyan w3-padding-large w3-text-white">
	<p class="w3-large w3-border-bottom">BTech.</p>
	<p class="w3-justify w3-medium">
	
	The four-year course that lead to a degree in Bachelor of Technology (B.Tech) in Computer Science Engineering, adopt a University-mandated semester system of 8 semesters. Each semester is of 16 weeks duration. University examinations are held at the end of each semester.

<br/><br/>
To Join :
<br/><br/>
Student should pass through EAMCET and have to attend the councilling to join in to the college.All the certificates of the students should be handedover to the college.
	
	</span>
	</div>
<br/>
	<table class="w3-table w3-striped w3-card-8">
	<tr class="w3-cyan w3-text-white">
	<th>Stream</th>
	<th>Intake</th>
	<th>B Category</th>
	</tr>
	<tr>
	<th>BTech.</th>
	<th>60</th>
	<th>18</th>
	</tr>
	<!--
	<tr>
	<th>MTech (CSE)</th>
	<th>18</th>
	<th>5</th>
	</tr>
	<tr>
	</tr>
	-->
	
	</table>  
 
  </div>

  <!-- Designers -->
 
  <div class="w3-container" id="faculty">
 
    <h1 class="w3-xlarge w3-text-red"><b>Faculty</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
  
	<table class="w3-table w3-card-8 w3-round w3-striped w3-hoverable">
<tr class="w3-cyan">
  <th>S No.</th><th>	Name of Faculty</th><th>	Designation</th><th>Qualification</th></tr><tr>
  <th>1.</th><th>	Dr. Surya Kalyan Garimella	</th><th>Prof., HOD.</th><th>	M.Tech.,Ph.D.</th></tr><tr>  
  <th>2.</th><th>Sri. M R Lakshmana Rao	</th><th>Asso. Prof.</th><th>	M.E.</th></tr><tr>
  <th>3.</th><th>	Sri. B. Anand Swaroop</th><th>	Sr.Asst. Prof.</th><th>	M.Tech</th></tr><tr>
  <th>4.</th><th>	Sri. B. Nooka Raju</th><th>	Asst. Prof.	</th><th>M.Tech</th></tr><tr>
  <th>5.</th><th>	Sri. Arun Tez</th><th>	Asst. Prof.</th><th>	M.Tech.</th></tr><tr>
  <th>6.</th><th>	Sri. S.D. Asha Mahesh</th><th>	Asst. Prof.</th><th>	M.Tech.</th></tr><tr>
  <th>7.</th><th>	S.Sivasankar	</th><th>Asst. Prof.</th><th>	M.Tech.</th></tr><tr>
  <th>8.</th><th>	Ms.P.Lalitha	</th><th>Asst. Prof.</th><th>	M.E.</th></tr><tr>
  <th>9.</th><th>	Ms.K.Haripriya</th><th>	Asst. Prof.</th><th>	B.Tech</th></tr><tr>
  <th>10.</th><th>	Sri.N.Naresh</th><th>	Asst. Prof.</th><th>	B.Tech</th></tr><tr>
  <th>11.</th><th>	Mrs.P.Renuka</th><th>	Asst. Prof.</th><th>	M.Tech.</th></tr><tr>
  <th>12.</th><th>	Mrs.O.Deepthi</th><th>	Asst. Prof.</th><th>	M.Tech.</th></tr><tr>
  <th>13.</th><th>	Ms.P.Uttara Santoshi	</th><th>Asst. Prof.</th><th>	B.Tech.</th></tr>
  <th>14.</th><th>	Ms.S.Jeevan Deepika</th><th>	Asst. Prof.	</th><th>B.Tech.</th></tr>

</table>

  </div>
  <!-- The Team -->
 <div class="w3-container" id="workshops">
 
    <h1 class="w3-xlarge w3-text-red"><b>Workshops and Seminars</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
  
 
 	<?php
$i=0;
$myFile = "files/eee/workshops.txt";
$lines = file($myFile);//file in to an array

foreach($lines as $line) 
{	
    $var = explode(':', $line, 2);
    $com[$var[0]] = $var[1];
}
for($i=1;$i<=$com['numberofitems'];$i++)
	

echo '
<div class="w3-card-8 w3-round w3-padding-8">
	<div class="w3-row">
	<div class="w3-col m4 l4">
	<div class="w3-padding">
	<img src="images/civil/workshops/'.$i.'/1.jpg" width="100%" class="w3-border w3-quarter w3-round" onClick="onClick(this)"/>
	<img src="images/civil/workshops/'.$i.'/2.jpg" width="100%" class="w3-border w3-quarter w3-round" onClick="onClick(this)"/>
	<img src="images/civil/workshops/'.$i.'/3.jpg" width="100%" class="w3-border w3-quarter w3-round" onClick="onClick(this)"/>
	<img src="images/civil/workshops/'.$i.'/4.jpg" width="100%" class="w3-border w3-quarter w3-round" onClick="onClick(this)"/>
	</div>
	</div>
	<div class="w3-col m8 l8">
	<h1 class="w3-border-bottom">'.$com['name-'.$i].'</h1>
	<span><i class="material-icons">event</i>'.$com['date-'.$i].'</span><br/>
	<span><i class="material-icons">account_circle</i>'.$com['person-'.$i].'</span><br/>
	<p>'.$com['description-'.$i].'</p>
	</div>
	</div>
</div>
';
?>
</div>
  <!-- Packages / Pricing Tables -->

  <!-- Contact -->
  <div class="w3-container" id="labs">
 
    <h1 class="w3-xlarge w3-text-red"><b>Labs</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
	
	<div class="">
  
  <p class="w3-padding">The Department of Electrical & Electronics Engineering has 5 A.C. Electrical Equipment Labs with latest equipments/computers in each lab, 5 Class Rooms & 1 E-class Room, 3 Faculty Rooms and a Departmental Library with 100 volumes of books related to B.Tech(EEE).</p>

 <?php $arr =array();
	
	$folder2=$folder='images/hbs/labs';
	$i=0;
	if ($handle = opendir($folder))
 {
    $blacklist = array('.', '..', 'somedir', 'somefile.php');
    while (false !== ($file = readdir($handle))) {
        if (!in_array($file, $blacklist)) {
			$arr[$i]= $file;
			$i++;
			}
		}
	}
	else {echo '<p>Its lonely, there are no images here.</p>';}

for($i=0;$i<sizeof($arr);$i++)
{	
$folder_path = $folder2.'/'.$arr[$i]; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 echo '<div class="w3-cyan w3-container w3-round">
		<header class="w3-container">
			<h1 class="w3-border-bottom w3-border-white">'.$arr[$i].'</h1></header>
			<div class="wow animated w3-animate-left">
';
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
			<img class="w3-card-4 w3-border-white w3-round w3-topbar w3-bottombar w3-rightbar w3-leftbar"src="'.$file_path.'" width="100%" onClick="onClick(this)" alt="'.$file.'"/>
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
 
<!----------------->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by<br/><img src="images/logo/logo.png"/></p></div>
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black w3-padding-0" onClick="this.style.display='none'">
    <span class="w3-closebtn w3-text-white w3-opacity w3-hover-opacity-off w3-xlarge w3-container w3-display-topright">×</span>
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
$('#mySidenav').on('click', 'a', function(event){
   event.preventDefault();

    $('html,body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top-50
    }, 500);
});

//slider
$('.slider').slick({
  dots: false,
  arrows:false,
  autoplay:true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplaySpeed:2000,  
  infinite: true,
  pauseOnFocus: false,
  pauseOnHover: false,
  easing:'ease-in-out',
  edgeFriction:1,
  cssEase:'ease-in-out',
  mobileFirst:true,
  speed:1000
});

//wow
var wow=new WOW({
 boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
offset:       300}
);
wow.init();
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
