<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<!-- meta character set -->
	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine or request Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Pragyan InHoTT</title>
	<!-- Meta Description -->
	<meta name="description" content="Pragyan 2020 InHoTT">
	<meta name="keywords" content="Pragyan, inhott, Delta, Delta Force,">
	<meta name="author" content="Delta Force">
	<meta name="_token" content="{{ csrf_token() }}"/>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSS
	================================================== -->
	
	<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'> -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/fontawesome.css"
            integrity="sha384-+pqJl+lfXqeZZHwVRNTbv2+eicpo+1TR/AEzHYYDKfAits/WRK21xLOwzOxZzJEZ" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css') }}">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="{{ asset('/css/slit-slider.css') }}">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{ asset('/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/schedule.css') }}">
	
	<!-- Modernizer Script for old Browsers -->
	<script src="{{ asset('/js/modernizr-2.6.2.min.js') }}"></script>
	<script>var base_url = "{{ url('/') }}";</script>
	<!-- Essential jQuery Plugins
	================================================== -->
	<!-- Main jQuery -->
	<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
	<!-- Twitter Bootstrap -->
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/t-gen.js') }}"></script>
	<script type="text/javascript">
			$(document).ready(function()
			{
			$(".board").click(function()
			{
			var x = $(this).data('id');
			$("#myModal").modal('show');
			$("#score_id").val(x);
			$("#save").click(function()
			{
				$("#score_form").submit();
			});
			});
			});
	</script>
	<!-- Single Page Nav
	<script src="{{ asset('/js/jquery.singlePageNav.min.js') }}"></script>
	-->
	<!-- jquery.fancybox.pack -->
	<script src="{{ asset('/js/jquery.fancybox.pack.js') }}"></script>
	<!-- Owl Carousel -->
	<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
	<!-- jquery easing -->
	<script src="{{ asset('/js/jquery.easing.min.js') }}"></script>
	<!-- Fullscreen slider -->
	<script src="{{ asset('/js/jquery.slitslider.js') }}"></script>
	<script src="{{ asset('/js/jquery.ba-cond.min.js') }}"></script>
	<!-- onscroll animation -->
	<script src="{{ asset('/js/wow.min.js') }}"></script>
	<!-- Custom Functions -->
	<script type="text/javascript">
			$(document).ready(function() {
			$(".fancybox").fancybox();
			});
	</script>
	
	<script src="{{ asset('/js/main.js') }}"></script>
</head>

