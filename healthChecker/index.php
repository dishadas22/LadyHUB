<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- <link rel="stylesheet" href="../CSS/home-style.css"> -->
    <link rel="stylesheet" type="text/css" href="symptom_selector/selector.css?v=1">
    <link rel="stylesheet" type="text/css" href="symptom_selector/fontawesome/assets/css/font-awesome.min.css" />
    <script src="libs/jquery-1.12.2.min.js"></script>
    <script src="libs/json2.js"></script><!-- json for ie7 -->
    <script src="libs/jquery.imagemapster.min.js?v=1.1"></script>
    <script src="libs/typeahead.bundle.js"></script>

    <script src="symptom_selector/selector.js?v=3.3"></script>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ladyhub-Checker</title>

  <!-- FAVICON -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Bootstrap 5 CDN Links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Custom File's Link -->
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="responsive-style.css"> -->
  <link rel="stylesheet" href="../CSS/security.css">
  <audio id="myAudio">
    <source src="Iphone Alarm.mp3" type="audio/mpeg">
  </audio>


    <?php

    // session_start(); // this causes some issues with certain servers, try this if it's working with this line or not.

    /**
     * For Live API service use the Live API endpoints:
     * Instead of the Sandbox Authservice endpoint "https://sandbox-authservice.priaid.ch/login" you should use the Live Authservice endpoint "https://authservice.priaid.ch/login" 
     * Instead of the Sandbox Healthservice endpoint "https://sandbox-healthservice.priaid.ch" you should use the Live Authservice endpoint "https://healthservice.priaid.ch" 
     */

    if (!isset($_SESSION['userToken']) || !isset($_SESSION['tokenExpireTime']) || time() >= $_SESSION['tokenExpireTime']) {
        require 'token_generator.php';
        $tokenGenerator = new TokenGenerator("a6NXo_GMAIL_COM_AUT", "o2KEb94YiWw83Dyq5", "https://authservice.priaid.ch/login");
        $token = $tokenGenerator->loadToken();
        $_SESSION['userToken'] = $token->{'Token'};
        $_SESSION['tokenExpireTime'] = time() + $token->{'ValidThrough'};
    }

    $token = $_SESSION['userToken'];
    ?>

    <script type="text/javascript">
        var userToken = <?php echo "'" . $token . "'" ?>;

        $(document).ready(function() {
            $("#symptomSelector").symptomSelector({
                mode: "diagnosis",
                webservice: "https://healthservice.priaid.ch",
                language: "en-gb",
                specUrl: "sample_specialisation_page",
                accessToken: userToken
            });
        });
    </script>


</head>
<!-- <header id="header">
    <div id="brand">
        <img id="header-img" src="../assets/icon1.png" href="home.php" />
    </div>
    <nav id="nav-bar">
        <a class="nav-link" href="../home.php">Home</a>
        <a class="nav-link" href="../FindGroup.php">Events</a>
        <a class="nav-link" href="../ConsultWithDoctor.php">Consult</a>
        <a class="nav-link" href="../Blog.php">Blog</a>
        <a class="nav-link" href="../profile.php">Profile</a>
    </nav>
</header> -->

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

<!-- Navbar section -->
<header class="header_wrapper" style="background-color: #fff;box-shadow:0 0 8px 3px rgba(146, 142, 142, 0.452)">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../images/icon1.png" class="img-fluid" style="width:80px; height:80px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <i class="fas fa-stream navbar-toggler-icon"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav  menu-navbar-nav" style="gap:3.5rem">

          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Consult</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Profile</a>
          </li> -->


          <li class="nav-item">
            <a class="nav-link active"  href="../home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../FindGroup.php">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../ConsultWithDoctor.php">Consult</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../Blog.php">Security</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../profile.php">Profile</a>
          </li>
          <!-- <li class="nav-item">
                                  <a class="nav-link" href="#testimonial">Testimonial</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#blog">Blog</a>
                                </li>
                                <li class="nav-item mt-3 mt-lg-0">
                                  <a class="nav-link" href="#contact">Contact</a>
                                </li> -->
        </ul>
      </div>
    </div>
  </nav>
