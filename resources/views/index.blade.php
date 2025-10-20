<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ScholarSphere</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</heder-iad>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="{{ asset('images/slimg.png') }}" alt="" />
            <span>
              ScholarSphere
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/index') }}">Home <span class="sr-only">(current)</span></a>
              </li>
             <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}"> About</a>
             </li>
              
              
            </ul>
            <div class="user_option">
              <a href="{{ url('/auth') }}">
                <span>
                  Login
                </span>
              </a>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="carousel_btn-container">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                       <br>
                      Connect, Debate, Learn; <br>
                     Unleash Scholarly Excellence 
                    </h1>
                    <p>
                     ScholarSphere is more than just a web app — it's a digital hub where curiosity meets collaboration. Designed for scholars, students, and knowledge enthusiasts, ScholarSphere offers a vibrant space to share ideas, engage in meaningful debates, and explore intellectual content across discipline.
                    </p>
                    
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="{{ asset('images/slider-img.jpeg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Connect, Debate, Learn; <br>
                      Unleash Scholarly Excellence
                       <br>
            
                    </h1>
                    <p>
ScholarSphere is more than just a web app — it's a digital hub where curiosity meets collaboration. Designed for scholars, students, and knowledge enthusiasts, ScholarSphere offers a vibrant space to share ideas, engage in meaningful debates, and explore intellectual content across discipline.
                    </p>
                    
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="{{ asset('images/slider2-img.jpeg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Connect, Debate, Learn; <br>
                     Unleash Scholarly Excellence
                      <br>
                      
                    </h1>
                    <p>
                     ScholarSphere is more than just a web app — it's a digital hub where curiosity meets collaboration. Designed for scholars, students, and knowledge enthusiasts, ScholarSphere offers a vibrant space to share ideas, engage in meaningful debates, and explore intellectual content across discipline.
                    </p>
                    
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="{{ asset('images/slider3-img.jpg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- experience section -->

  <section class="experience_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="{{ asset('images/experience-img.jpeg') }}" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Best Experinced scholars are here!
              </h2>
            </div>
            <p>
              At ScholarSphere, we believe that knowledge grows when it's shared — and even more when it's challenged. Join the conversation. Shape ideas. Expand your sphere.
            </p>
           
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end experience section -->

  <!-- category section -->

  <section class="category_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          OBJECTIVES
        </h2>
      </div>
      <div class="category_container">
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/c1.png') }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Authenticated Profiles
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/c2.png') }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
            GLOBAL COLLABORATION
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/c3.png') }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Access To E Books
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/c4.png') }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              USER CENTRIC DESIGN
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/c5.png') }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              SECURE ENVIRONMENT
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('images/c6.png') }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              AI INTEGRATION
            </h5>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end category section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-9 mx-auto">
          <div class="img-box">
            <img src="{{ asset('images/about-img.jpg') }}" alt="">
          </div>
        </div>
      </div>
      <div class="detail-box">
        <h2>
          About Scholar Sphere 
        </h2>
        <p>
         This forum is specially built to connect the Scholars and Knowledge Seekers. <br>
         The inspiration behind Scholar Sphere is to improve intellect and bring era of books back.        </p>
       
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- freelance section -->

  <section class="freelance_section ">
    <div id="accordion">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-1">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Key Features
                </h2>
              </div>
              <div class="tab_container">
                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <div class="img-box">
                    <img src="{{ asset('images/f1.png') }}" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      Profiles Creation
                    </h5>
                    <h3>
                      Make your profile by login
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="img-box">
                    <img src="{{ asset('images/f2.png') }}" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      Debate forum
                    </h5>
                    <h3>
                      Debate on topics with relevant Scholars.
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <div class="img-box">
                    <img src="{{ asset('images/f3.png') }}" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      E Librarry
                    </h5>
                    <h3>
                      Access the books throuh e Libraray
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <div class="img-box">
                    <img src="{{ asset('images/f4.png') }}" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      Debate Insights
                    </h5>
                    <h3>
                      Generate debate insights by reducing long debates into short points
              
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="img-box">
                <img src="{{ asset('images/freelance-img.jpg') }}" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="img-box">
                <img src="{{ asset('images/freelance-img.jpg') }}" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="img-box">
                <img src="{{ asset('images/freelance-img.jpg') }}" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
              <div class="img-box">
                <img src="{{ asset('images/freelance-img.jpg') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end freelance section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-10 mx-auto">
          <div class="heading_container">
            <h2>
              Testimonial
            </h2>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h4>
                  Laiba Maryam
                  </h4>
                  <p>ScholarSphere has completely transformed the way I connect with other thinkers. It's like a social network for ideas — and the debates are as enlightening as they are engaging!
</p>
                  <img src="{{ asset('images/quote.png') }}" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    Laiba Maryam
                  </h4>
                  <p>
                    ScholarSphere has completely transformed the way I connect with other thinkers. It's like a social network for ideas — and the debates are as enlightening as they are engaging!
                  </p>
                  <img src="{{ asset('images/quote.png') }}" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    Laiba maryam
                  </h4>
                  <p>
                    ScholarSphere has completely transformed the way I connect with other thinkers. It's like a social network for ideas — and the debates are as enlightening as they are engaging!
                  </p>
                  <img src="{{ asset('images/quote.png') }}" alt="">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->



  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <img src="{{ asset('images/logo.png') }}" alt="" />
            <span>
              ScholarSphere
            </span>
          </div>
          <div class="social_box">
            <a href="#">
              <img src="{{ asset('images/fb.png') }}" alt="">
            </a>
            <a href="#">
              <img src="{{ asset('images/twitter.png') }}" alt="">
            </a>
            <a href="#">
              <img src="{{ asset('images/linkedin.png') }}" alt="">
            </a>
            <a href="#">
              <img src="{{ asset('images/instagram.png') }}" alt="">
            </a>
            <a href="#">
              <img src="{{ asset('images/youtube.png') }}" alt="">
            </a>
          </div>
        </div>

        <div class="info_main">
          <div class="row">
            <div class="col-md-3 col-lg-2">
              <div class="info_link-box">
                <h5>
                  Useful Link
                </h5>
                <ul>
                  <li class=" active">
                    <a class="" href="{{ url('/index') }}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="">
                    <a class="" href="{{ url('/about') }}">About </a>
                  </li>
                  <li class="">
                    <a class="" href="{{ url('/work') }}">Work </a>
                  </li>
                  <li class="">
                    <a class="" href="{{ url('/category') }}">Category </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 ">
              <h5>
                Offices
              </h5>
              <p>
                Readable content of a page when looking at its layoutreadable content of a page when looking at its layout
              </p>
            </div>

            <div class="col-md-3 col-lg-2 offset-lg-1">
              <h5>
                Information
              </h5>
              <p>
                Readable content of a page when looking at its layoutreadable content of a page when looking at its layout
              </p>
            </div>

            <div class="col-md-3  offset-lg-1">
              <div class="info_form ">
                <h5>
                  Newsletter
                </h5>
                <form action="">
                  <input type="email" placeholder="Email">
                  <button>
                    Subscribe
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-10 mx-auto">
            <div class="info_contact layout_padding2">
              <div class="row">
                <div class="col-md-3">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="{{ asset('images/location.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Location
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="{{ asset('images/mail.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Scholars@gmail.com
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-5">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="{{ asset('images/call.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Call 03438622088
                      </h6>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayDate"></span> All Rights Reserved By ScholarSphere
  
      </p>
    </div>
</footer>
  <!-- end  footer section -->


  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>


</body>
</body>

</html>