<body id="body">
	<!-- preloader -->
	<div id="preloader">
		<div class="loder-box">
			<div class="battery"></div>
		</div>
	</div>
	<!-- end preloader -->
	<!--
	Fixed Navigation
	==================================== -->
	<header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<!-- /responsive nav button -->
				
				<!-- logo -->
				<h1 class="navbar-brand" style="padding:0;">
				<a href="{{url('/')}}"><img src="{{asset('img/pragyan20_white.png')}}" style="width:150px;"></a>
				</h1>
				<!-- /logo -->
			</div>
			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				<ul id="nav" class="nav navbar-nav">
					@if (Session::has('user_name'))
					<li><a href="#">{{Session::get('user_name')}}</a></li>
					<li><a href="{{ url('/register') }}">Register</a></li>
					<li><a href="{{ url('/logout') }}">Logout</a></li>
					@elseif (Session::has('admin_login'))
					<li><a href="{{ url('/admin/home') }}">Admin Home</a></li>
					<li><a href="{{ url('/logout') }}">Logout</a></li>
					@else
					<li><a id="loginbtn" href="{{ url('login') }}">Log In</a></li>
					@endif
					<!--                   <li><a href="#portfolio">portfolio</a></li>
					<li><a href="#testimonials">Testimonial</a></li>
					<li><a href="#price">price</a></li>
					<li><a href="#contact">Contact</a></li> -->
				</ul>
			</nav>
			<!-- /main nav -->
			
		</div>
	</header>
	<!--
	End Fixed Navigation
	==================================== -->
	
	<main class="site-content" role="main">
		
		<!--
		Home Slider
		==================================== -->
		
		<section id="home-slider">
			<div id="slider" class="sl-slider-wrapper">
				<div class="sl-slider">
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="bg-img bg-img-1"></div>
					</div>
					</div><!-- /sl-slider -->
					</div><!-- /slider-wrapper -->
				</section>
				
				<!--
				End Home SliderEnd
				==================================== -->
				<section id="testimonials" class="parallax">
					<div class="overlay">
						<div class="container">
							<div class="row">
								
								<div class="sec-title text-center white wow animated fadeInDown">
									<h2>Pragyan 2020 Inter Hostel Technical Tournament</h2>
								</div>
								
								<div id="testimonial" class=" wow animated fadeInUp">
									<div class="testimonial-item text-center">
										<!-- <img src="img/member-1.jpg" alt="Our Clients"> -->
										<br>
										<div class="clearfix">
											<span></span>
											<p style="font-size:1.2em;margin-left:10px;">Take your first steps into the world of Engineering and Technology. Put on your thinking caps and test your creativity, technical expertise and problem solving skills to compete against the many technocrats of your batch. Fire up your competitive spirit and bring glory to your hostel!
												Furthermore, get a sneak peek of the coveted technical clubs of our college. Experience all this and more as Pragyan '19 brings to you the InHoTT - Inter Hostel Technical Tournament!
											</p>
											
										</div>
									</div>
									<!-- <div class="testimonial-item text-center">
											<img src="img/member-1.jpg" alt="Our Clients">
											<div class="clearfix">
													<span>Katty Flower</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
											</div>
									</div>
									<div class="testimonial-item text-center">
											<img src="img/member-1.jpg" alt="Our Clients">
											<div class="clearfix">
													<span>Katty Flower</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
											</div>
									</div> -->
								</div>
								
							</div>
						</div>
					</div>
				</section>
				
				<!-- Service section -->
				<section id="service">
					<!-- <section id="about"> -->
					<div class="container">
						<div class="row">
							
							<div class="sec-title text-center">
								<h2 style="font-size:3em; color:dark-blue;  " class="wow animated bounceInLeft">Prizes</h2>
							</div>
							<div class="text-center prizes wow animated bounceInRight">
								<p>Cash Prize : 15K</p>
								<p>Exciting goodies</p>
								<p>Certificates</p>
								<p>Resources worth 15k</p>
							</div>
							
						</div>
								
						<br><br>

						<div class="row">
							
							<div class="sec-title text-center">
								<h2 style="font-size:3em; color:dark-blue;  " class="wow animated bounceInLeft">Events</h2>
								<p style="font-size:2.5em" class="wow animated bounceInRight">6 Exciting events!</p>
							</div>
							
							
							<a href="{{url('/events/electrolution')}}">
							<div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
								<div class="service-item">
									<div class="service-icon">
										<i class="fa fa-bolt fa-3x" onclick="$.fancybox({});"></i>
									</div>
									<h3>Electrolution</h3>
								</div>
							</div>
									</a>
							
							<a href="{{url('/events/incaseyoudidntknow')}}">
								<div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
									<div class="service-item">
										<div class="service-icon">
											<i class="fa fa-folder-open fa-3x"></i>
										</div>
										<h3>In Case You Didn't Know!</h3>
									</div>
								</div>
							</a>
							
							<a href="{{url('/events/backstabber')}}">
							<div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
								<div class="service-item">
									<div class="service-icon">
										<i class="fa fa-taxi fa-3x"></i>
									</div>
									
									<h3>BACKSTABBER</h3>
								</div>
                            </div>
                            </a>
						</div>
								
						<br><br>

						<div class="row">
							
							<a href="{{url('/events/reversecoding')}}">	
							<div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn">
								<div class="service-item">
									<div class="service-icon">
											<i class="fa fa-code fa-3x"></i>
									</div>
										<h3>REVERSE CODING</h3>
									</div>
								</div>
										</a>

								<a href="{{url('/events/fundamental')}}">	
								<div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
									<div class="service-item">
										<div class="service-icon">
												<i class="fa fa-comment fa-3x"></i>
										</div>
											<h3>FUNDAMENTAL</h3>
										</div>
									</div>
											</a>

												<a href="{{url('/events/dribbletrouble')}}">
									<div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
										<div class="service-item">
											<div class="service-icon">
													<i class="fa fa-cogs fa-3x"></i>
											</div>
												<h3>Dribble trouble</h3>
											</div>
										</div>
									</a>	
                                    </div>
                        <br><br><br><br>

						<div class="row">
							
							<div class="sec-title text-center">
								<h2 style="font-size:3em; color:dark-blue;  " class="wow animated bounceInLeft">Workshops</h2>
								<p style="font-size:2.5em" class="wow animated bounceInRight">2 exciting workshops!</p>
							</div>
							
							
							<a href="{{url('/workshops/fromwannabetotrader')}}">
							<div class="col-md-6 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
								<div class="service-item">
									<div class="service-icon">
										<i class="fa fa-chart-line fa-3x" onclick="$.fancybox({});"></i>
									</div>
									<h3>From Wannabe to Trader</h3>
								</div>
							</div>
									</a>
							
							<a href="{{url('/workshops/aiml')}}">
								<div class="col-md-6 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
									<div class="service-item">
										<div class="service-icon">
											<i class="fa fa-codepen fa-3x"></i>
										</div>
										<h3>Unraveling AI and ML in Industry</h3>
									</div>
								</div>
							</a>	
						</div>
                        <br><br><br><br>

						<div class="row">
							
							<div class="sec-title text-center">
								<h2 style="font-size:3em; color:dark-blue;  " class="wow animated bounceInLeft">Stargazing Session</h2>
                                <p style="font-size:1.5em" class="wow animated bounceInRight">The vastness of the skies has astounded humankind since time immemorial, the speckled emptiness intimidating, yet breathtaking. Join Nakshatra, the Science and Astronomy Club, for a Stargazing Session on the Ojas Terrace from 8-9 p.m. on the 26th of January. This is your chance to peek at the unseen colossi harbouring the grandeur of space.
