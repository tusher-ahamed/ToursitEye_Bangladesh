<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>

<script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
<head>

<title>TouristEye Bangladesh: Sajek</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="metaimg.png">

<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >

<style>

body {
    background-color:white;
}

h1 {
   text-align:center;
   margin-top:0px;
   margin-bottom: 0px;
   background-color:#38471f;
   font-family:"Trebuchet MS", Helvetica, sans-serif;
   color:white;
   font-size:45px;
   padding:0;
}

h2 {
  font-family:"Comic Sans MS", cursive, sans-serif;
}

ul {
  list-style-type:none;
  margin-top:0px;
  padding:0;
  background-color: #38471f;
  overflow:hidden;
}

li {
   float:left;
}

li:last-child {
   border-right:none;
}


li a, .dropbutton{
   display:inline-block;
   text-decoration:none;
   text-align:center;
   color:seashell;
   padding: 0px 10px 2px 10px  ;
   font-size:16px;
   cursor:pointer;
   border:none;
}

li a:hover,.dropdown:hover .dropbutton{
   color:white;
   background-color:forestgreen;
}

li.dropdown {
  display: inline-block ;
}

.dropdown-content{
  display:none;
  position:absolute;
  background-color: darkseagreen;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px mintcream;
}

.dropdown-content a {
  color:black;
  padding:12px 16px;
  text-decoration:none;
  display:block;
  text-align:left;
}

.dropdown-content a:hover {
  background-color: #28a428;
  color:white;
}


.dropdown:hover .dropdown-content {
    display: block;
}

.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}

#dishov {
  position:relative;
  z-index: 1000;
}

div.img {
    margin: 5px;
    border: 4px solid #70a970;
    float: left;
    width: 184px;
}

div.desc {
    font-size:15px;
    text-align: center;
    color:white;
}

</style>

</head>

