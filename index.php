<?php
session_start();
if (isset($_POST['ico']))
{
  if (isset($_SESSION['getadminname'])  )
  {
    header('location: admin/home.php');
  }
  else if (isset($_SESSION['getusername'])) 
  {
    header('location: user/home.php');
  }
  else
  {
    header('location: login/login.php');
  }
}
else
{

}

?>
<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<!--------------------------------------------------------------------------------------TITLE-START--> 
<title>Timetable Management System</title>
<link rel="icon" type="image/icon" href="resources/yy.ico">
<!--------------------------------------------------------------------------------------TITLE-END--> 
</head>
<!--------------------------------------------------------------------------------------STYLE-CSS-START--> 
<style type="text/css">
* {
  box-sizing: border-box;
}
body {
    margin: 0;
    padding: 0;
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("resources/ll.jpg");
    background-size: cover;
    font-family: sans-serif;
}
#head {
  color: white;
  font-size: 40px;
  font-family: "Century Gothic";
  margin-bottom: 50px;
  width: auto;
  border: none;
}
.btn
{
    text-decoration: none;
    font-family: "Century Gothic";
    font-size: 30px;
    border: 2px solid white;
    color: white;
    border-radius: 20px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 2px;
    padding-bottom: 2px;
}
.btn:hover
{
    color: white;
    border: 5px solid #39b54a;
    cursor: pointer;
}
#ico{
  width: 200px;
  height: 200px;
  margin-top: 100px;
  border-radius: 50%;
  background-image: url(resources/tms.png);
  background-size: cover;
  border: none;
  background-color: transparent;
  cursor: pointer;
  outline:none;
}
#ico:hover{
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,1);
}
#nsbm{
  background-image:url("resources/bw.png");
  background-size:100% 100%;
  background-position: center;
  width: 250px;
  height: 100px;
  position: fixed;
  bottom: 10px;
  right:10px;
  padding: 15px;
}
#nsbm:hover{
background-image:url("resources/nsbm.png");
}
.main {   
    flex: 30%;
    padding: 20px;
    width: auto;
}
.row {  
    display: flex;
    flex-wrap: wrap;
}
.side {
    
    width: 35%;
    height: auto;
    padding: 10px;
    float: right;
    min-height: 500px;
}
@media screen and (max-width: 100px) {
    .row {   
        flex-direction: column;
    }
}
@media screen and (max-width: 400px) {
    .navbar a {
        float: none;
        width:100%;
    }
}
.mySlides {
  display: none;
}
img {
  vertical-align: middle;
}
.slideshow-container {
  width: 500px;
  height: 500px;
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom:0px;
  width: 100%;
  text-align: center;
  background-color: rgba(0,0,0,0.5);
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  top: 0;
}
.dot {
  height: 5px;
  width: 5px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
#active {
  background-color: orange;
}
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
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<!--------------------------------------------------------------------------------------STYLE-CSS-END--> 


<!--------------------------------------------------------------------------------------BODY-START--> 
<body>
<center>
<div style="margin-top: 10%;">
	<div style="margin-bottom: 50px;" >

<div class="row">

  <!--side-->
  <div class="side">
    <div class="slideshow-container" style="background-color: white; float: right;">
<!---------------------------------------------------------------------------------------->
      <div class="mySlides fade" style="background-image:url('resources/s1.jpg');background-size: 100% 100%;width: 100%;height: 100%; position: relative;">
        <div class="text">
          <h1>Tip 1</h1>
          <p>Lorem ipsum carrots or curling but these, too. Phaedrum normally takes you two, since it is rightly seeking neglegentur. I lied to pursue with dignity, it first measures to be expanded.</p>
          <div style="text-align:center">
            <span class="dot" id="active"></span> 
            <span class="dot"></span>
            <span class="dot"></span> 
            <span class="dot"></span>  
          </div>
        </div>
      </div>
<!---------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------->
      <div class="mySlides fade" style="background-image:url('resources/s3.jpg');background-size: 100% 100%;width: 100%;height: 100%; position: relative;">
        <div class="text">
          <h1>Tip 3</h1>
          <p>Lorem ipsum carrots or curling but these, too. Phaedrum normally takes you two, since it is rightly seeking neglegentur. I lied to pursue with dignity, it first measures to be expanded.</p>
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot" id="active"></span>
            <span class="dot"></span> 
            <span class="dot"></span>  
          </div>
        </div>
      </div>
