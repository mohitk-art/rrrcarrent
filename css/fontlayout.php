<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/color.css?ver=') }}<?php echo rand(111,999)?>" />
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css?ver=') }}<?php echo rand(111,999)?>" />

    <title>Car Rental</title>
  </head>
	
	<body>
    
	<header class="main_header">
			<nav class="navbar navbar-expand-lg navbar-light bg-white flex-wrap px-0">
			   
				<div class="container header_top px-3">
					<a class="navbar-brand" href="/">
						<img src="{{ asset('frontend/img/logot.png') }}" class="desk_logo" />
						<img src="{{ asset('frontend/img/logo.png') }}" class="mobile_logo" />
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="header_mid">
					<div class="crash_div">
						<h6 class="text-blue">Crash Avoidance Technology <br/> Available in our all FLEET</h6>
						<img src="{{ asset('frontend/img/headerimg23.jpg') }}" />
					</div>


					<div class="header_contact">
						<i class="fa fa-phone-alt mr-2"></i> 01225 852 888 <br/>
						<i class="fa fa-envelope mr-2"></i> info@rrrsuv.com
					</div>
					</div>
				</div>
				
				<div class="collapse navbar-collapse header_collapse" id="navbarNav">
				<div class="container px-3">
				  <ul class="navbar-nav align-items-center w-100">
					<li class="nav-item mr-auto logob_img_li">
						<img src="{{ asset('frontend/img/logob.png') }}" class="logob_img" />
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#">FAQ</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#">Locations</a>
					</li>
					
				  </ul>
				  </div>
				</div>

			  
			  </nav>
	</header>

		 @yield('content')


   <footer class="main_footer">
        <div class="container d-flex align-items-center flex-wrap">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                <li><a href="#" class="facebook">
                      <div class="front"><i class="fab fa-facebook-f" aria-hidden="true"></i></div>
                      <div class="back"><i class="fab fa-facebook-f" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter">
                      <div class="front"><i class="fab fa-twitter" aria-hidden="true"></i></div>
                      <div class="back"><i class="fab fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="instagram">
                      <div class="front"><i class="fab fa-instagram" aria-hidden="true"></i></div>
                      <div class="back"><i class="fab fa-instagram" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="pinterest">
                      <div class="front"><i class="fab fa-google-plus-g" aria-hidden="true"></i></div>
                      <div class="back"><i class="fab fa-google-plus-g" aria-hidden="true"></i></div></a></li>
            </ul>

            <span class="copyright_text">Copyright © 2021  RRR SUV Rental Luxury SUV 4 all. All Rights Reserved.</span>
        </div>
    </footer>


	<!-- Modal -->
	  <div class="modal fade" id="reserveModal" tabindex="-1">
		<div class="modal-dialog modal-md" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Reserve Now</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  <div class="form-row">
				  <div class="col-md-"></div>
			  </div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-primary">Save changes</button>
			</div>
		  </div>
		</div>
	  </div>


   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    
  </body>
</html>