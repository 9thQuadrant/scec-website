<!DOCTYPE html>
<html>
<title>Sri Chaitanya Engineering College</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/slick.js"></script>
<style>
*{-webkit-user-select:none;}
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height:1.8;
}
::-webkit-scrollbar              { background-color:transparent;width:10px;z-index:5;}
::-webkit-scrollbar-button       { display:none; }
::-webkit-scrollbar-track-piece  { background-color:ghostwhite;background-image:-webkit-linear-gradient(90deg,orange,orange,blue); }
::-webkit-scrollbar-thumb        { background-color:#26C6DA;
									padding:0px;
									-webkit-transition:background-color .5s linear;
									border-radius:25px;
									cursor: pointer;
								}
								
::-webkit-scrollbar-thumb:hover{	background-color:red; }
::-webkit-scrollbar-corner       {  }
::-webkit-resizer                {  }

::-moz-scrollbar              { background-color:transparent;width:10px;z-index:5;}
::-moz-scrollbar-button       { display:none; }
::-moz-scrollbar-track-piece  { background-color:ghostwhite;
								background-image:-webkit-linear-gradient(90deg,orange,orange,aqua); }
								background-image:-moz-linear-gradient(90deg,orange,orange,aqua); }
::-moz-scrollbar-thumb        { background-color:#26C6DA;
									padding:0px;
									-webkit-transition:background-color .5s linear;
									-moz-transition:background-color .5s linear;
									border-radius:25px;
									cursor: pointer;
								}
								
::-moz-scrollbar-thumb:hover{	background-color:red; }
::-moz-scrollbar-corner       {  }
::-moz-resizer                {  }

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
	z-index:2;
    //background-size: cover;
}
.bg-img{
	z-index:-1;
	width:100%;
	height:400px;
    background-image: -webkit-radial-gradient(cyan,blue);
	
	}
/* First image (Logo. Full height) */
.bgimg-1 {
	z-index:1;
    background-image: url('images/index/slider/slide1.jpg');
	background-position-y:150px;
	width:100%;
	height:400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}
.w3-dropdown-hover{z-index:10;}
/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
.marquee{opacity:0;margin-left:400px;}
.marquee a{display:block;width:auto;}
.material-icons{vertical-align:middle;}
.w3-justify{text-align:justify;}
.departments div{cursor:pointer;}
.w3-top{z-index:1000;}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-cyan w3-card-4">
<ul class="w3-navbar" id="myNavbar">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-hover-black" href="javascript:void(0);" onClick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
    </li>
    <li class="w3-white"><a href="index.php" class="w3-white">Home</a></li>
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

<!-- First Parallax Image with Logo Text -->
<div>
<div id="w3-display-container">
<div class="w3-display-middle" style="z-index:1000">
<img src="logo.png"/>
</div>
<div class="slider">
<img src="images/index/slider/slide1.jpg"/>
<img src="images/index/slider/slide2.jpg"/>
<img src="images/index/slider/slide3.jpg"/>
<img src="images/index/slider/slide4.jpg"/>
<img src="images/index/slider/slide5.jpg"/>
<img src="images/index/slider/slide6.jpg"/>
<img src="images/index/slider/slide7.jpg"/>
</div>
</div>
</div>

<div class="w3-row-padding w3-padding-16 w3-card-4 w3-white w3-animate-top">
	<div class="w3-quarter">
	<div class="w3-center">
		<span class="w3-large w3-border-bottom w3-border-red">LATEST NEWS</span>
	</div>
	</div>
	<div class="w3-rest">
<div id="marquee" class="w3-animate-top">
<?php
$arr = Array();
$myFile = "files/index/marquee.txt";
$lines = file($myFile);//file in to an array
foreach($lines as $line)
{	
    $var = explode(':', $line);
    $arr[$var[0]] = $var[1];
}
$n=$arr['numberOfItems'];
for ($i=1;$i<=$n;$i++){
	$m='marquee-'.$i;
	echo '<a href="events.php?event='.$i.'" class="w3-leftbar w3-border-blue w3-center w3-hover-blue" style="display:inline-block">'.$arr[$m].'</a>';
}
?>
</div>
</div>
</div>	

