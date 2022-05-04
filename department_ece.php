<!DOCTYPE html>
<html>
<title>ECE department</title>
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
<script src="js/wow.min.js"></script>
<script src="js/slick.js"></script>
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
		<img src="logo.png" style="width:100%"/><br/>ECE
	</div>
  <a href="#about"		 onclick="w3_close()" class="w3-padding w3-hover-white w3-border-bottom">About ECE</a> 
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
  <img src="images/ece/slider/slide1.jpg"/>
  <img src="images/ece/slider/slide2.jpg"/>
  <img src="images/ece/slider/slide3.jpg"/>
  <img src="images/ece/slider/slide4.jpg"/>
  </div>

   <div class="w3-container" id="about">
 
    <h1 class="w3-xlarge w3-text-red"><b>About ECE</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
   <div class="w3-row w3-card-8 w3-round w3-padding-large">
	<div class="w3-col m4 l4">
		<img src="images/ece/hod/hod.jpg" style="width:100%;border-radius:50%;"/>
	</div>
		<div class="w3-col m8 l8 w3-padding-large w3-align-left"> 
		<span class="w3-xlarge">HOD</span><br/>
		<span class="w3-large w3-border-bottom">Sri.K.Suresh,<br/> M.Tech,(Ph.D.), Asso. Prof. & HOD,</span><br/>
		<span class="w3-codespan">hodece@cec.ac.in</span>
		<p class="w3-hide-small w3-align-left w3-medium w3-text-black">
	The Department of Electronics and Communication Engineering was started in the year 2002. Since then it has grown several folds and has become the most sought after department in the  Engineering college (CEC). The department maintains a closed liaison with industries and ensures that students are trained as per the current needs of the society.  Engineering college (CEC) undertakes the tasks of designing the curriculum, implementing the class work and laboratories, conducting the examinations etc. The department will be accredited by NBA in very soon, but the college got accreditation for a period of three years.  A PG course, M.Tech in Digital Electronics and Communication systems was started in department with effect from 2008-09 batch. One more PG course will be introduced in the department with effect from the next academic year 2010-2012 under the TEQIP project. 
		</p>
  
  </div>
  </div>
  </div>
  
 <!-- Chairman-->
<div class="w3-container" id="vision">
 
    <h1 class="w3-xlarge w3-text-red"><b>Vision</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
  
  <div class="w3-panel w3-white w3-leftbar w3-pale-blue w3-border-cyan w3-padding-16">
The ECE department focuses on high quality education in the fields of science and technology with an objective to mould young students as future leaders for the promotion of economic and industrial growth of the country and to play a creative role in the society.
  
  </div>
  </div>

  <!-- Services -->
<div class="w3-container" id="mission">
 
    <h1 class="w3-xlarge w3-text-red"><b>Mission</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
  
  <div class="w3-panel w3-white w3-leftbar w3-pale-blue w3-border-cyan w3-padding-16">

  <p class="">To focus on<br/>

	1) Imparting skills on cutting- edge technologies<br/>
    2) Innovative teaching-learning processes<br/>
    3) Quality research in new and emerging technologies <br/>
    4) Forging strong industry-academic linkage<br/>
</p>
  
  </div>
  </div>

  <!-- Designers -->
  
  <div class="w3-container" id="courses">
 
    <h1 class="w3-xlarge w3-text-red"><b>Courses</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
	<div class="w3-card-8 w3-round w3-cyan w3-padding-large w3-text-white">
	<p class="w3-large w3-border-bottom">BTech.</p>
	<span class="w3-medium">
	
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
	<th>180</th>
	<th>54</th>
	</tr>
	<!---
	<tr>
	<th>MTech (ECE)</th>
	<th>18</th>
	<th>5</th>
	</tr>-->
	<tr>
	<th>Diploma (DECE)</th>
	<th>120</th>
	<th>-</th>
	</tr>
	
	</table>  
  
  </div>

  
 <!----------------->
  <div class="w3-container" id="faculty">
 
    <h1 class="w3-xlarge w3-text-red"><b>Faculty</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
  
	<table class="w3-table w3-card-4 w3-round w3-striped w3-hoverable">