<!---------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------->
      <div class="mySlides fade" style="background-image:url('resources/s5.jpg');background-size: 100% 100%;width: 100%;height: 100%;position: relative;">
        <div class="text">
          <h1>Tip 5</h1>
          <p>Lorem ipsum carrots or curling but these, too. Phaedrum normally takes you two, since it is rightly seeking neglegentur. I lied to pursue with dignity, it first measures to be expanded.</p>
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span>
            <span class="dot" id="active"></span> 
            <span class="dot"></span>  
          </div>
        </div>
      </div>
<!---------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------->
      <div class="mySlides fade" style="background-image:url('resources/s7.jpg');background-size: 100% 100%;width: 100%;height: 100%; position: relative;">
        <div class="text">
          <h1>Tip 7</h1>
          <p>Lorem ipsum carrots or curling but these, too. Phaedrum normally takes you two, since it is rightly seeking neglegentur. I lied to pursue with dignity, it first measures to be expanded.</p>
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span>
            <span class="dot"></span> 
            <span class="dot" id="active"></span>  
          </div>
        </div>
      </div>
<!---------------------------------------------------------------------------------------->

    </div>
  </div>

  <!--main-->
  <div class="main">
    <div id="head">
      <form action="" method="post">
        <button id="ico" name="ico"></button>
      </form>
      Timetable Management<br> System
		</div>
	</div>

  <!--side-->
  <div class="side">
    <div class="slideshow-container" style="background-color: white; float: left;">

<!---------------------------------------------------------------------------------------->
      <div class="mySlides2 fade" style="background-image:url('resources/s2.jpg');background-size: 100% 100%;width: 100%;height: 100%; position: relative;">
        <div class="text">
          <h1>Tip 2</h1>
          <p>Lorem ipsum carrots or curling but these, too. Phaedrum normally takes you two, since it is rightly seeking neglegentur. I lied to pursue with dignity, it first measures to be expanded.</p>
          <div style="text-align:center">
            <span class="dot" id="active"></span> 
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>   
          </div>
        </div>
      </div>
<!---------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------->
      <div class="mySlides2 fade" style="background-image:url('resources/s4.jpg');background-size: 100% 100%;width: 100%;height: 100%; position: relative;">
        <div class="text">
          <h1>Tip 4</h1>
          <p>Lorem ipsum carrots or curling but these, too. Phaedrum normally takes you two, since it is rightly seeking neglegentur. I lied to pursue with dignity, it first measures to be expanded.</p>
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot" id="active"></span>
            <span class="dot"></span>
            <span class="dot"></span>   
          </div>
        </div>
      </div>
<!---------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------->
      <div class="mySlides2 fade" style="background-image:url('resources/s6.1.jpg');background-size: 100% 100%;width: 100%;height: 100%; position: relative;">
        <div class="text">
          <h1>Tip 6</h1>
          <p>Lorem ipsum carrots or curling but these, too. Phaedrum normally takes you two, since it is rightly seeking neglegentur. I lied to pursue with dignity, it first measures to be expanded.</p>
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span>
            <span class="dot"id="active"></span>
            <span class="dot"></span>   
          </div>
        </div>
      </div>
<!---------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------->
      <div class="mySlides2 fade" style="background-image:url('resources/s8.jpg');background-size: 100% 100%;width: 100%;height: 100%; position: relative;">
        <div class="text">
          <h1>Tip 8</h1>
          <p>Lorem ipsum carrots or curling but these, too. Phaedrum normally takes you two, since it is rightly seeking neglegentur. I lied to pursue with dignity, it first measures to be expanded.</p>
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span>
            <span class="dot"></span> 
            <span class="dot" id="active"></span>  
          </div>
        </div>
      </div>
<!----------------------------------------------------------------------------------------> 
    </div>
  </div>

</div>
</center>
</body>
<!--------------------------------------------------------------------------------------BODY-END-->



<!--------------------------------------------------------------------------------------FOOTER-START--> 
<footer>
  <a href="http://nsbm.lk/" target="blank"><div id="nsbm" title="Nsbm.lk" ></div></a>
</footer>
<!--------------------------------------------------------------------------------------FOOTER-END-->

</html>


<script>
var slideIndex = 0;
var slideIndex2 = 0;
showSlides();
showSlides2();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function showSlides2() {
  var i;
  var slides2 = document.getElementsByClassName("mySlides2");
  for (i = 0; i < slides2.length; i++) {
    slides2[i].style.display = "none";  
  }
  slideIndex2++;
  if (slideIndex2 > slides2.length) {slideIndex2 = 1}    
  slides2[slideIndex2-1].style.display = "block";  
  setTimeout(showSlides2, 2000); // Change image every 2 seconds
}
</script>