<!-- Container (About Section) -->
<br/>

<div class="w3-container  w3-center w3-padding-16">
 <h1><span class="w3-border-bottom w3-border-red">EVENTS</span></h1> 
 <div class="w3-row-padding">
	<div class="w3-col m1 l1 s1">
		<div class="w3-padding-128 w3-hover-light-grey" onclick="$('#eventslider').slick('slickPrev');">
		<i class="w3-xxxlarge material-icons w3-hover-light-grey">keyboard_arrow_left</i>
		</div>
	</div>
	<div class="w3-col m10 l10 s10 w3-container w3-padding-32" style="overflow:hidden" id="eventslider">

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
	
	
	echo 
		'<div class="w3-quarter w3-padding">
		<a href="gallery.php#'.$arr[$i].'">
	 	<div class="w3-card-4 w3-cyan w3-round w3-large w3-padding">
	 	<img src="gallery/'.$arr[$i].'/index.jpg" width="100%" class="w3-round wow animated w3-animate-zoom"/>
	 	<span class="w3-center">'.$arr[$i].'</span><br/>
		<i class="w3-xlarge material-icons w3-text-white">burst_mode</i>
	 	</div>
		</a>
	 	</div>';
	?>
		
	</div>
	<div class="w3-col m1 l1 s1">
		<div class="w3-padding-128 w3-hover-light-grey" onclick="$('#eventslider').slick('slickNext');">
		<i class="w3-xxxlarge material-icons">keyboard_arrow_right</i>
		</div>
	</div>
</div>
</div>
<!----our speciaties----------->

<div class="w3-container w3-row-padding w3-cyan w3-padding-32">

	<div class="w3-quarter w3-center">
	<p class="w3-text-white w3-xlarge w3-border-bottom">Our Specialties</p>
	<i class="w3-text-white material-icons wow animated w3-animate-zoom" style="font-size:200px">stars</i>
	<p class="w3-padding w3-justify">
	Sri Chaitanya Engineering College has a periodic programs in forging strategic partnerships with corporate houses, industrial organizations, research centres and training organizations to attune to its academic programmes and tailor its training methodologies to the practical needs of the society.
	</p>
	
	</div>
	<div class="w3-quarter w3-center">
	<p class="w3-xlarge w3-border-bottom w3-text-white">Facilities</p>
	<i class="w3-text-white material-icons wow animated w3-animate-zoom" style="font-size:200px">domain</i>
	<p class="w3-padding w3-justify">
	Sri Chaitanya Engineering College has several eminent engineering professionals drawn from renowned academia as well as industries actively participating in the conduct of the programmes
	</p>
	
	
	</div>
	<div class="w3-quarter w3-center">
	<p class="w3-xlarge w3-border-bottom w3-text-white">Placements</p>
	<i class="w3-text-white material-icons wow animated w3-animate-zoom" style="font-size:200px">verified_user</i>
	<p class="w3-padding w3-justify">
	This college has a specialty in imparting Soft Skills as a value addition to the potential engineers so that their scope of employability values is enhanced in the job world.	
	</p>
	</div>
	<div class="w3-quarter w3-center">
	<p class="w3-xlarge w3-border-bottom w3-text-white">R &amp; D</p>
	<i class="w3-text-white material-icons wow animated w3-animate-zoom" style="font-size:200px">timeline</i>
	<p class="w3-padding w3-justify">
	A soft skills expert is under the payrolls as a full time trainer to inculcate soft skills like personality development, communication skills
	</p>
	</div>

