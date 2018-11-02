<?php
 session_start();
 if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    
    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO users(name,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
            $successmsg = "Successfully Registered!";
        }
    }
    else {
            $errormsg = "Error in registering...Please try again later!";
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
  background-color: limegreen;
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
.success {color:green;}

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
    background-color: #98e698;
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
               

 </ul>

 </div>

 <div style="width:50%; margin:auto;">
    <h3 style="margin-top:40px;text-align: center;font-size:25px;font-weight:595;font-size-adjust: .80;">Sign up</h3>
    <p style="text-align:center;font-size:20px;font-size-adjust:.58;color:#595959; padding-bottom:20px; border-bottom:2px solid #bfbfbf;">Join our community. Stay inspired and in the know.</p>
 </div>




 <div class="logmem" style="width:40%; margin:auto; margin-top:30px;">
 <p style="font-size-adjust:.80;text-align:center;margin-top:1px;">Create an account</p>
 <p style="opacity:0.4;">Note: <span> All fields are required</span></p>

  <form role="form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform"> 

    <div>
    <label for="name">Full Name *</label>
    <input type="text" name="name" placeholder="Enter Full Name" required >
    <span class="error"> <?php if (isset($name_error)) echo $name_error; ?> </span>
    </div>

<div>
    <label for="name">Email *</label>
    <input type="text" name="email" placeholder="Email" required >
    <span class="error"><?php if (isset($email_error)) echo $email_error; ?></span>
</div>

<div>
    <label for="name">Password *</label>
    <input type="password" name="password" placeholder="Password"  required>
    <span class="error"><?php if (isset($password_error)) echo $password_error; ?></span>
</div>

<div>
    <label for="name">Confirm Password *</label>
    <input type="password" name="cpassword" placeholder="Confirm Password" required>
    <span class="error"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
</div>

<div class="w3-container">

  <input type="checkbox" name="vehicle" value="Bike"> I agree to the <a href="#" onclick="document.getElementById('id01').style.display='block'" style="text-decoration:none; color:teal;"> site terms of use<br>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="width:60%;">
      <header class="w3-container w3-green">     
        <h3 style="text-align: center;font-size:22px;font-weight:595;font-size-adjust: .70;">Terms of Use</h3>
      </header>
      <div class="w3-container" style="color:#737373; padding:20px;">
        <p >Any participation in this site will constitute acceptence of this agreement. If you do not agree to abide by the following, please do not sign up. As a condition of use, you promise not to use the services for any purposes that is unlawful or prohibited by these Terms, or any other purpose not reasonably intended by TouristEye Bangladesh. By way of example, and not as a limitation, you agree not to use the services:  </p>
        <p> To abuse, to harras, impersonate or to intimidate any other users.</p>
        <p> To post or transmit, or cause to be post or transmitted, any content that is libellious, defamatory, obscene, abusive, offensive, profane or that infringes any copyright or other right of persons.  </p>  
        <p> To create or transmit unwanted 'spam' to any person or any url. </p>
        <p> To create multiple account for the purpose of voting for or against users' photographs and images.</p>
      <p> To advertise to, or solicit, any user buy or sell any products or services or to use any information obtained from the services in order to advertise, contact or solicit or sell to any other user without their prior explicit consent.</p>
      </div>
    </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  
    <input type="submit" name="signup" value="Sign Up">
  </form>

  <span class="success"><?php if (isset($successmsg)) { echo $successmsg; echo '<a href="login.php" style="text-decoration:none; color:steelblue;"> Click here to login</a>'; } ?></span>
            <span class="error"><?php if (isset($errormsg)) { echo $errormsg; } ?></span> 
</div>

<div style="margin:auto; text-align: center;">
<p style="font-size-adjust:0.7; color:#4d4d4d;">Already have an account?</p>
<a href="login.php" style="color:#396a93; text-decoration:none; font-size-adjust:0.6;">Sign in Here</a>
</div>

<div style="margin-bottom:-33px; max-width:1920px; margin-left:-200px;margin-right:-200px; margin-top:100px;clear:left;">
     <p style="text-align:center; background-color: #339961;color:azure; padding:20px 0px; font-size:16px;"> &copy;TUSHER AHAMED, CSE, RUET, 2016</p>
 </div>


 </body>
 </html>