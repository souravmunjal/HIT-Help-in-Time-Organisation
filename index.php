<!doctype>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  background:#f2f2f2;
  font-family: Arial, Helvetica, sans-serif;
}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.header {
  overflow: hidden;
  background-color: grey;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}
.header a.logo:hover {
  background-color: grey;
  color: black;
}
.header a:hover {
  background-color: white;
  color: black;
}

.header a.active {
  background-color: orange;
  color: white;
}

.header-right {
  float: right;
}


.abouthit
{
  padding:24px;
  color:orange;
}
.ourreach
{
padding:24px;
  color:orange;
}
 h1
  {
  font-size:45px;
  }
  h2
  {
  font-size:20px;
  color:black;
  }
  .northwest
  {
  float:left;
  padding :24px;
  width:50%;
  color:orange;
  }
  .map
  {
  width:100%;
  height:300px;
  }
  .northwestmap
  {
  margin-top:60px;
  width:50%;padding:24px;float:left;
  }
  #myBtn
  {
  width:100%;
  height:300px;
  }
  .projects
  {
  float:left;
  width:50%;
  padding:24px;
  color:orange;
  }
  .flip-container {
	perspective: 1000px;
	height:50%;
	float:left;
	
}
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}

.flip-container, .front, .back {
	width: 300px;
	height:300px;
	border-radius:5%;
	
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;
	
	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;
	
	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
}
.project1
{
margin-left:20%;

}
.project2
{
margin-top:-10%;
margin-left:120%;
}
.ruler
{
height:0px;color:yellow;border-width: 0px;visibility: hidden;
}
.counters
{
float:left;
margin-left:20%;
text-align:center;
}
@media screen and (max-width: 650px) {
.counters
{
margin-left:30%;
text-align:center;
}
.project1
{
margin-left:20%;
}
.project2
{
margin-left:20%;
}
.flip-container {
	perspective: 1000px;
	height:50%;
	border-radius:5%;
}
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}

.flip-container, .front, .back {
	width: 300px;
	height:300px;
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;
	
	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
}
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .text {font-size: 11px}
  .header-right {
    float: none;
  }
  .images
  {
  height:200px;
  }
  h1
  {
  font-size:35px;
  }
  h2
  {
  font-size:15px;
  color:black;
  }
   .northwest
  {
  padding :24px;
  width:100%;
  color:orange;
  }
  .northwestmap
  {
  margin-top:-50px;
  width:100%;padding:24px;
 
  }
   .map
  {
  width:100%;
  height:300px;
  }
  #myBtn
  {
  width:100%;
  height:200px;
  }
  .container {
  position: relative;
  width: 50%;
}
.projects
  {
  padding:24px;
  color:orange;
  }
  .ruler
  {
  height:1px;color:yellow;border-width: 10px;visibility: hidden;
  }
 
  }
  @media screen and (max-width: 400px) {
.project1
{
margin-left:0%;

}
.project2
{
margin-left:00%;
}
.flip-container {
	perspective: 1000px;
	height:50%;
	border-radius:5%;
}
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}