</div>
<!----------------->
<div class="w3-container w3-center">
<p class="w3-xxlarge w3-border-bottom w3-padding-16">STUDENTS LIFE</p>
<div class="w3-row-padding">


	<div class="w3-col m4 l4 s4">
	<div class=" w3-cyan w3-card-8 w3-padding-16 w3-round">
	<p class="w3-xlarge w3-border-bottom w3-text-white">Students Study</p>
	<i class="w3-text-white material-icons" style="font-size:200px">book</i>
	<p class="w3-justify w3-padding wow animated w3-animate-bottom">
	Established in 2009, Sri Chaitanya Engineering College marks yet another effort on the part of the Chaitanya Group is located in an over 50 acre naturally scene idyllic environment near Kommadi in Greater Visakhapatnam. Though a fledgling, the Institute has earned a place of esteem and the patronage of reputed business organizations within a short time. To make the life at CEC pleasant and comfortable for its students.</div>
	</p>
	</div>

	<div class="w3-col m4 l4 s4">
	<div class=" w3-cyan w3-card-8 w3-padding-16 w3-round">
	<p class="w3-xlarge w3-border-bottom w3-text-white">Campus Drive</p>
	<i class="w3-text-white material-icons" style="font-size:200px">donut_small</i>
	<p class="w3-justify w3-padding wow animated w3-animate-bottom">
	The Campus is provided with the finest facilities and educational resources. The aims, approach and activities of CEC are guided by all its stakeholders and Management - students, industry and the society. The strengths and specialties of CEC are enhanced by its network of renowned institutions and business organizations. In the dawn of the technological millennium, CEC is poised to seize the opportunities to emerge as a national.
	</p>
	</div>
	</div>
	
	<div class="w3-col m4 l4 s4">
	<div class=" w3-cyan w3-card-8 w3-padding-16 w3-round">
	<p class="w3-xlarge w3-border-bottom w3-text-white">Placements</p>
	<i class="w3-text-white material-icons" style="font-size:200px">thumb_up</i>
	<p class="w3-justify w3-padding wow animated w3-animate-bottom">
	The programmes are designed and delivered to meet industry's criteria for employment. They lay stress on creative thinking and problem solving skills. They emphasize written and oral communication, teamwork, design, time management, computer utilization and communication. They aim at education for career-long learning, Giving students the educational tools to enable them to deal with.
	</p>
	</div>
	</div>


</div>

</div>
<!-- Container (Portfolio Section) -->
<div class="w3-container w3-padding-64">
  <p class="w3-xxlarge w3-center"><span class="w3-border-bottom w3-border-red">OUR DEPARTMENTS</span></p>
  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center departments">
    
	<div class="w3-col m2 l2 s2 wow animated w3-animate-left">
		<a href="department_cse.php">
		<div class="w3-card-4 w3-text-white w3-cyan w3-padding-32 w3-round">
		<i class="w3-xxxlarge material-icons md-48">phonelink</i>
		<p>CSE</p>
		</div>
		</a>
	</div>

	<div class="w3-col m2 l2 s2 wow animated w3-animate-top">
		<a href="department_eee.php">
		<div class="w3-card-4 w3-cyan w3-padding-32 w3-round w3-text-white">
		<i class="w3-xxxlarge material-icons md-48">wb_incandescent</i>
		<p>EEE</p>
		</div>
		</a>
	</div>

	<div class="w3-col m2 l2 s2 wow animated w3-animate-zoom">
		<a href="department_ece.php">	
		<div class="w3-card-4 w3-cyan w3-padding-32 w3-round w3-text-white">
		<i class="w3-xxxlarge material-icons md-48">memory</i>
		<p>ECE</p>
		</div>
		</a>
	</div>

	<div class="w3-col m2 l2 s2 wow animated w3-animate-zoom">
		<a href="department_mech.php">
		<div class="w3-card-4 w3-cyan w3-padding-32 w3-round w3-text-white">
		<i class="w3-xxxlarge material-icons md-48">settings</i>
		<p>MECH</p>
		</div>
		</a>
	</div>
  

	<div class="w3-col m2 l2 s2 wow animated w3-animate-bottom">
		<a href="department_civil.php">
		<div class="w3-card-4 w3-cyan w3-padding-32 w3-round w3-text-white">
		<i class="w3-xxxlarge material-icons">location_city</i>
		<p>CIVIL</p>
		</div>
		</a>
	</div>

	<div class="w3-col m2 l2 s2 wow animated w3-animate-right">
		<a href="department_hbs.php">
		<div class="w3-card-4 w3-cyan w3-padding-32 w3-round w3-text-white">
		<i class="w3-xxxlarge material-icons md-48">people_outline</i>
		<p>HBS</p>
		</div>
		</a>
	</div>
  
  </div>

