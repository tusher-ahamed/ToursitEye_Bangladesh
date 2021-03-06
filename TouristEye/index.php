<?php
session_start();
include_once 'dbconnect.php';
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
                  <a href="popular place.php">
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
  </li>

  <?php if (isset($_SESSION['usr_id'])) { ?>               
                <li style="float:right"><a href="logout.php" style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.58;"> Sign out</a></li>
                <li style="float:right;"><span style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.60; color:  #F5F5F5; ">Hi, <?php echo $_SESSION['usr_name']; ?></span></li>

                <?php } 

                else { ?>
  <li style="float:right"><a href="signup.php" style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.58; ">Sign up</a></li>
  <li style="float:right"><a href="login.php" style="font-size:15px; font-family:Tahoma, Geneva, sans-serif; font-size-adjust:.58;">Sign in</a></li>
                <?php } ?>


 </ul>

 </div>

<div class="w3-content w3-display-container w3-border-green w3-padding w3-padding-16" style="width=150%; height=30%;">

  <div class="w3-display-container mySlides">
  <img src="sajek.jpg" style="width:100%">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">
    Sajek, Rangamati
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="sundarban.jpg" style="width:100%">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">
    Sundarban, Khulna 
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="surma.jpg" style="width:100%">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">
    Surma River
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="saint martin.jpg" style="width:100%">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">
    Saint Martin
  </div>
</div>


    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This code works without jquery library. -->
    <script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
        
    </script>
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('img/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
        
        /* jssor slider thumbnail navigator skin 01 css */
        /*
        .jssort01 .p            (normal)
        .jssort01 .p:hover      (normal mouseover)
        .jssort01 .p.pav        (active)
        .jssort01 .p.pdn        (mousedown)
        */
        .jssort01 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 72px;
            height: 72px;
        }
        
        .jssort01 .t {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .jssort01 .w {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        
        .jssort01 .c {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
            box-sizing: content-box;
            background: url('img/t01.png') -800px -800px no-repeat;
            _background: none;
        }
        
        .jssort01 .pav .c {
            top: 2px;
            _top: 0px;
            left: 2px;
            _left: 0px;
            width: 68px;
            height: 68px;
            border: #000 0px solid;
            _border: #fff 2px solid;
            background-position: 50% 50%;
        }
        
        .jssort01 .p:hover .c {
            top: 0px;
            left: 0px;
            width: 70px;
            height: 70px;
            border: #fff 1px solid;
            background-position: 50% 50%;
        }
        
        .jssort01 .p.pdn .c {
            background-position: 50% 50%;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
        }
        
        * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
            /* ie quirks mode adjust */
            width /**/: 72px;
            height /**/: 72px;
        }
        
    </style>

    <div id="jssor_1" style="position: absolute; margin: 0 auto; top: 30px; right: -140px; width: 800px; height: 456px; overflow: hidden; visibility: hidden;  background-color: #24262e; float:right;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="img/01.jpg" />
                  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">Inani Beach, Cox's Bazar</div>
                <img data-u="thumb" src="img/thumb-01.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="img/02.jpg" />
                  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">Sajek Valley, Rangamati</div>
                <img data-u="thumb" src="img/thumb-02.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="img/03.jpg" />
                  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">Sundarban, Khulna</div>
                <img data-u="thumb" src="img/thumb-03.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="img/04.jpg" />
                  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">Surma River, Sunamganj</div>
                <img data-u="thumb" src="img/thumb-04.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="img/05.jpg" />
                  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">Patharia, Sylhet</div>
                <img data-u="thumb" src="img/thumb-05.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="img/06.jpg" />
                  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">Saintmartin, Teknaf</div>
                <img data-u="thumb" src="img/thumb-06.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="img/07.jpg" />
                  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">Kuakata, Barishal</div>
                <img data-u="thumb" src="img/thumb-07.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="img/08.jpg" />
                   <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">Srimangal, Sylhet</div>
                <img data-u="thumb" src="img/thumb-08.jpg" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery</a>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="img/09.jpg" />
                   <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">Nafakhum Fall, Bandarban</div>
                <img data-u="thumb" src="img/thumb-09.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="img/10.jpg" />
                   <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">Amiyakhum, Bandarban</div>
                <img data-u="thumb" src="img/thumb-10.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="img/11.jpg" />
                   <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-green">Teker Ghat</div>
                <img data-u="thumb" src="img/thumb-11.jpg" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->

<div style="margin-left:-80px;margin-top:120px;">
<h2 style="font-size:37px; color:#38471f;"> Discover <br>Bangladesh In Your <br>Own Eyes</h2>
 </div>

 <div>
    <h3 style="margin-top:240px;text-align: center;font-size:27px;font-weight:595;font-size-adjust: .70;">Hello</h3>
 </div>

 <P style="text-align:center;font-size:20px;font-size-adjust:.58;color:#4d4d4d;">Welcome to TouristEye Bangladesh - your eye through Bangladesh</P>

 <div class="w3-display-container w3-text-white">
    <img src="style1.jpg" alt="Visit Bangladesh" style="width:1320px;height:550px;margin-left:-187px; margin-top:20px;">
    <div class="w3-display-topleft w3-container" style="background-color:mediumseagreen; margin-top:30px;margin-left: -150px;opacity:0.6; cursor:pointer;">
      <h4 style="font-family:Tahoma, Geneva, sans-serif; font-size-adjust: .80;">Let us show you Bangladesh</h4>
      <div class="w3-container">
           <p> <button class="w3-btn w3-light-green">Find out more</button></p>
      </div>
    </div>
</div>

<div>
    <h3 style="margin-top:40px;text-align: center;font-size:30px;font-weight:595;font-size-adjust: .70;">Get inspired</h3>
 </div>

<div style="text-align:center; font-size:16px; font-size-adjust:.58;">
      <p><a href="#" style="text-decoration:none; color:forestgreen;">See all things to do</a><span> | </span><a href="#" style="text-decoration:none; color:forestgreen;">All desatinations</a><span> | </span> <a href="#" style="text-decoration:none; color:forestgreen;">Recomonded trips</a></p> 
</div>

    <video width="850" height="480" style="float:center; margin-top:45px; margin-left:45px; border: 2px solid green; cursor:pointer;" controls>
     <source src="Land Of Rivers.mp4" type="video/mp4">
    </video>

  <div>
    <h3 style="margin-top:40px;text-align: center;font-size:30px;font-weight:595;font-size-adjust: .70;">Wake up in paradise green</h3>
    <p style="text-align:center;font-size:20px;font-size-adjust:.58;color:#4d4d4d;">Find yourself in the land of beauty, school of life and land of stories. Capture your moment with the locals with their simple anabolism of life</p>
 </div>



 <div style="margin-bottom:-33px; max-width:1920px; margin-left:-200px;margin-right:-200px; margin-top:40px;">
     <p style="text-align:center; background-color: #339961;color:azure; padding:20px 0px; font-size:16px;"> &copy;TUSHER AHAMED, CSE, RUET, 2016</p>
 </div>



</body>


</html>