<tr class="w3-cyan w3-text-white">
  <th>S No.</th><th>	Faculty</th><th>	Designation</th><th>Qualification</th></tr><tr>
  <th>1.</th><th>	Sri.K.Suresh	</th><th>H.O.D.	</th><th>M.Tech, Ph.D.</th></tr><tr>  
  <th>2.</th><th>	Sri. Dr. S.N.V.S. Prasad</th><th>	Asso. Prof. 	</th><th>M.Tech, Ph.D.</th></tr><tr>
  <th>3.</th><th>	Sri S.P.K. Chaitanya</th><th>	Asst. Prof.	</th><th>M.Tech.</th></tr><tr>
  <th>4.</th><th>	Ms. V. Ambica</th><th>	Asst. Prof.	</th><th>M.Tech.</th></tr><tr>
  <th>5.</th><th>	Sri. E. Raju</th><th>	Asst. Prof.	</th><th>M.Tech.</th></tr><tr>
  <th>6.</th><th>	Ms.N.Kalpana	</th><th>Asst. Prof.	</th><th>M.Tech.</th></tr><tr>
  <th>7.</th><th>	Sri Riyaz Ali</th><th>	Asst. Prof.</th><th>	M.Tech.</th></tr><tr>
  <th>8.</th><th>	Ms. V. Pavani</th><th>	Asst. Prof.</th><th>	M.Tech.</th></tr><tr>
  <th>9.</th><th>	Sri. Ch.Chaitanya</th><th>	Asst. Prof.</th><th>	M.Tech.</th></tr><tr>
  <th>10.</th><th>	Ms. K.Goutami</th><th>	Asst. Prof.	</th><th>M.Tech.</th></tr><tr>
  <th>11.</th><th>	Ms.G.Indumati</th><th>	Asst. Prof.	</th><th>M.Tech.</th></tr><tr>
  <th>12.</th><th>	Sri. A.Rajasekhar Reddy</th><th>	Asst. Prof.	</th><th>M.Tech.</th></tr><tr>
  <th>13.</th><th>	Sri. K.Suribabu</th><th>Asst. Prof.</th><th>	M.Tech.</th></tr><tr>
  <th>14.</th><th>	Sri. K.Indira</th><th>	Asst. Prof.	</th><th>B.Tech.</th></tr><tr>
  <th>15.</th><th>	Ms.K.Harika	</th><th>Asst. Prof.</th><th>	B.Tech.</th></tr>

</table>
  </div>
  <!-- The Team -->
 <div class="w3-container" id="workshops">
 
    <h1 class="w3-xlarge w3-text-red"><b>Workshops and Seminars</b></h1>
    <hr style="width:100px;border:2px solid red" class="w3-round">
  
 
 	<?php
$i=0;
$myFile = "files/ece/workshops.txt";
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
  <p class="w3-padding">The Department of Electronics & Communication Engineering has 5 A.C. Electronics Equipment Labs with latest equipments/computers in each lab, 8 Class Rooms & 1 E-class Room, 3 Faculty Rooms and a Departmental Library with 150 volumes of books related to B.Tech(ECE) & M.Tech(ECE).</p>
<?php $arr =array();
	
	$folder2=$folder='images/ece/labs';
	$i=0;
	if ($handle = opendir($folder)) {
    $blacklist = array('.', '..', 'somedir', 'somefile.php');
    while (false !== ($file = readdir($handle))) {
        if (!in_array($file, $blacklist)) {
			$arr[$i]= $file;
			$i++;
		}
    }
}

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
  
 
<!----------------->
</div>
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
//wow
var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       300,          // distance to the element when triggering the animation (default is 0)
  }
);
wow.init();

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
