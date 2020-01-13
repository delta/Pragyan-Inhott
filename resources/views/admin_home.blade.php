
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
		<meta name="description" content="Pragyan 2019">
		<meta name="keywords" content="Pragyan, Delta Delta Force">
		<meta name="author" content="Delta Force">
		
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		     ================================================== -->
		
		<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'> -->
		
		<!-- Fontawesome Icon font -->
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

		<!-- Modernizer Script for old Browsers -->
		<script src="{{ asset('/js/modernizr-2.6.2.min.js') }}"></script>
		<script>var base_url = "{{ url('/') }}";</script>
		<style type="text/css">
		body{
			overflow: visible;
		}
		table{
			background-color: white;
		}
		</style>
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
		<header id="navigation" class="navbar-inverse animated-header">
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
				<a style="float:right; color:#FFFFFF"href="{{ url('/logout') }}">Logout</a>
				<br><br><br>
			</div>
		</header>
		
		
		<main class="site-content" role="main">
			
			<label for="electrolution">Electrolution</label>
			<a href="#" class="export">Download Electrolusion</a>
			<div id="dvData"><table class="table table-hover table-striped" id="electrolution" >
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						
						@if( $detail->electrolution =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 
					
				</tbody>
			</table></div>

			<label for="elemental">Elemental</label>
			<a href="#" class="export2">Download Elemental</a>
			<div id="dvData2">
			<table class="table table-bordered table-hover table-striped" id="elemental">
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						@if( $detail->elemental =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 

					
				</tbody>
			</table></div>

			<label for="bytecode">Bytecode Junior</label>
			<a href="#" class="export3">Download Bytecode Junior</a>
			<div id="dvData3">
			<table class="table table-bordered table-hover table-striped" id="bytecode">
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						@if( $detail->bytecode =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 
					
				</tbody>
			</table></div>

			<label for="bridgebrigadier">Bridge Brigadier</label>
			<a href="#" class="export4">Download Bridge Brigadier</a>
			<div id="dvData4">
			<table class="table table-hover table-striped" id="bridgebrigadier">
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						@if( $detail->bridgebrigadier =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 
					
				</tbody>
			</table></div>

			<label for="waterrocket">Water Rocket</label>
			<a href="#" class="export5">Download Water Rocket</a>
			<div id="dvData5">
			<table class="table table-bordered table-hover table-striped" id="waterrocket">
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						@if( $detail->waterrocket =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 
					
				</tbody>
			</table></div>

			<label for="theultimatemanager">THE ULTIMATE MANAGER</label>
			<a href="#" class="export6">Download The Ultimate Manager</a>
			<div id="dvData6">
			<table class="table table-bordered table-hover table-striped" id="theultimatemanager">
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						@if( $detail->theultimatemanager =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 
					
				</tbody>
			</table></div>

	

			
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<div class="wow animated fadeInDown">
							<p>Let's Celebrate Technology</p>
							
						</div>
						<!--  <form action="#" method="post" class="subscribe-form wow animated fadeInUp">
						     <div class="input-field">
						     <input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
						     <button type="submit" class="submit-icon">
						     <i class="fa fa-paper-plane fa-lg"></i>
						     </button>
						     </div>
						     </form> -->
						<div class="footer-social">
							<ul>
								<!--                <li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
								     <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
								     <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
								     <li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
								     <li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
								   -->              </ul>
						</div>
						
						<p>Made with &hearts; by <a href="http://delta.nitt.edu">Delta Force</a> </p>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Essential jQuery Plugins
		     ================================================== -->
		<!-- Main jQuery -->
		<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
		<!-- Twitter Bootstrap -->
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<!-- Single Page Nav -->
		<script src="{{ asset('/js/jquery.singlePageNav.min.js') }}"></script>
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
		<script src="{{ asset('/js/main.js') }}"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script>
		$(document).ready(function () {
			
			function exportTableToCSV($table, filename) {
				
				var $rows = $table.find('tr:has(td)'),
					
					// Temporary delimiter characters unlikely to be typed by keyboard
            // This is to avoid accidentally splitting the actual contents
				tmpColDelim = String.fromCharCode(11), // vertical tab character
					tmpRowDelim = String.fromCharCode(0), // null character
					
					// actual delimiter characters for CSV format
				colDelim = '","',
					rowDelim = '"\r\n"',
					
					// Grab text from table into CSV formatted string
				csv = '"' + $rows.map(function (i, row) {
					var $row = $(row),
						$cols = $row.find('td');
					
					return $cols.map(function (j, col) {
						var $col = $(col),
							text = $col.text();
						
						return text.replace(/"/g, '""'); // escape double quotes
						
					}).get().join(tmpColDelim);
					
				}).get().join(tmpRowDelim)
					.split(tmpRowDelim).join(rowDelim)
					.split(tmpColDelim).join(colDelim) + '"',
					
					// Data URI
				csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);
				
				$(this)
					.attr({
						'download': filename,
						'href': csvData,
						'target': '_blank'
					});
			}
			
			// This must be a hyperlink
			$(".export").on('click', function (event) {
				// CSV
				exportTableToCSV.apply(this, [$('#dvData>table'), 'Electrolution.csv']);
				
				// IF CSV, don't do event.preventDefault() or return false
				// We actually need this to be a typical hyperlink
			});
			$(".export2").on('click', function (event) {
				// CSV
				exportTableToCSV.apply(this, [$('#dvData2>table'), 'Elemental.csv']);
				
				// IF CSV, don't do event.preventDefault() or return false
				// We actually need this to be a typical hyperlink
			});
			$(".export3").on('click', function (event) {
				// CSV
				exportTableToCSV.apply(this, [$('#dvData3>table'), 'BytecodeJunior.csv']);
				
				// IF CSV, don't do event.preventDefault() or return false
				// We actually need this to be a typical hyperlink
			});
			$(".export4").on('click', function (event) {
				// CSV
				exportTableToCSV.apply(this, [$('#dvData4>table'), 'BridgeBrigadier.csv']);
				
				// IF CSV, don't do event.preventDefault() or return false
				// We actually need this to be a typical hyperlink
			});
			$(".export5").on('click', function (event) {
				// CSV
				exportTableToCSV.apply(this, [$('#dvData5>table'), 'WaterRocket.csv']);
				
				// IF CSV, don't do event.preventDefault() or return false
				// We actually need this to be a typical hyperlink
			});
			$(".export6").on('click', function (event) {
				// CSV
				exportTableToCSV.apply(this, [$('#dvData6>table'), 'THEULTIMATEMANAGER.csv']);
				
				// IF CSV, don't do event.preventDefault() or return false
				// We actually need this to be a typical hyperlink
			});
			$(".export7").on('click', function (event) {
				// CSV
				exportTableToCSV.apply(this, [$('#dvData7>table'), 'Waterrocket.csv']);
				
				// IF CSV, don't do event.preventDefault() or return false
				// We actually need this to be a typical hyperlink
			});
			$(".export8").on('click', function (event) {
				// CSV
				exportTableToCSV.apply(this, [$('#dvData8>table'), 'sanrachana.csv']);
				
				// IF CSV, don't do event.preventDefault() or return false
				// We actually need this to be a typical hyperlink
			});

		});
		</script>
	</body>
</html>


