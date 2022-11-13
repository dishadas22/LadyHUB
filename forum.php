<?php
    require_once('config.php');
    // $server= "localhost";
    // $username="root";
    // $password="";
    // $con= mysqli_connect($server,$username,$password,'sashakti');
    $bc= 0;
    $mc=0;
    $query= "SELECT * FROM questions";
    $result= $con->query($query);
    $m="Mindspace";
    $b= "Bodyspace";
    while($row= $result->fetch_array()){
        if($row['category']==$m)    $mc=$mc+1;
        else                        $bc=$bc+1;
    }
    
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ladyhub-Security</title>

  <!-- FAVICON -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Bootstrap 5 CDN Links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Custom File's Link -->
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="responsive-style.css"> -->
  <link rel="stylesheet" href="CSS/security.css">
  <audio id="myAudio">
    <source src="Iphone Alarm.mp3" type="audio/mpeg">
  </audio>



    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 40%;
  padding: 0 10px;
  margin-left: 5%;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 0px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background: linear-gradient(to bottom, #A4BFEF 0%, #6A93CB 100%);
};

</style>
  <!-- </head>
  <header id="header">
  <div id="brand">
     <img id="header-img" src="assets/icon1.png" href="home.php"/>
  </div>
  <nav id="nav-bar" style="display: flex;">
    <a class="nav-link" href="home.php">Home</a>
    <a class="nav-link" href="FindGroup.php">Events</a>
    <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
    <a class="nav-link" href="Blog.php">Blog</a>
    <a class="nav-link" href="profile.php">Profile</a>
  </nav> -->
</header>

  <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

<!-- Navbar section -->
<header class="header_wrapper" style="background-color: #fff;box-shadow:0 0 8px 3px rgba(146, 142, 142, 0.452)">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/icon1.png" class="img-fluid" style="width:80px; height:80px">
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
            <a class="nav-link active"  href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="FindGroup.php">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Blog.php">Security</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
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
    <div style="margin-left: 30%;">
    <h1 style="margin-top:5%;margin-left:-5%;color:#ff3256;font-family: Brush Script MT, Brush Script Std, cursive;"><b>Welcome to our Forum!</b></h1><br>
    <a href="question.php"><button class="btn btn-primary" style="margin-left:20%;">Ask a question</button></a> <br>
</div>
    <!-- <div class="container">
        <div class="d-flex flex-row">
            <h3>List of Categories</h3>
            style="border-radius:20px; box-shadow: 2px;margin-left:15%; background-color:#27f58e; width:250px"

        </div>
    </div> -->
   
    <!-- <table class="table table-hover table-bordered">
    <thead>
        <th scope="col">Category</th>
        <th scope="col">Number of questions</th>
        
       
        
      </thead>
      <tbody>
      <tr>
        <td><?php echo "<a href='feed.php?category=".$m."'>Mindspace</a>";?></td>
        <td><?php echo $mc?></td>
      </tr>
      <tr>
        <td><?php echo "<a href='feed.php?category=".$b."'>Bodyspace</a>"?></td>
        <td><?php echo $bc?></td>
      </tr>

      </tbody>

   

    </table> -->
  
    <div class="row" style="margin: 10% 0;">
  <div class="column">
    <div class="card">
      <img src="./assets/mind.png" style="height:200px;width:200px;object-fit:cover;margin-left:29%"></img>
      <p><?php echo "<a href='feed.php?category=".$m."' style='color:white;font-size:50px;'>Mindspace</a>";?></p>
      <p><b> <?php echo $mc?> Questions</b></p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./assets/body.png" style="height:200px;width:200px;object-fit:cover;margin-left:29%"></img>
      <p><?php echo "<a href='feed.php?category=".$b."' style='color:white;font-size:50px;'>Bodyspace</a>";?></p>
      <p><b> <?php echo $bc?> Questions</b></p>
    </div>
  </div>
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