</header>
    <h1 class="mt-5" style="margin-left:32%;color:#ff3256;font-family: Brush Script MT, Brush Script Std, cursive;font-size:3rem"><b>Physical Health Checker</b></h1><br>
    <table class="container-table my-5 mx-3">
        <tr>
            <td valign="middle" colspan="2" class="td-header box-white bordered-box width50">
                <h4 class="header" id="selectSymptomsTitle"><span class="badge pull-left badge-primary visible-lg margin5R">1</span></h4>
            </td>
            <td valign="middle" class="td-header bordered-box box-white width25">
                <h4 class="header" id="selectedSymptomsTitle"><span class="badge pull-left badge-primary visible-lg margin5R">2</span></h4>
            </td>
            <td valign="middle" class="td-header bordered-box box-white width25">
                <h4 class="header" id="possibleDiseasesTitle"><span class="badge pull-left badge-primary visible-lg margin5R">3</span></h4>
            </td>
        </tr>
        <tr>
            <td valign="top" class="selector_container bordered-box box-white width25">
                <div id="symptomSelector"></div>
            </td>
            <td valign="top" class="selector_container bordered-box box-white width25">
                <div id="symptomList"></div>
            </td>
            <td valign="top" class="selector_container bordered-box box-white width25">
                <div id="selectedSymptomList"></div>
            </td>
            <td valign="top" class="selector_container bordered-box box-white width25">
                <div id="diagnosisList"></div>
            </td>
        </tr>
    </table>
    <div>
        <a target="_blank" href="http://apimedic.com"><img class="logo" alt="ApiMedic by priaid" src="symptom_selector/images/logo.jpg" /></a>
        <span><a class="priaid-powered" target="_blank" href="http://apimedic.com"> powered by </a> </span>
    </div>
  
    <section id="contact" class="footer_wrapper wrapper">
    <div class="container pb-3">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 mt-4">
          <h5>Ladyhub Office</h5>
          <p class="ps-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat ut
            laoreet
            pharetra....</p>
          <div class="contact-info">
            <ul class="list-unstyled p-0">
              <li><a href="#"><i class="fa fa-home me-3"></i> Jadavpur University , Kolkata</a></li>
              <li><a href="#"><i class="fa fa-phone me-3"></i>+91 8100522467</a></li>
              <li><a href="#"><i class="fa fa-envelope me-3"></i>ladyhub2022@gmail.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mt-4">
          <h5>More Links</h5>
          <ul class="link-widget p-0">
            <!-- <li><a href="#">About Us</a></li> -->
            <!-- <li><a href="#">Our Office</a></li> -->
            <li><a href="#">Delivery</a></li>
            <!-- <li><a href="#">Our Store</a></li> -->
            <li><a href="#">Guarantee</a></li>
            <li><a href="#">Buy Gift Card</a></li>
            <li><a href="#">Return Policy</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mt-4">
          <h5>More Links</h5>
          <ul class="link-widget p-0">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Office</a></li>
            <!-- <li><a href="#">Delivery</a></li> -->
            <li><a href="#">Our Store</a></li>
            <!-- <li><a href="#">Guarantee</a></li> -->
            <!-- <li><a href="#">Buy Gift Card</a></li> -->
            <!-- <li><a href="#">Return Policy</a></li> -->
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mt-4">
          <h5>Newsletter</h5>
          <div class="form-group mb-4">
            <input type="email" class="form-control bg-transparent" placeholder="Enter Your Email Here">
            <button type="submit" class="main-btn rounded-2 mt-3 border-white text-white">Subscribe</button>
          </div>
          <h5>Stay Connected</h5>
          <ul class="social-network d-flex align-items-center p-0 ">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
          </ul>
        </div>



      </div>
    </div>
    <div class="container-fluid copyright-section">
      <p class="p-0">Copyright <a href="#">@Ladyhub</a>2022 All Rights Reserved</p>
    </div>
  </section>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
  <script>
   
  </script>
  </body>
</html>
