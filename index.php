<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Movie Theather</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<style type="text/css">
  
.checked {
    color: orange;
}
body{
  background-image: url("https://www.excelsiorinstitute.org/wp-content/uploads/2016/08/website-design-slider-background-stockton.jpg");

    background-attachment: fixed;
    background-size: 100%;
    color: white;
    text-align: center;
    font-family:"Comic Sans MS";
}
#heyjude{
  color:violet
}

#aadi{
  color:green;
}
body h1{
  color:orange; font-size:60px;
}
.topnav input[type=text] {
    float: right;
    padding: 6px;
    border: 1px solid #ccc;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;
}
.navbar-brand{
   background-color: #333;
    overflow: hidden;
  float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;}
.topnav {
    opacity:0.86;
    background-color: #4B9BE2;
    overflow: hidden;
}
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.topnav a:hover {
    background-color: #ddd;
    color: black;
}


</style>

  <body bgcolor="#E6E6FA">
<h1> CINEHALL </h1>
<div>
<div class="topnav" id="myTopnav">
<a href="#Ktu"><font face="Comic Sans MS"><b>Movie Theather</b></font></a>  
<a href="#home" class="active"><font face="helvetica">Home</font></a>
<a href="https://ktu.edu.in/home.htm"><font face="helvetica">Shows</font></a>
<a href="http://www.ktustudents.in/p/contact-us.html"><font face="helvetica">Book</font></a>
<a href="http://www.ktustudents.in/2015/08/about-ktu.html"><font face="helvetica">Contact</font></a>
<a href="index.php?logout='1'"><font face="helvetica" color="red">logout</font></a>

<input type="text" placeholder="Search..."></input>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<h2 id="aadi">AADHI</h2>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

<p style="text-align=right">AADHI REVIEW: In one of the scenes of Aadhi, Pranav Mohanlal's character, a struggling musician, says, "Talent is not enough, you need to be lucky too, to get good opportunities." While his character might not have been very fortunate, Pranav definitely has reasons to smile as he gets a launch pad that banks the maximum on the skills that make him stand out. Elaborately lining up his talent in music, parkour, gymnastics and more, Aadhi is tailor-made for him and even has an ounce of his dad, both acting and music-wise, to top it all. It's a dream package, to begin with.</p>


<img src="https://www.hindustantimes.com/rf/image_size_960x540/HT/p2/2017/11/06/Pictures/_fa235a3a-c30a-11e7-94e0-d13ec9d58666.jpg" height="200" width="400">
<h2 id="heyjude">HEY JUDE</h2>
<hr>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star  checked"></span>
<span class="fa fa-star"></span>


<p>HEY JUDE REVIEW: The film starts with Jude, who has Asperger's Syndrome. His father Dominic (Siddique), sibling Andrea and others are baffled by his behaviour as he is quite fastidious. His bizarre ways test the patience of everyone, except his mother Maria (Neena Kurup).</p>
<img src="http://static.sify.com/cms/image/sb4jgvfghjfae.jpg" height="200" width="400">
</div>


<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>