</p>
							</div>

                                    <div class="row" style="margin-top: 50px;">
										<h2 style="padding-top: 20px; padding-bottom: 0px; text-align: center"> SCHEDULE</h2>
										<div class="col-md-6">
											<h4 style="padding: 10px; padding-bottom: 0px; text-align: center">Day 1</h4>
											<h4 style="padding-bottom: 10px; text-align: center">(Date: 25-01-2020)</h4>
											<div class="table-responsive">
												<table  id="my-table" class="table table-striped" >
													<thead>
														<tr>
															<th>EVENT</th>
															<th>TIME</th>
															<th>VENUE</th>
														</tr>
													</thead>
													<tbody>
														<tr>
                                                            <td>Dribble Trouble</td>
															<td>12:30-5 p.m</td>
															<td>Orion</td>
														</tr>
														<tr>
															<td>Reverse Coding</td>
															<td>1-4 p.m</td>
															<td>Orion</td>
														</tr>
														<tr>
															<td>In CASE you didn’t know!</td>
															<td>5:15-8:30 p.m.</td>
															<td>Orion</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-md-6">
											<h4 style="padding: 10px; padding-bottom: 0px; text-align: center">Day 2</h4>
											<h4 style="padding-bottom: 10px; text-align: center">(Date: 26-01-2020)</h4>
											<div class="table-responsive">
												<table  id="my-table" class="table table-striped" >
													<thead>
														<tr>
															<th>EVENT</th>
															<th>TIME</th>
															<th>VENUE</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>BACKSTABBERS</td>
															<td>9 a.m.-12 p.m </td>
															<td>Orion</td>
														</tr>
														<tr>
															<td>Electrolution</td>
															<td>9 a.m.-12 p.m</td>
															<td>Orion</td>
														</tr>
														<tr>
															<td>Fundamental</td>
															<td>1-4 p.m.</td>
															<td>Orion</td>
														</tr>
														<tr>
															<td>Club Interaction</td>
															<td>4:30 p.m.- 6 p.m</td>
															<td>Barn Hall</td>
														</tr>
														<tr>
															<td>Project Display</td>
															<td>6 p.m.- 7 p.m</td>
															<td>Barn Hall</td>
														</tr>
														<tr>
															<td>Star Gazing Session</td>
															<td>8-9 p.m</td>
															<td>Ojas Terrace</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="row" style="margin-top:50px">
										<h2 style="padding-top: 20px; padding-bottom: 0px; text-align: center">SCOREBOARD</h2>
										<div id="myModal" class="modal fade" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Modal Header</h4>
													</div>
													<div class="modal-body">
														<form id="score_form" class="form-horizontal" method="POST" action="{{ url('/scores') }}">
															<input type="hidden" name="_token" value="{{ csrf_token() }}">
															<label>First</label> :
															<select name="first" id="first" class="form-control">
																<option value="" selected></option>
																<option value="Agate">Agate</option>
																<option value="GarnetA">Garnet A</option>
																<option value="GarnetB">Garnet B</option>
																<option value="GarnetC">Garnet C</option>
																<option value="Opal">Opal</option>
															</select><br/>
															<label>Second</label>:
															<select name="second" id="second" class="form-control">
																<option value="" selected></option>
																<option value="Agate">Agate</option>
																<option value="GarnetA">Garnet A</option>
																<option value="GarnetB">Garnet B</option>
																<option value="GarnetC">Garnet C</option>
																<option value="Opal">Opal</option>
															</select><br/>
															<label>Third</label> :
															<select name="third" id="third" class="form-control">
																<option value="" selected></option>
																<option value="Agate">Agate</option>
																<option value="GarnetA">Garnet A</option>
																<option value="GarnetB">Garnet B</option>
																<option value="GarnetC">Garnet C</option>
																<option value="Opal">Opal</option>
															</select><br/>
															<input type="hidden" id="score_id" name="id" value="" />
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" id="save" data-dismiss="modal">Save</button>
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<th>Event</th>
													<th>First Place</th>
													<th>Second Place</th>
													<th>Third Place</th>
												</thead>
												<tbody>
													<tr>
														<td>Electrolution</td>
														<td id="first2">{{ $scores[0]->first }}</td>
														<td id="second2">{{ $scores[0]->second }}</td>
														<td id="third2">{{ $scores[0]->third }}</td>
														<td>
															<?php
															if(Session::has('admin_login'))
															echo '<button data-id="2" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
															?>
														</td>
													</tr>
													<tr>
														<td>In Case you didn't know!</td>
														<td id="first3">{{ $scores[1]->first }}</td>
														<td id="second3">{{ $scores[1]->second }}</td>
														<td id="third3">{{ $scores[1]->third }}</td>
														<td>
															<?php
															if(Session::has('admin_login'))
															echo '<button data-id="3" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
															?>
														</td>
													</tr>
													<tr>
														<td>BACKSTABBERS</td>
														<td id="first4">{{ $scores[2]->first }}</td>
														<td id="second4">{{ $scores[2]->second }}</td>
														<td id="third4">{{ $scores[2]->third }}</td>
														<td>
															<?php
															if(Session::has('admin_login'))
															echo '<button data-id="4" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
															?>
														</td>
													</tr>
													<tr>
														<td>Reverse Coding</td>
														<td id="first5">{{ $scores[3]->first }}</td>
														<td id="second5">{{ $scores[3]->second }}</td>
														<td id="third5">{{ $scores[3]->third }}</td>
														<td>
															<?php
															if(Session::has('admin_login'))
															echo '<button data-id="5" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
															?>
														</td>
													</tr>
													<tr>
														<td>Fundamental</td>
														<td id="first6">{{ $scores[4]->first }}</td>
														<td id="second6">{{ $scores[4]->second }}</td>
														<td id="third6">{{ $scores[4]->third }}</td>
														<td>
															<?php
															if(Session::has('admin_login'))
															echo '<button data-id="6" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
															?>
														</td>
													</tr>
													<tr>
														<td>Dribble Trouble</td>
														<td id="first7">{{ $scores[5]->first }}</td>
														<td id="second7">{{ $scores[5]->second }}</td>
														<td id="third7">{{ $scores[5]->third }}</td>
														<td>
															<?php
															if(Session::has('admin_login'))
															echo '<button data-id="7" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
															?>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<center><h1>POINTS TABLE</h1></center>
								<div class="row">
									<div class="col-md-6 col-md-offset-3">
										<div class="table-responsive" id="points">
										</div>
									</div>
								</div>
							</section>
							<!-- end Service section -->
							
							
							
						</main>
						
						<footer id="footer">
							<div class="container">
								<div class="row text-center">
									<div class="footer-content">
										<div class="wow animated fadeInDown">
											<p>Let's Celebrate Technology!</p>
										</div>
										<!-- 	<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
												<div class="input-field">
														<input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
														<button type="submit" class="submit-icon">
															<i class="fa fa-paper-plane fa-lg"></i>
														</button>
												</div>
										</form> -->
										<div class="footer-social">
											<ul>
												<!-- 								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
												<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
												<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
												<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
												<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
											-->							</ul>
										</div>
										
										<p>Made with &hearts; by <a href="http://delta.nitt.edu">Delta Force</a> </p>
									</div>
								</div>
							</div>
						</footer>
						
						
						
					</body>
				</html>
