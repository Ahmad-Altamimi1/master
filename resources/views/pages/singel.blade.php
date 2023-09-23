<!DOCTYPE html>
{{-- @extends('layouts.master')
@section('content') --}}
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Single </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<!-- font awsome  -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- <link rel="stylesheet" href="css/pricing.css">     -->
    <!-- <link rel="stylesheet" href="css/pricing.css">     -->
    <!-- <link rel="stylesheet" href="css/slider_single.css">     -->
    <!-- <link rel="stylesheet" href="css/demo_slider_single.css">     -->
    <link rel="stylesheet" href="css/footer.css">    
    <link rel="stylesheet" href="css/single-proudact.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css'>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>.all-page-title::before{
	background: rgb(0, 0, 0);
	content: "";
	height: 100%;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
	z-index: 1;
	opacity: 0.8;	
}</style>
</head>

<body>
	<!-- Start header -->
<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light ">
			<div class="container">
				<a class="navbar-brand" href="index.html">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i><strong style="color: white;"> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
					
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						                    <a href="index.html" class="nav-item nav-link ">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="menu.html" class="nav-item nav-link active" >Menu</a>
                 
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <a href="login.html" class="nav-item nav-link btn-primary" style="margin-top: 35px;
    padding: 6px 15px;
    height: 41px; border-radius: 12px;">Register</a>
                    <a href="cart.html" class="nav-item nav-link" style="background-color: transparent;"><img src="images/Shopping_cart_icon.svg.png"  width="30px"> <span style="color: white;">cart</span></a>
                  </div>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- End header -->
	
	<!-- Start header -->
	<div class="all-page-title page-breadcrumb " style=" padding-top: 100px;">
		<div class="container text-center" >
			<div class="row">
				<div class="col-lg-12">
				
				</div></div>
			</div>
		</div>
	<!-- End header -->













<div id="single-prodact">
    <div class="container single ">

        <div class="left-single">
        <img src="images/single-proudact.jpg" alt="">
        <div class="more-pic-in-single-proudact">
          <img name="slide">
        <img src="images/single-proudact.jpg" alt="">
        <img src="images/single-proudact.jpg" alt="">
        <img src="images/single-proudact.jpg" alt="">
        <!-- <img src="images/single-proudact.jpg" alt=""> -->
          </div>
          </div>

        <div class="right-single">
<!-- <span class="company-name" >Nutri<span style="color: black;">zen</span></span> -->
<h5 class="proudact-name" >chicken with tomato</h5>
<p id="proudact-description">The chicken is moist and juicy, a handful of capers an
  d splash of red wine vinegar provide acidity and pop, garlic and parsley
   add freshness, and a small drizzle of honey adds just the right amount of 
   sweetness to balance the dish and help the tomatoes caramelize.</p>
   <span id="price">2.50 JD</span>
   <div>
    <div id="counter">
      
      <span id="minus">-</span> <span id="number">0</span> <span id="plus">+</span>
    </div>
  </div>
    <div  class="add_to_cart d-flex flex-column"> <a href="cart.html" style="color: white !important;">Add to cart</a></div>

    </div>
  </div>
</div>
<!-- ______________  -->
    <div id="more_proudact_in_single" class="d-flex">
      <div class="container d-flex ">
      <div id="more_proudact" class="d-flex flex-column justify-content-center">
        <img src="images/Chickpea-and-Avocado-Sandwich-768x509.jpg.webp" alt="">
        <h4>chicken with tomato</h4>
        <p>The chicken is moist and juicy a handful of capers an </p>
        <span class="add_to_cart d-flex flex-column"> <div class="add">Add To Card </div>
          <a href="cart.html">
          	<i class="fa fa-cart-plus " aria-hidden="true" >
        </i>
        </span>
        <!-- <span class="cart_icon"></a></span> -->
      </div> <div id="more_proudact" class="d-flex flex-column justify-content-center">
        <img src="images/Chickpea-and-Avocado-Sandwich-768x509.jpg.webp" alt="">
        <h4>chicken with tomato</h4>
        <p>The chicken is moist and juicy a handful of capers an </p>
        <span class="add_to_cart d-flex flex-column"> <div class="add">Add To Card </div>
          <a href="cart.html">
          	<i class="fa fa-cart-plus " aria-hidden="true" >
        </i>
        </span>
        <!-- <span class="cart_icon"></a></span> -->
      </div>
       <div id="more_proudact" class="d-flex flex-column justify-content-center">
        <img src="images/Chickpea-and-Avocado-Sandwich-768x509.jpg.webp" alt="">
        <h4>chicken with tomato</h4>
        <p>The chicken is moist and juicy a handful of capers an </p>
        <span class="add_to_cart d-flex flex-column"> <div class="add">Add To Card </div>
          <a href="cart.html">
          	<i class="fa fa-cart-plus " aria-hidden="true" >
        </i>
        </span>
        <!-- <span class="cart_icon"></a></span> -->
      </div> <div id="more_proudact" class="d-flex flex-column justify-content-center">
        <img src="images/Chickpea-and-Avocado-Sandwich-768x509.jpg.webp" alt="">
        <h4>chicken with tomato</h4>
        <p>The chicken is moist and juicy a handful of capers an </p>
        <span class="add_to_cart d-flex flex-column"> <div class="add">Add To Card </div>
          <a href="cart.html">
          	<i class="fa fa-cart-plus " aria-hidden="true" >
        </i>
        </span>
        <!-- <span class="cart_icon"></a></span> -->
      </div>
 
  
   
    </div>
    
  
  </div>
	</div>


  
<div class="customer-reviews-box">
		<div class="container">
			<div class="row" style="padding-bottom: 70px;">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
					</div>
				</div>
			
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/nadeem.jpg" alt="" style="height: 128px;">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/nadeem.jpg" alt="" style="height: 128px;">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/nadeem.jpg" alt="" style="height: 128px;">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>





















    <!-- Start Footer -->
<footer class="text-center text-lg-start bg-f text-white">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div id="icons">
      <a href="" class="me-4 link-secondary">
     <i class="fa fa-faceAdd to Cart-official" aria-hidden="true"></i>

      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i><strong style="color: white;"> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
            <i class="fa fa-gem me-3 text-secondary"></i>
          </h6>
          <p>
         
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="menu.html" class="text-reset">Kids</a>
          </p>
          <p>
            <a href="menu.html" class="text-reset">Employee</a>
          </p>
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">About us</a>
          </p>
          
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fa fa-home me-3 text-secondary"></i> Irbid , Jordan</p>
          <p>
            <i class="fa fa-envelope me-3 text-secondary"></i>
            nutrizen@gmail.com
          </p>
          <p><i class="fa fa-phone me-3 text-secondary"></i> +962 79 8540 904</p>
          <!-- <p><i class="fa fa-print me-3 text-secondary"></i> + 01 234 567 89</p> -->
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025); color: white; z-index: 19; position: relative;">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="">Ahmad Altamimi</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- Footer -->
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-arrow-up" aria-hidden="true"></i></i></a>
<!-- jQuery JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<!-- Slick Carousel JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/single.js"></script>
    