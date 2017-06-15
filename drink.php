<!DOCTYPE html>
<html lang="en">
<head>
  <title>Restaurant</title>
  <link rel="icon" type="image/jpg" href="image/a.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/hover-min.css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/jquery_1_11_2.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  </style>
</head>
<body>
<div class="banner">
  <div class="container" >
    <div class="row">
      <div class="col-sm-12" style="margin: 5px 0px;"> 
        <a href="home.html"><img src="image/restaurant_logo.png" class="img-responsive"></a>
      </div>
      </div>
    </div>
<div > 
<nav class="navbar navbar-inverse"  data-spy="affix" data-offset-top="197">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.html">RESTAURANT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="hvr-underline-from-left"><a href="home.html">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle hvr-underline-from-left" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color: #4d394b">
            <li><a href="breakfast.php">Breakfast</a></li>
            <li><a href="lunch.php">Lunch</a></li>
            <li><a href="dinner.php">Dinner</a></li>
          </ul>
        </li>
        <li class="hvr-underline-from-left"><a href="AboutUS.html">About Us</a></li>
        <li class="hvr-underline-from-left"><a href="Contact.php">Contact</a></li>
        <li class="hvr-underline-from-left"><a href="team.php"> TEAM</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="hvr-float-shadow">
          <a href="https://www.facebook.com/Restaurant-OS-551156428337035/" target="blank" data-toggle="tooltip" data-placement="top" title="Facebook">
            <img src="image/facebook_logo.png" style="width: 32px;height: 32px;" class="img-responsive">
          </a>
        </li>
        <li class="hvr-float-shadow">
          <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter">
            <img src="image/twitter.png" style="width: 32px;height: 32px;" class="img-responsive">
          </a>
        </li>
        <li class="hvr-float-shadow">
          <a href="#" data-toggle="tooltip" data-placement="top" title="Google plus">
            <img src="image/google_plus.png" style="width: 32px;height: 32px;" class="img-responsive">
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
</div>
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" style="position: relative; margin-top: -57px;">
    <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="image/slide/special3.png" class="img-responsive">
            </div>

            <div class="item">
              <img src="image/slide/special1.png" class="img-responsive">
            </div>
          
            <div class="item">
              <img src="image/slide/special2.png" class="img-responsive">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          </div>
       </div>
    </div>
  <div class="row">
  <div class="col-sm-3">
      <div class="thumbnail block wow bounceInLeft">
        <a href="image/drink/drink1.jpg" rel="prettyPhoto">
          <img src="image/drink/drink1.jpg" alt="FastFood1 7$" style="width:100%; height: 180px">
            <div class="caption">
            <button type="submit" class="btn hvr-bounce-to-left" style="margin-left: 10%;margin-top: 5%; width: 80%; background-color: #c01d2e; border-color: none;">VIEW</button>
          </div>
          
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail block wow wobble">
        <a href="image/drink/drink2.jpg" rel="prettyPhoto">
          <img src="image/drink/drink2.jpg" alt="FastFood2 4$" style="width:100%; height: 180px">
          <div class="caption">
            <button type="submit" class="btn hvr-bounce-to-left" style="margin-left: 10%;margin-top: 5%; width: 80%;background-color: #ae255f; border-color: none; color: white;">VIEW</button>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail block wow wobble">
        <a href="image/drink/drink3.jpg" rel="prettyPhoto">
          <img src="image/drink/drink3.jpg" alt="FastFood3 6$" style="width:100%; height: 180px;">
          <div class="caption">
            <button type="submit" class="btn hvr-bounce-to-right" style="margin-left: 10%;margin-top: 5%; width: 80%;background-color: #fd9d07; border-color: none;">VIEW</button>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail block wow bounceInRight">
        <a href="image/drink/drink4.jpg" rel="prettyPhoto">
          <img src="image/drink/drink4.jpg" alt="FastFood4 5.5$" style="width:100%; height: 180px">
          <div class="caption">
            <button type="submit" class="btn hvr-bounce-to-right" style="margin-left: 10%;margin-top: 5%; width: 80%;background-color: #ff4202; border-color: none;">VIEW</button>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-sm-3">
      <div class="thumbnail block wow bounceInLeft">
        <a href="image/drink/drink5.jpg" rel="prettyPhoto">
          <img src="image/drink/drink5.jpg" alt="FastFood5 7$" style="width:100%; height: 180px">
            <div class="caption">
            <button type="submit" class="btn hvr-float-shadow" style="margin-left: 10%;margin-top: 5%; width: 80%;background-color: #c01d2e; border-color: none;">VIEW</button>
          </div>
          
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail block wow wobble">
        <a href="image/drink/drink8.jpg" rel="prettyPhoto">
          <img src="image/drink/drink8.jpg" alt="FastFood6 6$" style="width:100%; height: 180px;">
          <div class="caption">
            <button type="submit" class="btn hvr-float-shadow" style="margin-left: 10%;margin-top: 5%; width: 80%;background-color: #ae255f; border-color: none; color: white;">VIEW</button>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail block wow wobble">
        <a href="image/drink/drink7.jpg" rel="prettyPhoto">
          <img src="image/drink/drink7.jpg" alt="FastFood7 7$" style="width:100%; height: 180px">
          <div class="caption">
            <button type="submit" class="btn hvr-float-shadow" style="margin-left: 10%;margin-top: 5%; width: 80%;background-color: #fd9d07; border-color: none;">VIEW</button>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail block wow bounceInRight">
        <a href="image/drink/drink9.jpg" rel="prettyPhoto">
          <img src="image/drink/drink9.jpg" alt="FastFood8 6.5$" style="width:100%; height: 180px">
          <div class="caption">
            <button type="submit" class="btn hvr-float-shadow" style="margin-left: 10%;margin-top: 5%; width: 80%;background-color: #ff4202; border-color: none;">VIEW</button>
          </div>
        </a>
      </div>
    </div>
  </div>
      <div class="row">
  <div class="col-sm-3">
      <div class="thumbnail block wow bounceInLeft">
        <a href="image/drink/drink8.jpg" rel="prettyPhoto">
          <img src="image/drink/drink8.jpg" alt="7$" style="width:100%; height: 180px;">
            <div class="caption">
            <button type="submit" class="btn hvr-bounce-to-right" style="margin-left: 10%;margin-top: 5%; width: 80%;background-color: #c01d2e; border-color: none;">VIEW</button>
          </div>
          
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail block wow wobble">
        <a href="image/offer/offer3.png" rel="prettyPhoto">
          <img src="image/offer/offer3_3.png" alt="7$" style="width:100%; height: 180px">
          <div class="caption">
            <button type="submit" class="btn hvr-bounce-to-right" style="margin-left: 10%;margin-top: 5%; width: 80%;background-color: #ae255f; border-color: none; color: white;">VIEW</button>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail block wow wobble">
        <a href="image/offer/offer2.jpg" rel="prettyPhoto">
          <img src="image/offer/offer2_2.png" alt="7$" style="width:100%; height: 180px">
          <div class="caption">
            <button type="submit" class="btn hvr-bounce-to-left" style="margin-left: 10%;margin-top: 5%; width: 80%;background-color: #fd9d07; border-color: none;">VIEW</button>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail block wow bounceInRight">
        <a href="image/drink/fast4.jpg" rel="prettyPhoto">
          <img src="image/drink/fast4.jpg" alt="6$" style="width:100%; height: 180px">
          <div class="caption">
            <button type="submit" class="btn hvr-bounce-to-left" style="margin-left: 10%;margin-top: 5%; width: 80%;background-color: #ff4202; border-color: none;">VIEW</button>
          </div>
        </a>
      </div>
    </div>
  </div>
    </div>    
  </div>