<body>
 
 <h1>TouristEye Bangladesh</h1>

 <div id="dishov">
 
 <ul >
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
       <a href="#dest" class="dropbutton">Destination</a>
        <div class="dropdown-content">
          <div style="float: left; width: 100%; ">
            <ul style="padding:10px; background-color: darkolivegreen;color:ivory;">
              <li style="border-right:none;padding-right:20px;padding-top: -10px;">
                  <div class="img"> 
                  <a href="popular place.php" style="">
           <img src="popular.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">Popular Places</div>
                 </a>
                  </div></li>
              <li style="padding-top: -10px;">
               <div class="img">
                   <a href="touristeye.php">
           <img src="place.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">TouristEye's Best</div>
                    </a>
                  </div></li>
            </ul>
          </div> 
        </div>
  </li>      
  <li class="dropdown">
       <a href="#accomodation" class="dropbutton">Accomodation</a>
         <div class="dropdown-content">
          <div style="float: left; width: 100%; ">
            <ul style="padding:10px; background-color: darkolivegreen;color:ivory;">
              <li style="border-right:none;padding-right:20px;padding-top: -10px;">
                  <div class="img">
                   <a href="popular place.html">
           <img src="bookHotel.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">Book Hotel Now!</div>
                    </a>
                  </div></li>
              <li style="padding-top: -10px;">
               <div class="img">
                 <a href="popular place.html">
           <img src="tourpackage.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">Find Tour Packages</div>
                  </a>
                  </div></li>
            </ul>
          </div> 

        </div>
  </li>

  <li class="dropdown">
       <a href="#order" class="dropbutton">Order Product</a>
       <div class="dropdown-content">
          <div style="float: left; width: 100%; ">
            <ul style="padding:10px;background-color: darkolivegreen;color:ivory;">
              <li style="border-right:none;padding-right:20px;padding-top: -10px;">
                  <div class="img">
                     <a href="popular place.html">
           <img src="necessary.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">Find Your Necessary Items Wherever You Are! </div>
                 </a>
                  </div></li>
              <li style="border-right:none;padding-right:20px;padding-top: -10px;">
               <div class="img">
                  <a href="touristeye.html">
           <img src="traditional.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">Order Traditional Clothes, Wear Bangladeshi</div>
                  </a>
                  </div></li>
              <li style="padding-top: -10px;">
               <div class="img">
                <a href="popular place.html">
           <img src="best.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">Order The Famous Items From Different Places</div>
                 </a>
                  </div></li>
            </ul>
          </div>
      </div>
  </li>

  <li class="dropdown">
       <a href="#calender" class="dropbutton">Events Calender</a>
         <div class="dropdown-content">
          <div style="float: left; width: 100%; ">
            <ul style="padding:10px;background-color: darkolivegreen;color:ivory;">
              <li style="border-right:none;padding-right:20px;padding-top: -10px;">
                  <div class="img">
                   <a href="popular place.html">
           <img src="tournow.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">Give a Tour Now ! </div>
                   </a>
                  </div></li>
              <li style="border-right:none;padding-right:20px;padding-top: -10px;">
               <div class="img">
                <a href="popular place.html">
           <img src="upcoming.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">Upcoming Festival </div>
                </a>
                  </div></li>
              <li style="padding-top: -10px;">
               <div class="img">
               <a href="popular place.html">
           <img src="calendar.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">Find Desired Event</div>
                </a>
                  </div></li>
            </ul>
          </div>
      </div>
  </li>
  <li class="dropdown">
       <a href="#language" class="dropbutton">Learn Bengali</a>
        <div class="dropdown-content">
          <div style="float: left; width: 100%; ">
            <ul style="padding:10px; background-color: darkolivegreen;color:ivory;">
              <li style="border-right:none;padding-right:20px;padding-top: -10px;">
                  <div class="img">
                   <a href="popular place.html">
           <img src="bangla.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">Popular Words</div>
                  </a>
                  </div></li>
              <li style="padding-top: -10px;">
               <div class="img">
                 <a href="popular place.html">
           <img src="learn.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">Bengali Tutorials</div>
                </a>
                  </div></li>
            </ul>
          </div> 
      </div>
  </li>

  <?php if (isset($_SESSION['usr_id'])) { ?>               
                <li style="float:right"><a href="logout.php" style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.58;"> Sign out</a></li>
                <li style="float:right;"><span style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.60; color:  #F5F5F5; ">Hi, <?php echo $_SESSION['usr_name']; ?></span></li>

                <?php } 

                else { ?>
  <li style="float:right"><a href="signup.php" style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.58; ">Sign up</a></li>
  <li style="float:right"><a href="login.php" style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.58;">Sign in</a></li>
                <?php } ?>

 </div>


<div class="w3-content" style="max-width:1031px; margin-top:-10px;">
<div class="w3-display-container">
  <img class="mySlides" src="sajek/s01.jpg" style="width:100%">
  <img class="mySlides" src="sajek/s02.jpg" style="width:100%">
  <img class="mySlides" src="sajek/s03.jpg" style="width:100%">
  <img class="mySlides" src="sajek/s04.jpg" style="width:100%">
  <img class="mySlides" src="sajek/s05.jpg" style="width:100%">
  <img class="mySlides" src="sajek/s06.jpg" style="width:100%">
  <div class="w3-display-topleft w3-xlarge w3-container w3-padding-16 w3-red" style=" margin-top:20px; margin-left:20px;">Sajek Valley</div>
</div>
</div>

<div class="w3-center">
  <div class="w3-section">
    <button class="w3-btn" onclick="plusDivs(-1)"><i class="material-icons" style="font-size:15px; margin-top:10px;">chevron_left</i> Prev</button>
    <button class="w3-btn" onclick="plusDivs(1)">Next <i class="material-icons" style="font-size:15px;margin-top:10px;">chevron_right</i></button>
  </div>
  <button class="w3-btn demo" onclick="currentDiv(1)">1</button> 
  <button class="w3-btn demo" onclick="currentDiv(2)">2</button> 
  <button class="w3-btn demo" onclick="currentDiv(3)">3</button>
  <button class="w3-btn demo" onclick="currentDiv(4)">4</button> 
  <button class="w3-btn demo" onclick="currentDiv(5)">5</button> 
  <button class="w3-btn demo" onclick="currentDiv(6)">6</button>  
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
}
</script>