</div>
<!------>


<!------>
<div class="w3-row w3-container w3-cyan w3-padding-32">
<div class="w3-col m6 l6 w3-container">

<div class="w3-row w3-round w3-padding-large">
	<div class="w3-col m4 l4">
		<img src="images/about/Chairman.jpg" style="width:100%;border-radius:50%;"/>
	</div>
	<div class="w3-col m8 l8 w3-padding-large w3-align-left"> 
		<span class="w3-xlarge w3-text-white">CHAIRMAN'S MESSAGE</span><br/>
		<span class="w3-medium w3-text-white w3-border-bottom">Dr. K.V.V Satyanarayana Raju,<br/>Ex-MLC, Ex-WHIP , A.P. Legislative Council.</span><br/>
		<p class="w3-hide-small w3-align-left w3-medium w3-text-black w3-justify wow animated w3-animate-top">
	Founder & Chairman, Sri Chaitanya Group Torpedoed by the tides of time, today the firmament of higher education is in agreat ferment. In the wake of intense shake-up triggered by the hidden fault-lines, many engineering colleges and institutions offering professional courses have been swept of their feet in recent times. Even more are expected to follow suit.Proliferation has given way to purgation. Few could come to terms unscathed. Fewer could even think of consolidation.
		</p>
  
  </div>
</div>
</div>

<div class="w3-col m6 l6 w3-container">
<div class="w3-row">
<div class="w3-col m12 l12 w3-padding-medium">
		<div class="w3-padding">
		<p class="w3-xlarge w3-center w3-border-bottom w3-text-white"><i class="w3-xxxlarge material-icons">message</i><br/>COLLEGE MESSAGE</p>
		<p class="w3-medium wow animated w3-animate-bottom w3-justify">Established in 2009, Sri Chaitanya Engineering College marks yet another effort on the part of the Chaitanya Group is located in an over 50 acre naturally scene idyllic environment near Kommadi in Greater Visakhapatnam. Though a fledgling, the Institute has earned a place of esteem and the patronage of reputed business organizations within a short time. To make the life at CEC pleasant and comfortable for its students.
		</p>
		</div>
	</div>
</div>	
	<div class="w3-row-padding">

		<div class="w3-col m6 l6 wow animated w3-animate-left">
		<p class="w3-xlarge w3-center w3-border-bottom w3-text-white"><i class="w3-xxxlarge material-icons">remove_red_eye</i><br/>VISION</p>
		<p class="w3-medium w3-justify">To evolve and emerge into a premier and the most preferred technical institution at every level of academic pursuit across the country.
		</p>
		</div>

		<div class="w3-col m6 l6 wow animated w3-animate-right">
		<p class="w3-xlarge w3-center w3-border-bottom w3-text-white"><i class="w3-xxxlarge material-icons">info</i><br/>MISSION</p>
		<p class="w3-medium w3-justify">To foster human excellence imbued with integrity, loyalty and the spirit of service to mankind through quality education, steeped in Indian ethos & values.
		</p>
		</div>
	

</div>
</div>
</div>
<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-text-white w3-opacity w3-hover-opacity-off w3-xxlarge w3-container w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
<!----->



