<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html lang="en">
<head>
<title>Barber Nathean</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Barber Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script type="application/x-javascript">
        
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	
	<!-- Date picker css file --> 
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<!-- //Date picker css file --> 
	
	<!-- responsive tabs --><!-- for pricing section -->
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<!-- responsive tabs -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>

<!--/header-->
<header>
	<div class="top-bar_sub container-fluid">
		<div class="top-forms text-left mt-3">
			<!--/nav-->
			<div class="header_top">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Inicio
									<span class="sr-only">(current)</span>
								</a>								
							</li>
							
							<li class="nav-item">
								<a class="nav-link scroll" href="#appointment">Citas</a>
							</li>


						</ul>
					</div>
					
				</nav>
			</div>
			<!--//nav-->
		</div>
		
	</div>
</header>


<!-- Appointment -->
<section class="appointment" id="appointment">
	<div class="test_agile_info py-5">
		<div class="container py-lg-3">
			<div class="heading text-center">
				<i class="fas fa-cut"></i>
				<h3 class="heading mb-sm-5 mb-3 text-uppercase">Apartado de citas</h3>
			</div>
			<div class="contact_grid_right">
				<form action="" method="post">
					<div class="contact_left_grid">
						<div class="form-group">
							<input class="form-control" type="text" name="Nombre" placeholder="Nombre" required="">
						</div>
						<div class="form-group">
							<input class="form-control" type="email" name="Correo" placeholder=" Email" required="">
						</div>
						<div class="form-group">
							
							<!--<input class="form-control" >-->
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="Telefono" placeholder="Numero de telefono" required="">
						</div>
						<div class="form-group">
							<input id="datepicker" name="Fecha" type="Text" placeholder="Dia de cita" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
						</div>
						<div class="form-group">
				
							<select name="Horario" id="Horario" class="form-group" style="width: 100%;">
			
								<option value="9 am">9am</option>
								<option value="10 am">10am</option>
								<option value="11 am">11am</option>
								<option value="12 pm">12pm</option>
								<option value="1 pm">1pm</option>
								<option value="2 pm">2pm</option>
								<option value="3 pm">3pm</option>
								<option value="4 pm">4pm</option>
								<option value="5 pm">5pm</option>
							</select>
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="Tipo"  placeholder="Tipo de corte a elegir">
						</div>
						<input class="form-control" type="submit" value="Agendar cita">
					</div>
				</form>
			</div>	
		</div>
	</div>
</section>
<!-- //Appointment -->


<!-- footer section -->
<section class="newsletter text-center py-5">
	<div class="container py-lg-3">
		<div class="logo mb-5 text-center">
			<a class="navbar-brand" href="index.html">
				<i class="fas fa-cut"></i> Barber <span> Barber shop Nathean </span></a> 
		</div>
		<div class="subscribe_inner">
			<i class="fas fa-cut"></i>
			
				</ul>
			</div>
		</div>
		<section>
<!-- //footer section -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- script for responsive tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--// script for responsive tabs -->
	
	<!-- Flexisel-js for-testimonials -->
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems:1,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:1
					},
					tablet: { 
						changePoint:768,
						visibleItems: 1
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<!-- Flexisel-js for-testimonials -->
	
	<!-- Calendar js for date picker-->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- Banner Responsiveslides -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Banner Responsiveslides -->

	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>

<!-- El codigo del sweetalert debe ir a lo ultimo del HTML -->

<?php
include "instalacion/conexion.php";
//mysql_select_db('barber',$conect);

if (isset($_POST['Nombre']) and isset($_POST['Correo']) and isset($_POST['Telefono']) 
and isset($_POST['Fecha']) and isset($_POST['Horario']) and isset($_POST['Tipo'])) {
    $nombre=$_POST['Nombre'];
    $correo=$_POST['Correo'];
    $telefono=$_POST['Telefono'];
    $fecha=$_POST['Fecha'];
	$horario=$_POST['Horario'];
    $tipo=$_POST['Tipo'];
    $sql="insert into citas (Nombre,Correo,Telefono,Fecha,Horario,Tipo) 
    values ('".$nombre."','".$correo."','".$telefono."','".$fecha."','".$horario."','".$tipo."')";

    $query=mysqli_query($connect,$sql);

    if($query){
        
        ?>

        <script>

            swal({
            title: "Registrado!",
            text: "Tu cita ha quedado registrada!",
            icon: "success",
            });

        </script>;

        <?php
    }

}
?>