.flip-container, .front, .back {
	width: 300px;
	height:300px;
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;
	
	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
}
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .text {font-size: 11px}
  .header-right {
    float: none;
  }
  .images
  {
  height:200px;
  }
  h1
  {
  font-size:35px;
  }
  h2
  {
  font-size:15px;
  color:black;
  }
   .northwest
  {
  padding :24px;
  width:100%;
  color:orange;
  }
  .northwestmap
  {
  margin-top:-50px;
  width:100%;padding:24px;
 
  }
   .map
  {
  width:100%;
  height:300px;
  }
  #volunteer
  {
  width:100%;
  height:200px;
  }
  .container {
  position: relative;
  width: 50%;
}
.projects
  {
  padding:24px;
  color:orange;
  }
  .ruler
  {
  height:1px;color:yellow;border-width: 10px;visibility: hidden;
  }
 
  }

 .counter
 {
 float:left;
 margin-left:20%;
 }
 .modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
	color:white;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(100,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content1 {
    background-color: #000000;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

 

</style>

</head>
<body>

<div class="header">
  <a href="#default" class="logo" style="color:black"><img src="logo.png"></a>
  <div class="header-right">
    <a class="active" href="#">Home</a>
	<a href="about.html">About</a>
	<a href="projects.html">Projects</a>
    <a  href="contactus.html">Contact</a>
  
  </div>
</div>
<hr  style="height:3px;border-width:0;color:orange;background-color:orange;margin:0"> 
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="girl1.jpg" style="width:100%" class="images">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="girl2.jpg" style="width:100%" class="images">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="girl3.png" style="width:100%" class="images">
  <div class="text"></div>
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
<div class="abouthit">
<h1  ><b><u>About HIT-</b></u></h1>
<h2 >Mission HIT is a national level programme of HIT Organisation, which is committed to provide basic education and healthcare to underprivileged children.HIT empowers communities to facilitate girls education in rural India and helps them take a stand against gender inequality.HIT believes that if girls in educationally backward districts are educated, they will have the potential to enter the formal economy, gain employment and lift their families out of poverty.. HIT believes that whether you are addressing healthcare, poverty, population control, unemployment or human rights, there's no better place to start than in the corridors of education.</h2>
</div>
<div class="northwest">
<h1><b><u>North-West District</u><b></h1>
<h2>NORTH WEST DISTRICT</b>of NCR Delhi is one of the districts selected during the Phase - I for implementation BBBP(Beti Bachao Beti Padhao) scheme at ground since January 2015.This district has shown various innovative initiatives in the last 3 years of its implementation of scheme.</h2>
</div>
<div class="northwestmap">
<img class="map" src="maps.png" >
</div>
<br><br><br><br>
<div></div>
<div class="ourreach">
<h1><b><u>Our Reach</u><b></h1>

<h2>
We believe in the philosophy of curing the disease from the root.So we started to bring about the change from the village areas of North-West District which are the roots of our society and started educating the drop out girls who were by any reason could not continue their schooling.We believe that education is right of everyone and everyone should have basic education (Reading,Writing and Arithmetic).
</h2>
<div class="counters"><div class="c1"><img src="cc2.png"><br><div class="counter"  data-count="72">0</div>days</div></div>
<div class="counters"><div class="c2"><img src="time.png"><br><div class="counter" data-count="550">0</div>hrs</div></div>
<div class="counters"><div class="c3"><img src="people.png"><br><div class="counter"  data-count="450">0</div>peoples</div></div>
  <script src='scripts.js'></script>

  

    <script  src="js/index.js"></script>


</div>
<br><br><br><br><br><br>
<div class="projects">
<h1><b><u>Projects</u><b></h1>
<center  class="project1">
<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
			<img src="1.png" style="width:100%;border: 2px solid orange;
    border-radius: 25px;"></img>
		</div>
		<div class="back">
		<div >
		<img  src="2.png" style="border: 2px solid orange;
    border-radius: 25px;" width="100%"></img>
		<div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color:black"><h2><u>Pankhudi paathshala</u></h2>
Is an initiative taken by District Northwest under Beti Bachao Beti Padhao scheme to bring drop out girls back into formal or informal education.</div >
</div>
	</div>
	</div>
</div>
</center>
<hr class="ruler" noshade >
<center class="project2" >
<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
			<img src="4.png" style="width:100%;border: 2px solid orange;
    border-radius: 25px;"></img>
		</div>
		<div class="back">
		<div >
		<img  style = "border: 2px solid orange;
    border-radius: 25px;" src="3.png" width="100%"></img>
		<div style="position: absolute;top: 10%;left: 2%;color:black"><h2><u>International Yoga Day</u></h2>
Yoga is a group of physical, mental, and spiritual practices or disciplines which originated in ancient India. 
Yoga means not just doing some mental or physical exercises, but uniting your actions, your thoughts, your life and yourself with the divine or a divine purpose.</div >
</div>
		</div>
	</div>
</div>
</center>
</div>


<div class="beavolunteer">
<img id="myBtn" src="bevlunteer.jpg" ></img>
</div>
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
    <span class="close1">&times;</span>
    <form action="" method="POST" align="center">
   &nbsp;&nbsp;&nbsp;&nbsp;First name:<br>
  &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="firstname" value="" required>
  <br><br>
   Last name:<br>
  <input type="text" name="lastname" value="" required>
  <br><br>
   Sex:<br>
   <br>
  <input type="radio" value="Female" name="gender">Female
  <input type="radio" value="Male" name="gender">Male
  <input type="radio" value="Other" name="gender">Others
  <br><br>
   Age:<br>
  <input type="number" name="age" value="" required>
  <br><br>
  Email:<br>
  <input type="email" name="email" value="" required>
  <br><br>
   Qualification:<br>
  <input type="text" name="qualification" value="" required>
  <br><br>
   College/School Name:<br>
  <input type="text" name="college/schoolname" value="" required>
  <br><br>
  
  <input type="submit" name="Submit" value="Submit">
</form> 
  </div>

</div>
<?php
$conn=mysqli_connect("localhost","root","","ngo");

if(isset($_POST['Submit']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$sex=$_POST['gender'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$qualification=$_POST['qualification'];
	$collegename=$_POST['college/schoolname'];
	$insert="INSERT INTO `volunteers`( `First Name`, `Last Name`, `Sex`, `Age`, `Email`, `Qualification`, `College/School Name`) VALUES ('$firstname','$lastname','$sex','$age','$email','$qualification','$collegename')";
	$result=mysqli_query($conn,$insert);
if($result){
	echo "<script>alert('Data inserted')</script>";
	echo "<script> window.open('index.php','_self')</script>";
}
else
{
}
}


?>
<script>
// Get the modal
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal1.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementById('myImg1');

var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img1.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img2.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img3.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img4.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</body>

</html>