<div class="w3-row w3-center w3-black w3-padding">
  <div class="w3-col m4 l4 w3-section">
  <img src="images/index/bar/aicte.jpg"/>
    <p class="w3-large">AICTE</p>
    All India Council for Technical Education
  </div>

  <div class="w3-col m4 l4 w3-section">
  <img src="images/index/bar/iso.png"/>
    <p class="w3-large">AICTE</p>
    ISO 9001:2008
  </div>
  <div class="w3-col m4 l4 w3-section">
  <img src="images/index/bar/jntuk.png" width="50%"/>
    <p class="w3-large">JNTU-K</p>
    Affliated to JNTU-K
  </div>
</div>

<!-------------->

<div class="w3-padding-128">
<p class="w3-center w3-xxlarge">
<span class="w3-border-bottom w3-border-red">PLACEMENTS</span>
</p>

<div class="w3-center" id="placements">
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
for($i=1;$i<=sizeof($com);$i++)
echo '
    
	<div class="w3-quarter w3-padding">
		<a href="placements.php#overview">
		<div class="w3-card-4 w3-white w3-padding-8 w3-round">
		<img width="100%" src="images/index/companies/'.$com['company-'.$i].'.png"/><br/>
		'.$com['company-'.$i].'
		</div>
		</a>
	</div>
	
    ';
echo '</div>';
?>

</div>


<!-- Container (Contact Section) -->

<!-- Footer -->
  
<div class="w3-container w3-padding-8 w3-card-8 w3-cyan">
  <div class="w3-row-padding">
    <div class="w3-col m3 l3">
	<h1 class="w3-xlarge w3-border-bottom">Important Links</h1>
	<a href="alumni.php"><p class="w3-medium w3-text-white w3-hover-text-black">Alumni</p></a>
	<a href="gallery.php"><p class="w3-medium w3-text-white w3-hover-text-black">Gallery</p></a>
	<a href="placements.php"><p class="w3-medium w3-text-white w3-hover-text-black">Placements</p></a>
	<a href="NSS.php"><p class="w3-medium w3-text-white w3-hover-text-black">NSS</p></a>
	</div>
	<div class="w3-col m3 l3 w3-left">
	<h1 class="w3-xlarge w3-border-bottom">Contact Us</h1>
	Sri Chaitanya Engineering College,<br/>
Chaitanya Valley, <br/>
Kommadi, <br/>
Madhurawada,<br/>
Visakhapatnam - 530043, <br/>
Andhra Pradesh.<br/>
Phone: 9949993477
	</div>
	<div class="w3-col m3">
		<h1 class="w3-xlarge w3-border-bottom">Location</h1>
	<iframe style="border:0;margin:0;padding:0;width:100%;height:inherit;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15193.878724071805!2d83.34333772415681!3d17.816604033847184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a395b9700000001%3A0x521da72988756adc!2sChaitanya+Engineering+College!5e0!3m2!1sen!2sin!4v1474634751454"></iframe>	
	</div>
	<div class="w3-col m3">
		<h1 class="w3-xlarge w3-border-bottom">Connect</h1>
		<a>facebook</a>
	
	</div>
</div>
</div>

<div class="w3-white w3-container w3-padding">
<p class="w3-right">Powered by<br/><img src="images/logo/logo.png"/></p>
</div>
</body>
<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
//window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
   if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        navbar.className = "w3-navbar"+" w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

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
	
//scroll to top
$('.topbtn').on('click', 'a', function(event){
   event.preventDefault();

    $('html,body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});
//wow
var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       200,          // distance to the element when triggering the animation (default is 0)
  }
);
wow.init();


//marquee
$('#marquee').slick({
infinite: true,
  arrows:false,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay:true,
  autoplaySpeed:1000,  
});


//event slider
$('#eventslider').slick({
  infinite: true,
  arrows:false,
  slidesToShow: 3,
  slidesToScroll: 2,
  autoplay:true,
  autoplaySpeed:3000,
  pauseOnHover:false
});
//placements slider
$('#placements').slick({
  infinite: true,
  arrows:false,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay:true,
  autoplaySpeed:1000,
  pauseOnHover:false
});

var slideIndex = 1;

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("eventslider");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
}
</script>
</html>
