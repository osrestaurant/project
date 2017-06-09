<!DOCTYPE html>
<html>
<head>
	<title>Restaurant</title>
  <link rel="icon" type="image/jpg" href="image/a.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<script type="text/javascript" src="js/jquery_1_11_2.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
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
  <div> 
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
            <li><a href="home.html">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 
              <span class="caret"></span></a>
              <ul class="dropdown-menu" style="background-color: #4d394b">
                <li><a href="#">Breakfast</a></li>
                <li><a href="#">Lunch</a></li>
                <li><a href="#">Dinner</a></li>
              </ul>
            </li>
            <li class="active"><a href="AboutUS.html">About Us</a></li>
            <li><a href="Contact.html">Contact</a></li>
        <!-- <li><a href="#"></a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><img src="image/facebook_logo.png" style="width: 32px;height: 32px;" class="img-responsive"></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><img src="image/twitter.png" style="width: 32px;height: 32px;" class="img-responsive"></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google plus"><img src="image/google_plus.png" style="width: 32px;height: 32px;" class="img-responsive"></a></li>
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
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="position: relative; margin-top: -60px;">
    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner" role="listbox">
			      <div class="item active">
			        <img src="image/food/1.jpg" class="img-responsive">
			      </div>

			      <div class="item">
			        <img src="image/food/2.jpg" class="img-responsive">
			      </div>
			    
			      <div class="item">
			        <img src="image/food/3.jpg" class="img-responsive">
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
  </div>
</div>
<footer class="parallax-section" id="footer4">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
        <h2 class="heading">Contact Info.</h2>
        <div class="ph">
          <p><i class="fa fa-phone"></i> Phone</p>
          <h4>+855 (0)15 814 888</h4>
        </div>

        <div class="em">
          <p><i class="fa fa-envelope"></i>Email</p>
          <h4>monalisa-restuarant@gmail.com</h4>
        </div>

        <div class="address">
          <p><i class="fa fa-map-marker"></i> Our Location</p>
          <h5>No.136 Preah Sisowath Blvd, Phnom Penh, Cambodia</h5>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
        <h2 class="heading">Open Hours</h2>
          <p>Sunday <span>7:30 AM - 10:00 PM</span></p>
          <p>Mon-Fri <span>6:00 AM - 10:00 PM</span></p>
          <p>Saturday <span>6:30 AM - 10:00 PM</span></p>
      </div>
      <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
        <h2 class="heading">Monalisa Restuarant</h2>
        <ul class="social-icon"; type="none">
          <li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
          <li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
          <li><a href="#" class="fa fa-instagram wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="#" class="fa fa-tripadvisor wow bounceIn" data-wow-delay="0.11s"></a></li>
          <li><a href="#" class="fa fa-linkedin  wow bounceIn" data-wow-delay="0.11s"></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>
