<?php
 session_start();

 if(isset($_SESSION['usr_id'])!="") {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['name'];
        header("Location: index.php");
    } 

    else {
        $errormsg = "Incorrect Email or Password!!!";
    }
}

?>

<!DOCTYPE html>
<html>

<script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
<head>

<title>TouristEye Bangladesh: Home</title>

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

.error {color: #eb2d53;}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 20px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size-adjust: .60;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div.logmem {
    border-radius: 5px;
    background-color: #d9f2e4;
    padding: 20px;
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
                  <a href="popular place.html">
           <img src="popular.jpg"  width="176" height="100" style="margin-top:-12px; margin-left:-16px;">
                <div class="desc">Popular Places</div>
                 </a>
                  </div></li>
                  
              <li style="padding-top: -10px;">
               <div class="img">
                   <a href="touristeye.html">
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
  </li>

  
  <li style="float:right"><a href="signup.php" style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.58; ">Sign up</a></li>
  <li style="float:right"><a href="login.php" style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.58;">Sign in</a></li>
                

 </div>

 <div style="width:50%; margin:auto;">
    <h3 style="margin-top:40px;text-align: center;font-size:25px;font-weight:595;font-size-adjust: .80;">Sign in</h3>
    <p style="text-align:center;font-size:20px;font-size-adjust:.58;color:#595959; padding-bottom:20px; border-bottom:2px solid #bfbfbf;">Sign in to order your product or to interract with <br> TouristEye Bangladesh</p>
 </div>





<div class="logmem" style="width:40%; margin:auto; margin-top:40px;">
 <p style="opacity:0.4;">Note: <span> All fields are required</span></p>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
    <label for="name">Email *</label>
    <input type="text" name="email" placeholder="Your Email" required>

    <label for="name">Password *</label>
    <input type="password" name="password" placeholder="Your Password" required>

    <a href="#" style="color:#396a93; text-decoration:none;">Forgotten your password?<br></a>
  
    <input type="submit" name="login" value="Sign in">
  </form>

<span class="error"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

</div>

<div style="margin:auto; text-align: center;">
<p style="font-size-adjust:0.7; color:#4d4d4d;">Don't have an account? You can sign up now:</p>
<a href="signup.php" style="color:#396a93; text-decoration:none; font-size-adjust:0.6;">Create an account</a>
</div>


 <div style="margin-bottom:-33px; max-width:1920px; margin-left:-200px;margin-right:-200px; margin-top:100px;clear:left;">
     <p style="text-align:center; background-color: #339961;color:azure; padding:20px 0px; font-size:16px;"> &copy;TUSHER AHAMED, CSE, RUET, 2016</p>
 </div>

 </body>
 </html>