<?php

foreach ($products as $product):
?>
    <h2>
        <?= $product->title() ?>
    </h2>

<?php endforeach ?>


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

  <title>
    TripBiz
  </title>

  <!-- range selctor slider style -->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="#">
            <span>
              TripBiz
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#bookTrip">
                    Book Trip
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#package">
                    Packages
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#service">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#blog">Blog</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="">
                Get A quote
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="slider_container">
                <div class="box">
                  <div class="detail-box">
                    <h1>
                      TripBiz
                    </h1>
                    <h2>
                      A
                      Human
                      Explostion
                    </h2>
                  </div>
                  <div class="img-box">
                    <div class="play_btn">
                      <a href="">
                        <img src="images/play.png" alt="">
                      </a>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="btn-box">
                  <a href="">
                    Discover More
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="slider_container">
                <div class="box">
                  <div class="detail-box">
                    <h1>
                      TripBiz
                    </h1>
                    <h2>
                      A
                      Human
                      Explostion
                    </h2>
                  </div>
                  <div class="img-box">
                    <div class="play_btn">
                      <a href="">
                        <img src="images/play.png" alt="">
                      </a>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="btn-box">
                  <a href="">
                    Discover More
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="slider_container">
                <div class="box">
                  <div class="detail-box">
                    <h1>
                      TripBiz
                    </h1>
                    <h2>
                      A
                      Human
                      Explostion
                    </h2>
                  </div>
                  <div class="img-box">
                    <div class="play_btn">
                      <a href="">
                        <img src="images/play.png" alt="">
                      </a>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="btn-box">
                  <a href="">
                    Discover More
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>

  <!-- trip section -->

  <section class="trip_section layout_padding" id="bookTrip">
    <div class="container">
      <div class="heading_container">
        <h2>
          Book Your Trip
        </h2>
        <p>
          aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
        </p>
      </div>
    </div>
    <div class="container ">
      <div class="box container-bg">
        <div class="img-box">
          <img src="images/form-img.png" alt="">
        </div>
        <div class="form_container">
          <form>
            <div class="form-group">
              <div class="input-group ">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <img src="images/location.png" alt="">
                  </div>
                </div>
                <input type="text" class="form-control" id="inputDestination" placeholder="Where You Want Go? ">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group ">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <img src="images/location.png" alt="">
                  </div>
                </div>
                <input type="text" class="form-control" id="inputLocation" placeholder="All Locations">
              </div>
            </div>
            <div class="form-group ">
              <div class="input-group ">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <img src="images/language.png" alt="">
                  </div>
                </div>
                <select id="inputLanguage" class="form-control">
                  <option selected>All Language</option>
                  <option>...</option>
                </select>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <img src="images/down-arrow.png" alt="">
                  </div>
                </div>
              </div>
              <div class="select_arrow"></div>
            </div>
            <div class="form-group">
              <div class="input-group ">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <img src="images/earth.png" alt="">
                  </div>
                </div>
                <input type="text" class="form-control" id="inputLocation" placeholder="All Tour Type">
              </div>
            </div>
            <div class="range_input">
              <label for="my_range">
                Select Price Range
              </label>
              <div class="form-group ">
                <input type="text" class="js-range-slider form-control" name="my_range" value="" />
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="">Book Now</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end trip section -->


  <!-- package section -->

  <section class="package_section" id="package">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Packages
        </h2>
        <p>
          aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
        </p>
      </div>
    </div>
    <div class="container">
      <div class="box container-bg">
        <div class="img-box">
          <img src="images/package-img.png" alt="">
        </div>
        <div class="detail-container">
          <div class="detail-box">
            <h4>
              Basic Rate
            </h4>
            <h2>
              <span>$</span>200
            </h2>
            <ul>
              <li>
                Lorem ipsum dolor sit
              </li>
              <li>
                Lorem ipsum dolor sit
              </li>
              <li>
                adipiscing elit, sed do
              </li>
              <li>
                eiusmod tempor
              </li>
            </ul>
            <a href="">
              Book Now
            </a>
          </div>
          <div class="detail-box">
            <h4>
              Special Rate
            </h4>
            <h2>
              <span>$</span>300
            </h2>
            <ul>
              <li>
                Lorem ipsum dolor sit
              </li>
              <li>
                Lorem ipsum dolor sit
              </li>
              <li>
                adipiscing elit, sed do
              </li>
              <li>
                eiusmod tempor
              </li>
            </ul>
            <a href="">
              Book Now
            </a>
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            See More
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end package section -->

  <!-- service section -->

  <section class="service_section layout_padding" id="service">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
        <p>
          aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
        </p>
      </div>
    </div>
    <div class="container">
      <div class="box container-bg">
        <div class="detail-box">
          <div class="img-box">
            <img src="images/s-1.png" alt="" class="img1">
            <img src="images/s-1-blue.png" alt="" class="img2">
          </div>
          <div class="text-box">
            <h6>
              Best Hotels
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipi
            </p>
          </div>
        </div>
        <div class="detail-box">
          <div class="img-box">
            <img src="images/s-2.png" alt="" class="img1">
            <img src="images/s-2-blue.png" alt="" class="img2">
          </div>
          <div class="text-box">
            <h6>
              Best Trip Guide
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipi
            </p>
          </div>
        </div>
        <div class="detail-box">
          <div class="img-box">
            <img src="images/s-3.png" alt="" class="img1">
            <img src="images/s-3-blue.png" alt="" class="img2">
          </div>
          <div class="text-box">
            <h6>
              Safe And Secure
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipi
            </p>
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- blog section -->

  <section class="blog_section" id="blog">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Blog
        </h2>
        <p>
          aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
        </p>
      </div>
    </div>
    <div class="container">
      <div class="box container-bg">
        <div class="blog_box">
          <div class="date-box">
            <h4>
              $160
            </h4>
          </div>
          <div class="detail-box">
            <div class="img-box">
              <img src="images/b-1.jpg" alt="">
            </div>
            <div class="text-box">
              <h5>
                Warsaw Day Tour
              </h5>
              <h6>
                Duration: 4 hours 20 mins
              </h6>
              <p>
                It is a long established fact that a reader will be distracted by
              </p>
            </div>
          </div>
          <a href="">
            Book Now
          </a>
        </div>
        <div class="blog_box-cover">
          <div class="blog_box">
            <div class="date-box">
              <h4>
                $130
              </h4>
            </div>
            <div class="detail-box">
              <div class="img-box">
                <img src="images/b-2.jpg" alt="">
              </div>
              <div class="text-box">
                <h5>
                  Islands Trip
                </h5>
                <h6>
                  Duration: 4 hours 20 mins
                </h6>
                <p>
                  It is a long established fact that a reader will be distracted by
                </p>
              </div>
            </div>
            <a href="">
              Book Now
            </a>
          </div>
          <div class="blog_box">
            <div class="date-box">
              <h4>
                $150
              </h4>
            </div>
            <div class="detail-box">
              <div class="img-box">
                <img src="images/b-4.jpg" alt="">
              </div>
              <div class="text-box">
                <h5>
                  Santorini Islands Tour
                </h5>
                <h6>
                  Duration: 4 hours 20 mins
                </h6>
                <p>
                  It is a long established fact that a reader will be distracted by
                </p>
              </div>
            </div>
            <a href="">
              Book Now
            </a>
          </div>
        </div>
        <div class="blog_box">
          <div class="date-box">
            <h4>
              $140
            </h4>
          </div>
          <div class="detail-box">
            <div class="img-box">
              <img src="images/b-3.jpg" alt="">
            </div>
            <div class="text-box">
              <h5>
                Warsaw Day Tour
              </h5>
              <h6>
                Duration: 4 hours 20 mins
              </h6>
              <p>
                It is a long established fact that a reader will be distracted by
              </p>
            </div>
          </div>
          <a href="">
            Book Now
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Words of Tourists
        </h2>
        <p>
          aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
        </p>
      </div>
    </div>
    <div class="container">
      <div id="carouselExample2Controls" class="carousel slide container-bg" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box ">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h2>
                  liquip ex
                </h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaLorem ipsum dolor sit amet
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box ">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h2>
                  liquip ex
                </h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaLorem ipsum dolor sit amet
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box ">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h2>
                  liquip ex
                </h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaLorem ipsum dolor sit amet
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- end client section -->

  <!-- info section -->

  <section class="info_section">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
        <p>
          aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
        </p>
      </div>
    </div>
    <div class="info_container">
      <div class="container">
        <div class="social_container">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <h5>
              Subscribe Newsletter
            </h5>
            <p>
              ncididunt ut labore et dolore magna
              minim veniam, quis nostrud
            </p>
            <form action="">
              <input type="text" placeholder="Enter your email">
              <div class="">
                <button>
                  Subscribe
                </button>
              </div>
            </form>
          </div>
          <div class=" col-lg-4">
            <div class="info_nav_link">
              <h5>
                Useful link
              </h5>
              <ul>
                <li>
                  <a href="#">
                    Home
                  </a>
                </li>
                <li>
                  <a href="#bookTrip">
                    Book trip
                  </a>
                </li>
                <li>
                  <a href="#package">
                    Packages
                  </a>
                </li>
                <li>
                  <a href="#service">
                    Services
                  </a>
                </li>
                <li>
                  <a href="#blog">
                    Blog
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <h5>
              Address
            </h5>
            <div class="info_link-box">
              <a href="">
                <img src="images/location2.png" alt="">
                <span> Passages of Lorem Ipsum available</span>
              </a>
              <a href="">
                <img src="images/call.png" alt="">
                <span>Call : +01234567890</span>
              </a>
              <a href="">
                <img src="images/mail.png" alt="">
                <span> demo@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
        <!-- footer section -->
        <section class=" footer_section">
          <p>
            Copyright &copy; 2021 All Rights Reserved By
            <a href="https://html.design/">Free
              Html Templates</a><br><p>
                Distributed By
                <a href="https://themewagon.com">Themewagon</a>
              </p>
          </p>
        </section>
        <!-- footer section -->
      </div>
    </div>
  </section>

  <!-- end info section -->



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <!-- range selector slider script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>

  <script>
    $(".js-range-slider").ionRangeSlider({
      skin: "round",
      type: "double",
      min: 200,
      max: 10000,
      from: 200,
      to: 500,
      grid: true
    });
  </script>

</body>

</html>