</div>
</div>

<footer class="parallax-section" id="footer4">
  <div class="container" >
    <div class="row">
      <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
        <h4 class="heading-f">Contact Info:</h4>
        <div class="ph">
          <h6 class="heading-f1"><i class="fa fa-phone"></i>Phone:</h6>
          <h6 class="heading-f1"><i>+855 (0)15 5555 54 </i></h6>
          <h6 class="heading-f1"><i>+855 (0)12 5555 54</i></h6>
        </div>

        <div class="em">
          <h6 class="heading-f"><i class="fa fa-envelope"></i>Email:</h6>
          <h6 class="heading-f">restaurant_os@gmail.com</h6>
        </div>

        <div class="address">
          <h4 class="heading-f"><i class="fa fa-map-marker"></i> Our Location:</h4>
          <h6 class="heading-f"><i>No.136, Preah Sisowath Blvd, Phnom Penh, Cambodia</i></h6>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
        <h4 class="heading-f">Open Hours</h4>
          <h6 class="heading-f"><i>Sunday <span>7:30 AM - 10:00 PM</span></i></h6>
          <h6 class="heading-f"><i>Mon-Fri <span>6:00 AM - 10:00 PM</span></i></h6>
          <h6 class="heading-f"><i>Saturday <span>6:30 AM - 10:00 PM</span></i></h6>
      </div>
      <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
        <h4 class="heading-f">Information</h4>
        <h6 class="heading-f"><i>Delivery Service</i></h6>
        <h6 class="heading-f"><i>News and Events</i></h6>
        <ul class="social-icon"; type="none">
          <li>
            <a href="https://www.facebook.com/Restaurant-OS-551156428337035/" target="blank" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a>
          </li>
          <li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
          <li><a href="#" class="fa fa-instagram wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="#" class="fa fa-youtube wow bounceIn" data-wow-delay="0.11s"></a></li>
          <li><a href="#" class="fa fa-google  wow bounceIn" data-wow-delay="0.11s"></a></li>
        </ul><br>
        <h6 class="heading-f"><i>© 2010-2017 Restaurant OS. All rights reserved.</i></h6>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
  $("a[rel^='prettyPhoto']").prettyPhoto();
});
</script>
 <script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>