<h3 style="margin-top:40px;text-align: center;font-size:30px;font-weight:595;font-size-adjust: .70;">Sajek Valley</h3>

<ul style="background-color: white; margin-left:425px;"> 
  <li style="float:left; border-right:1px solid #cccccc; padding-right:30px;"> 
    <h4>HIGHTLIGHTS</h4>
    <div style="color:#595959;">
    <p>Enjoying the sunset</p>
    <p>Find yourself above the clouds</p>
    <p>Enjoy "Pahari Food"</p>
    </div>
  </li>
  <li style="float:left; padding-left:40px;"> 
    <h4>PROXIMITY</h4>
    <div style="color:#595959;">
     <p><i class="material-icons" style="font-size:19px;">directions_bus</i> Dhaka to Khagrachori 269 km </p>
     <p><i class="material-icons" style="font-size:19px;">directions_car</i> Khagrachori to Sajek 60 km</p>
    </div>
  </li>
</ul>



<div >
    <p style="text-align:center;font-size:20px;font-size-adjust:.58;color: #737373; border-top: 1px solid #cccccc;  margin-top:20px;padding-top:20px;">Discover yourself in the hilltracts of Rangamati and Khagrachori.<br> The adventureous path itself will take you to the highest excitement level you ever had.</p>
    <p style="text-align:justify;width:700px; font-size-adjust:.57; margin-left:320px; color:#595959 ;"> Sajek is a union at Baghaichari Upazila in Rangamati districts. Basically it is name of a river which separates Bangladesh from India. Sajek Valley is situated in the North angle of Rangamati, near the Mizoram border boundary area.<br><br> The valley is 1,800 ft high form sea level. Many small rivers flow through the hills among them Kachalon and Machalong are famous. The main ethnic minorities on the valley are Chakma, Marma, Tripura, Pankua, Lushai and Sagma.<br><br> The place is known as hill queen for its natural beauty and roof of Rangamati. Marishsha is a name of a place near Sajek Valley. There is another place near Sajek, it is Kanlak, and it is famous for its orange orchard.</p>

    <p style="text-align:justify;width:700px; font-size-adjust:.60; margin-left:320px; color:#262626; font-weight:bold;">Must do activities in Sajek:</p>
    <ol style="list-style-type:disc; text-align:justify;width:700px; font-size-adjust:.57; margin-left:320px; color:#595959 ;"> 
      <li>Stay in any of the resort for day or two.</li>
      <li>Wake up early in the morning to enjoy the Sun Rising. This will just blow your mind.</li>
      <li>Enjoy the sky full of stars. spent the night tasting ethnic food of the local habitants.</li>
      <li>Trek to the nearest Hill of Marishsha.</li>
    </ol>

    <p style="margin-top:200px; clear:both; text-align:justify;width:700px; font-size-adjust:.60; margin-left:320px; color:#262626;"><span style="font-weight:bold;">Functional Facts:</span> Approximate population 23000, Largest Union, Hill tracts, Army Camp.</p>
 </div>

<div style="margin-left:330px;">
<img src="sajek/sajek01.jpg" style="float:left; height:260px; width:500px; padding-right:2px;">
<img src="sajek/sajek02.jpg" style="float:left; height:125px; width:240px; margin-top:135px;">
</div>

<img src="sajek/sajek03.jpg" style="clear:both; height:200px; width:300px; margin-top:264px; margin-left:-400px;">



 <div style="margin-bottom:-33px; max-width:1920px; margin-left:-200px;margin-right:-200px; margin-top:0px;clear:right;">
     <p style="text-align:center; background-color: #339961;color:azure; padding:20px 0px; font-size:16px;"> &copy;TUSHER AHAMED, CSE, RUET, 2016</p>
 </div>

 </body>
 </html>