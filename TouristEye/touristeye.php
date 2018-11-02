<?php
session_start();
include_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html>

<script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
<head>

<title>TouristEye Bangladesh: Best</title>

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

div.imgpop{
    width:300px;
    height:300px;
    margin-left:30px;
    float:left;
    
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
                  <a href="popular place.html">
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

  <?php if (isset($_SESSION['usr_id'])) { ?>               
                <li style="float:right"><a href="logout.php" style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.58;"> Sign out</a></li>
                <li style="float:right;"><span style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.60; color:  #F5F5F5; ">Hi, <?php echo $_SESSION['usr_name']; ?></span></li>

                <?php } 

                else { ?>
  <li style="float:right"><a href="signup.php" style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.58; ">Sign up</a></li>
  <li style="float:right"><a href="login.php" style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.58;">Sign in</a></li>
                <?php } ?>

 </div>

 

 <div class="w3-display-container w3-text-white">
    <img src="tour1.jpg" width="1380"  height="520" style="margin-left:-5px; margin-top:-20px;" >
    <div class="w3-display-topleft w3-container" style="background-color:#663399; margin-top:40px;margin-left: 70px;opacity:0.6; ">
      <h4 style="font-family:Tahoma, Geneva, sans-serif; font-size-adjust: .70; color:white; padding:20px; line-height:1.8;">Find TouristEye's Best Suggestion.<br> Enjoy and make stories.</h4>
    </div>
</div>

<div >
    <h3 style="margin-top:40px;text-align: center;font-size:30px;font-weight:595;font-size-adjust: .70;">ToursitEye's Best</h3>
    <p style="text-align:center;font-size:20px;font-size-adjust:.58;color:#595959;">So many place to choose, so many place to go.<br> TouristEye will always choose the best experience for you.</p>
    <p style="text-align:justify;width:700px; font-size-adjust:.60; margin-left:320px; color:#333333;"> Visit the place from our expert's suggestion. We gurantee that you will make some memories for you and other as well. If you are after Bangladesh's natural beauty and solitude, this places are must to visit.</p>
 </div>

 <div style="margin-top:50px;" style="clear:left;">


 <div class="imgpop" >
 <div class="w3-display-container">
  <a target="_blank" href="#">
    <img src="keokera.jpg" width="300" height="300" class="w3-hover-opacity" >
    <div class="w3-display-bottomleft w3-large w3-container w3-padding-14 w3-deep-orange" style="">Keokeradang</div>
  </a>
</div>
</div>

<div class="imgpop">
<div class="w3-display-container">
  <a target="_blank" href="#">
    <img src="bichanakandi.jpg"  width="300" height="300" class="w3-hover-opacity">
    <div class="w3-display-bottomleft w3-large w3-container w3-padding-14 w3-deep-orange" style="">Bichanakandi</div>
  </a>
</div>
</div>

<div class="imgpop">
  <div class="w3-display-container">
  <a target="_blank" href="#">
    <img src="saintmartin.jpg" width="300" height="300" class="w3-hover-opacity">
    <div class="w3-display-bottomleft w3-large w3-container w3-padding-14 w3-deep-orange" style="">Saint Martin</div>
  </a>
</div>
</div>

<div class="imgpop">
<div class="w3-display-container">
  <a target="_blank" href="#">
    <img src="jaflong.jpg"  width="300" height="300" class="w3-hover-opacity">
    <div class="w3-display-bottomleft w3-large w3-container w3-padding-14 w3-deep-orange" style="">Jaflong</div>
  </a>
</div>
</div>

</div>

<div style="margin-top:400px;" style="clear:left;">


 <div class="imgpop" >
 <div class="w3-display-container">
  <a target="_blank" href="coxsbazar.php">
    <img src="coxbazar.jpg" width="300" height="300" class="w3-hover-opacity" >
    <div class="w3-display-bottomleft w3-large w3-container w3-padding-14 w3-deep-orange" style="">Cox's Bazar</div>
  </a>
</div>
</div>

<div class="imgpop">
<div class="w3-display-container">
  <a href="sajek.php">
    <img src="sajek.jpg"  width="300" height="300" class="w3-hover-opacity">
    <div class="w3-display-bottomleft w3-large w3-container w3-padding-14 w3-deep-orange" style="">Sajek Valley</div>
  </a>
</div>
</div>

<div class="imgpop">
  <div class="w3-display-container">
  <a target="_blank" href="#">
    <img src="kuakata.jpg" width="300" height="300" class="w3-hover-opacity">
    <div class="w3-display-bottomleft w3-large w3-container w3-padding-14 w3-deep-orange" style="">Kuakata</div>
  </a>
</div>
</div>

<div class="imgpop">
<div class="w3-display-container">
  <a target="_blank" href="#">
    <img src="ratargul.jpg"  width="300" height="300" class="w3-hover-opacity">
    <div class="w3-display-bottomleft w3-large w3-container w3-padding-14 w3-deep-orange" style="">Ratargul</div>
  </a>
</div>
</div>

</div>

<div style="margin-top:750px;" style="clear:left;">


 <div class="imgpop" >
 <div class="w3-display-container">
  <a target="_blank" href="#">
    <img src="sundarban.jpg" width="300" height="300" class="w3-hover-opacity" >
    <div class="w3-display-bottomleft w3-large w3-container w3-padding-14 w3-deep-orange" style="">Sundarban</div>
  </a>
</div>
</div>

<div class="imgpop">
<div class="w3-display-container">
  <a target="_blank" href="#">
    <img src="srimangal.jpg"  width="300" height="300" class="w3-hover-opacity">
    <div class="w3-display-bottomleft w3-large w3-container w3-padding-14 w3-deep-orange" style="">Srimangal</div>
  </a>
</div>
</div>


</div>



 <div style="margin-bottom:-33px; max-width:1920px; margin-left:-200px;margin-right:-200px; margin-top:1100px;clear:left;">
     <p style="text-align:center; background-color: #339961;color:azure; padding:20px 0px; font-size:16px;"> &copy;TUSHER AHAMED, CSE, RUET, 2016</p>
 </div>


 </body>

 </html>