<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lemongrass</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="../images/leaficon.png">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href="../css/nav.css" rel="stylesheet">

  <link rel="stylesheet" href="../css/home.css">

  <link href="../css/jasny-bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

  <!-- Side Menu -->
  <div id="sidemenu" class="navmenu navmenu-default navmenu-fixed-left " role="navigation">
      <a id="navbrand" class="navmenu-brand" href="pages/index.html">
        <img class="navimage" src="../images/LG_logo.png" alt="lemongrass logo"/>
      </a>
      <ul class="nav navmenu-nav">
        <li><a id="currentnav" href="pages/index.html">
          <span class="glyphicon glyphicon-home"></span><br/>HOME
        </a></li>
        <li><a href="pages/menu.html">
          <span class="glyphicon glyphicon-cutlery"></span><br/>MENU
        </a></li>
        <li><a href="pages/about.html">
          <span class="glyphicon glyphicon-book"></span><br/>ABOUT
        </a></li>
        <li><a href="pages/contact.html">
          <span class="glyphicon glyphicon-envelope"></span><br/>GET IN TOUCH
        </a></li>
      </ul>
    </div>

  <!-- Page Content -->
  <div class="canvas canvas-close">
    <div id="fixed_bar" class="navbar navbar-default navbar-fixed-top">
      <button id="menubutton" class="navbar-toggle" data-toggle="offcanvas" data-target="#sidemenu" data-canvas="body">
        <span id="menu-bar" class="icon-bar"></span>
        <span id="menu-bar" class="icon-bar"></span>
        <span id="menu-bar" class="icon-bar"></span>
      </button>
      <!-- Logo to be inserted here later -->
    </div>

    <!-- Logo, header, bowl -->
    <div id="header">
      <img id="logo" src="../images/lemongrasslogo_nonfresh.png" alt="logo">
      <h1>T H A I   F U S I O N</h1>
      <br>
      <!-- <img class="bowl" src="../images/bowl-crop.png"> -->
    </div>

    <!-- Farm Fresh Plates -->
    <div id="farmfresh">
      <h1 class="sectionheader">F A R M  F R E S H  P L A T E S</h1>
    </div>

    <!-- Hours & Location -->
    <div id="hours">
      <h1 class="sectionheader">H O U R S</h1>
      <ul>
        <li>Mon - Thurs           9:00 am - 9:00 pm</li>
        <li>Fri                          9:30 am - 7:00 pm</li>
        <li>Sat                        11:00 am - 6:00 pm</li>
        <li>Sun                        11:00 am - 6:00 pm</li>
      </ul>
      <h2>UCSD Price Center</h2>
      <h4>(Between Rubio's & Panda Express)</h4>
      <a href="https://www.google.com/maps/place/9700+Gilman+Dr,+La+Jolla,+CA+92093/data=!4m2!3m1!1s0x80dc06c53c250d85:0xb61d3ac21c07f5eb?sa=X&ved=0ahUKEwj-vabpo4PLAhVQw2MKHXNzBu0Q8gEIGzAA" target="_blank">
        <h3>9700 Gilman Dr. San Diego, CA 92093</h3>
      </a>
    </div>

    <!-- Gallery -->
    <div id="gallery" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#gallery" data-slide-to="0" class="active"></li>
        <li data-target="#gallery" data-slide-to="1"></li>
        <li data-target="#gallery" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="../images/grilledplate.jpg" />
          <div class="carousel-caption">
            <h3>Online Ordering Coming Soon</h3>
            <p>No more waiting...</p>
          </div>
        </div>
        <div class="item">
          <img src="../images/friedrice.jpg" />
          <div class="carousel-caption">
            <h3>What's New</h3>
            <p>We're coming up with new ideas! Stay tuned.</p>
          </div>
        </div>
        <div class="item">
          <img src="../images/drinks.png" />
          <div class="carousel-caption">
            <h3>We Like Feedback</h3>
            <p>Feel free to leave suggestions on our "get in touch" page!</p>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#gallery" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#gallery" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

  </div>

  <!--Footer-->
  <div class="footer">
      <div class="footercontent">
              <a href="https://www.facebook.com/LemongrassPlates/"><i class="fa fa-facebook-official"></i></a>
              <a href="http://www.yelp.com/biz/lemongrass-plates-san-diego"><i class="fa fa-yelp"></i></a> (858) 455-6465
      </div>
  </div>

  <script src="../js/jquery-1.12.0.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jasny-bootstrap.min.js"></script>
  <script src="../js/nav.js"></script>

</body>
</html>
