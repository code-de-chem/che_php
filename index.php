<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chemical Engineering</title>
<link rel="shortcut icon" href="assets/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" </>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/index.css" ></link>
<script type="text/javascript" src="assets/js/index.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/dusts.css"></link>
<script type="text/javascript">
    function beingHovered(current){
        document.getElementById(current).style.visibility = 'visible';
    }
    function hoverEnded(current){
        document.getElementById(current).style.visibility = 'hidden';
    }
    </script>
</head>

<body>
<?php
if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]===1){
    $nav_link_logged = $_SESSION["loggedin"];
    $nav_link_imgUrl = substr($_SESSION["imgUrl"], 3, strlen($_SESSION["imgUrl"]));
    $nav_link_user = $_SESSION["username"];
echo <<<END
    <div class="navigationLink" id="navigationLink" onmouseover="beingHovered('myAccountPopup')" onmouseout="hoverEnded('myAccountPopup')"><span class="glyphicon glyphicon-user"> </span> My Account</div>
    <div id="myAccountPopup" onmouseover="beingHovered('myAccountPopup')" onmouseout="hoverEnded('myAccountPopup')">
    <div id="popupUserImg"><img src='$nav_link_imgUrl'/></div>
    <div id="popupUsername"> $nav_link_user </div>
    <div id="popupUserDeatils">
        <div class="popupUserExtra" id="popupUserAccount">My Account</div>
        <div class="popupUserExtra" id="popupChangePasssword">Change Password</div>
    </div>
</div>
END;
}else{
echo <<<END
    <div class="navigationLink" id="navigationLink"><span class="glyphicon glyphicon-user"> </span><a href="student_login.php"> login/signup</a></div>
END;
}
?>

   

            
<nav id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
   <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-js-navbar-scrollspy">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="#">ChES</a>
   </div>
   <div class="collapse navbar-collapse bs-js-navbar-scrollspy">
      <ul class="nav navbar-nav">
<?php //          <li><a href="#blogs">Blogs and Articles</a></li>?>
        <li class="dropdown">
            <a href="#" id="people" class="dropdown-toggle" data-toggle="dropdown">People
               <b class="caret"></b>
            </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="people">
                <li><a href="other/Faculty.php" tabindex="-1">Faculty</a></li>
                <li><a href="other/Students.php" tabindex="-1">Students</a></li>
            </ul>
         </li>
         <li class="dropdown">
            <a href="#" id="academics" class="dropdown-toggle" data-toggle="dropdown">Academics<b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="academics">
                <li><a href="other/academics.php?acad=ug" tabindex="-1">Under Graduate</a></li>
                <li><a href="other/academics.php?acad=honours" tabindex="-1">Honors</a></li>
                <li><a href="other/academics.php?acad=minors" tabindex="-1">Minors</a></li>
                <li><a href="other/academics.php?acad=pg" tabindex="-1">Post Graduate</a></li>
                <li><a href="other/academics.php?acad=phd" tabindex="-1">PhD Programme</a></li>
            </ul>
         </li>
        <li><a href="other/activities.php">Activities</a></li>
        <li><a href="other/research.php">Research</a></li>
        <li><a href="other/societies.php">Societies</a></li>
        <li><a href="other/AboutUs.php">About us</a></li>
      </ul>
   </div>
</nav>  
  
        <div class="container" id="try">   
  

<div id="banner">
    <div id="dept">CHEMICAL ENGINEERING</div>
    <div id="clg">Indian School Of Mines, Dhanbad</div>
</div>

            <div class="marquee"><span>This is a marquee</span></div>
            

<div id="myCarousel" class="carousel slide" data-interval="7000">
   <!-- Carousel indicators -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
   </ol>   
   <!-- Carousel items -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="assets/images/home/pic1.jpg" alt="First slide"/>
         <div class="carousel-caption">This Caption 1</div>
      </div>
      <div class="item">
          <img src="assets/images/home/pic2.jpg" alt="Second slide"/>
         <div class="carousel-caption">This Caption 2</div>
      </div>
   </div>
   <!-- Carousel nav -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
</div> 

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3" id="rightSponsors">
        <div class="FirstHead">Information For:</div>
            <div class="rightSponsorContent">
                <ul>
                    <li>New &amp; Current Students</li>
                    <li>Prospective Students</li>
                    <li>Prospective Faculty</li>
                    <li>Internships</li>
                    <li>Post docs/Project Assistant</li>
                    <li>Employers</li>
                    <li>ChES</li>
                    <li>IIChE</li>
                </ul>
            </div>
    </div>
    
        <div class="col-lg-6 col-md-6 col-sm-6" id="centerContent">
        	<div id="defineChem">
                    <div class="FirstHead">What is Chemical Engineering?</div>
                <div id="definChemContent">
                Chemical engineering is the profession in which a knowledge of mathematics, chemistry, and other natural sciences gained by study, experience, and practice is applied with judgment to develop economic ways of using materials and energy for the benefit of mankind. (AIChE)
   		<!--<br/><br/>
                Chemical Engineering is you, me and all that surrounds us! One must look beyond chemical reactors and distillation columns to realize that the food we consume, the cosmetics we wear, the detergent we wash our clothes with are all a result of engineering of materials and their chemical reactions. In this sense, Chemical Engineering is one of the broadest and the most â€˜inclusiveâ€™ branches of engineering that keeps redefining itself as it finds applications into new areas of modern technology.
                --></div>
            </div>
        </div>
    
        <div class="col-lg-3  col-md-3 col-sm-3" id="rightRecent">
            <div class="FirstHead">News</div>
        	<ul id="recentList">
            	<li>Chemical Symposium</li>
                <li>Concetto</li>
            </ul>
        	
        </div>
        

        
</div>   
    
    <div class="well" id="footer">
        <div class="row">
            <div class="col-lg-2">
                <div class="footer-head">About</div>
                <div class="footer-Content">    
                    <ul>
                        <li>Mission</li>
                        <li>Origins and Evolution</li>
                        <li>What is ChemE?</li>
                        <li>Student Life</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-head">People</div>
                <div class="footer-Content">    
                    <ul>
                        <li>Faculty</li>
                        <li>Staff</li>
                        <li>Students</li>
                        <li>Alumni</li>
                        <li>Former Faculty</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-head">Academics</div>
                <div class="footer-Content">    
                    <ul>
                        <li>Programmes</li>
                        <li>Courses</li>
                        <li>Admissions</li>
                        <li>ChES</li>
                        <li>IIChE</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-head">Research</div>
                <div class="footer-Content">    
                    <ul>
                        <li>Areas</li>
                        <li>Labs/Groups</li>
                        <li>Sponsored Projects</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-head">News/Events</div>
                <div class="footer-Content">    
                    <ul>
                        <li>In Media</li>
                        <li>Seminar Schedule</li>
                        <li>Workshops/Conferences</li>
                        <li>Other Events</li>
                        <li>Past Events</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-head">Resources</div>
                <div class="footer-Content">    
                    <ul>
                        <li>Equipments</li>
                        <li>Library</li>
                        <li>Computing/Workshop</li>
                        <li>Facilities</li>
                    </ul>
                </div>
            </div>
        </div>
    visitors: 
    <div id="footerBar">
    	Site Design and Content Managed by Chemical Engineering Students, ISM Dhanbad
    </div>
    </div>
</div>
    
    
    
</body>
<script type="text/javascript">
    $('.carousel').carousel({interval: 3000})
</script>
</html>
