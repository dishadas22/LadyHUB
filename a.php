<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  Bootstrap CDN
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style1.css">

</head>

<body style="background-color:lightpink;">
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">Women's Health Hub</label>
    <ul>
      <li><a class="active" href="#">Home</a></li>
      <li><a href="#">Explore</a></li>
      <li><a href="#">Complaints</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">Reviews</a></li>
    </ul>
  </nav>

  <div class="container">
    <div class="row text-center py-5">
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
          <div class="card shadow">
            <div>
              <img src="./img/a.png" alt="image1" class="img-fluid card-img-top">
            </div>
            <div class="card-body">
              <h5 class="card-title">Product1</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
                Some quick example to build on the card.
              </p>
              <h5>
                <span style="text-decoration:line-through;">₹449</span>
                <span class="price">₹399</span>
              </h5>
              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>

</body>
</div>
</form>
</div>
<div class="col-md-3 col-sm-6 my-3 my-md-0">
  <form action="index.php" method="post">
    <div class="card shadow">
      <div>
        <img src="./img/b.png" alt="image2" class="img-fluid card-img-top">
      </div>
      <div class="card-body">
        <h5 class="card-title">Product2</h5>
        <h6>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </h6>
        <p class="card-text">
          Some quick example to build on the card.
        </p>
        <h5>
          <small><s style="color black:">₹359</s></small>
          <span style="text-decoration:line-through;">₹359</span>
          <span class="price">₹289</span>
        </h5>
        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
      </div>

      </body>
    </div>
  </form>
</div>
<div class="col-md-3 col-sm-6 my-3 my-md-0">
  <form action="index.php" method="post">
    <div class="card shadow">
      <div>
        <img src="./img/c.png" alt="image3" class="img-fluid card-img-top">
      </div>
      <div class="card-body">
        <h5 class="card-title">Product3</h5>
        <h6>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </h6>
        <p class="card-text">
          Some quick example to build on the card.
        </p>
        <h5>
          <span style="text-decoration:line-through;">₹249</span>
          <span class="price">₹219</span>
        </h5>
        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
      </div>

      </body>
    </div>
  </form>
</div>
<div class="col-md-3 col-sm-6 my-3 my-md-0">
  <form action="index.php" method="post">
    <div class="card shadow">
      <div>
        <img src="./img/d.png" alt="image4" class="img-fluid card-img-top">
      </div>
      <div class="card-body">
        <h5 class="card-title">Product4</h5>
        <h6>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </h6>
        <p class="card-text">
          Some quick example to build on the card.
        </p>
        <h5>
          <span style="text-decoration:line-through;">₹1499</span>
          <span class="price">₹1099</span>
        </h5>
        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
      </div>

      </body>
    </div>
  </form>
</div>
</div>
</div> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ladyhub_HOME</title>

  <!-- FAVICON -->
  <link rel="icon" type="image/png" href="images/favicon.png">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Custom File's Link -->
  <link rel="stylesheet" href="CSS/style.css">
  <!-- <link rel="stylesheet" href="responsive-style.css"> -->

</head>
<style type="text/css">
    * {
        margin: 0px;
        padding: 0px;
    }

    body {
        font-family: arial;
    }

    .main {
      display:flex;
      flex-wrap:wrap;
        margin: 2%;
    }

    .card {
        width:26%;
        display: inline-block;
        box-shadow: 2px 2px 20px black;
        border-radius: 5px;
        margin: 3%;
    }

    .image img {
        width: 100%;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
        /* height: 100%; */
        height: 250px;
        overflow: hidden;



    }

    .title {

        text-align: center;
        padding: 10px;

    }

    h1 {
      color:black;
        font-size: 2rem;
    }

    .des {
        padding: 3px;
        text-align: center;

        padding-top: 10px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
    }
    @media(max-width:770px){
      .main{
        flex-direction:column;
      }
      .card{
        width:95%;
      }
    }

    /* button {
        margin-top: 40px;
        margin-bottom: 10px;
        background-color: white;
        border: 1px solid black;
        border-radius: 5px;
        padding: 10px;
    }

    button:hover {
        background-color: black;
        color: white;
        transition: .5s;
        cursor: pointer;
    } */

    
  
  
  
  /* #navbar{
    border-radius: 0 0 10px 10px;
    padding: 20px;
    box-shadow: 0 0 8px grey;
    display: flex;
    border-color: #222930;
    background-color: #222930;
    position: sticky;
    top: 0px;
    z-index: 1;
    box-shadow: 0 0 18px rgb(60, 60, 60);
  }
  #navbaroutter{
    margin: auto;
  }
  #navbarinner{
    display: flex;
  }
  #navbar h1{
    color: #ffff01;
    font-size: 30px;
    font-weight: bolder;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
  #searchoutter{
    margin: auto;
  }
  #navbarinner ul{
    list-style: none;
    display: flex;
  }
  #navbarinner ul li a{
    padding-right: 35px;
    font-weight: bolder;
    color: #20c2ea;
    font-size: 20px;
    cursor: pointer;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    text-decoration:none;
    transition: 0.3s;
  }
  #navbarinner ul li a:hover{
    color: #e6ff01;
    text-decoration: underline;
  }
  #search{
    align-items: right;
    justify-content: right;
  }
  #SearchBox{
      border-radius: 5px;
      padding-left: 10px;
      padding-top: 2px;
      padding-bottom: 2px;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
  #SearchBox:focus {
      outline: none !important;
      border: 0.5px solid #ffff01;
      box-shadow: 0 0 10px #ffff01;
  }
  #SearchButton{
    color: #e6ff01;
    border-radius: 5px;
    background-color: #222930;
    margin: 2px;
    padding: 0 10px;
    border-color: transparent;
    background: linear-gradient(-135deg, #e6ff01 50%, #222930 50%);
    background-size: 200% 200%;
    background-position: bottom left;
    transition: all .7s ease-out;
    border: 1px solid #222930;
  }
  #SearchButton:hover{
    background-position: top right;
    color: black;
    cursor: pointer;
    box-shadow: 0 0 15px #e6ff01;
    border: 1px solid #e6ff01;
  } */
  /* button{
    color: #e6ff01;
    border-radius: 5px;
    background-color: #222930;
    margin: 2px;
    padding: 14px 50px;
    border-color: transparent;
    background: linear-gradient(-135deg, #e6ff01 50%, #222930 50%);
    background-size: 200% 200%;
    background-position: bottom left;
    transition: all .7s ease-out;
    border: 1px solid #222930;
  }
  button:hover{
    background-position: top right;
    color: black;
    cursor: pointer;
    box-shadow: 0 0 15px #e6ff01;
    border: 1px solid #e6ff01;
  } */
</style>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

<!-- Navbar section -->
<header class="header_wrapper" style="box-shadow:0 0 8px 3px #bebebe">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img href="home.php" src="images/icon1.png" class="img-fluid" style="width:80px; height:80px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <i class="fas fa-stream navbar-toggler-icon"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav  menu-navbar-nav" style="gap:3.5rem">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="FindGroup.php">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Blog.php">Security</a>
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
    <div class="main">

        <!--cards -->

        <div class="card">

            <div class="image">
                <img src="https://m.media-amazon.com/images/I/81ERGWn-tvL.jpg" alt="">
            </div>
            <div class="title">
                <h1>
                Female Hygiene Products</h1>
            </div>
            <div class="des">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt vel accusamus mollitia facere odio cumque praesentium natus. Error ad nemo labore aliquam quasi vero molestiae possimus quidem ducimus? Corrupti, in.</p>
                <br>
                <button class="btn btn-primary">Buy Now | 50$</button>
            </div>
        </div>
        <!--cards -->


        <div class="card">

            <div class="image">
            <img src="./img/a.png" alt="image1" class="img-fluid card-img-top">
            </div>
            <div class="title">
                <h1>
                Female Hygiene Products</h1>
            </div>
            <div class="des">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint minima ab quas pariatur voluptate ullam aut, error ipsum laboriosam soluta impedit laborum, numquam vitae quam, perspiciatis itaque odio quod fugiat?</p>
                <br>
                <button class="btn btn-primary">Buy Now | 55$</button>
            </div>
        </div>
        <!--cards -->


        <div class="card">

            <div class="image">
            <img src="./img/b.png" alt="image2" class="img-fluid card-img-top">
            </div>
            <div class="title">
                <h1>
                    Female Hygiene Products</h1>
            </div>
            <div class="des">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus pariatur voluptate assumenda, ipsum nobis dicta obcaecati quaerat numquam error repellendus quidem autem quibusdam nihil dolorem atque natus illo. Incidunt, unde.</p>
                <br>
                <button class="btn btn-primary">Buy Now | 45$</button>
            </div>
        </div>
        <!--cards -->


       
        <!--cards -->


        
        <!--cards -->

        <div class="card">

            <div class="image">
                <img src="https://media.sciencephoto.com/c0/25/91/87/c0259187-800px-wm.jpg" alt="">
            </div>
            <div class="title">
                <h1>
                Female Hygiene Products</h1>
            </div>
            <div class="des">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In quod non, corrupti repudiandae modi nihil laborum aspernatur, velit fuga nulla temporibus voluptatem, consequatur placeat! Repudiandae ab exercitationem a libero earum!</p>
                <br>
                <button class="btn btn-primary">Buy Now | 10$</button>
            </div>
        </div>
        <!--cards -->

        <div class="card">

            <div class="image">
            <img src="./img/d.png" alt="image4" class="img-fluid card-img-top">
            </div>
            <div class="title">
                <h1>
                Female Hygiene Products</h1>
            </div>
            <div class="des">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In quod non, corrupti repudiandae modi nihil laborum aspernatur, velit fuga nulla temporibus voluptatem, consequatur placeat! Repudiandae ab exercitationem a libero earum!</p>
                <br>
                <button class="btn btn-primary">Buy Now | 25$</button>
            </div>
        </div>
        <!--cards -->


        <div class="card">

            <div class="image">
            <img src="./img/c.png" alt="image3" class="img-fluid card-img-top">
            </div>
            <div class="title">
                <h1>
                Female Hygiene Products</h1>
            </div>
            <div class="des">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate harum totam repellendus quos aliquam eligendi dolor enim ullam eius minus neque officiis, incidunt impedit aperiam dolore, quis numquam quas voluptatem.</p>
                <br>
                <button class="btn btn-primary">Buy Now | 80$</button>
            </div>
        </div>
        <!--cards -->


       
    </div>
    

  <section id="contact" class="footer_wrapper wrapper">
    <div class="container pb-3">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
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
        <div class="col-lg-3 col-md-6 mb-4">
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
        <div class="col-lg-3 col-md-6 mb-4">
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

        <div class="col-lg-3 col-md-6 mb-4">
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

</body>

</html>