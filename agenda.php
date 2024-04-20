<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php session_start(); 
  if (!isset($_SESSION['nombre'])) {
    header("location:index.php");
  }
?>

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
	
	<!-- DataTables -->
	<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	
</head>

<body>

<!--/header-->
<header>
	<div class="top-bar_sub container-fluid">
		<div class="top-forms text-left mt-3">
			<!--/nav-->
			<div class="header_top">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="btn btn-primary" href="servidor/login/logout.php" target="_blank">Logout</a>
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
								<a class="nav-link scroll" href="cita.php">Citas</a>
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
				<h3 class="heading mb-sm-5 mb-3 text-uppercase">Agenda de clientes</h3>
			</div>
			<div class="contact_grid_right">
			<div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
				    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>TELEFONO(s)</th>
                    <th>FECHA</th>
					<th>HORARIO</th>
                    <th>TIPO</th>
                  </tr>
                  </thead>
				  <tbody>
            <?php

			include "instalacion/conexion.php";

			// Paso 2: Obtener datos de la base de datos
			$sql = "SELECT * FROM citas";
			$result = $connect->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
					echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>" . $row["correo"] . "</td>";
                    echo "<td>" . $row["telefono"] . "</td>";
					echo "<td>" . $row["fecha"] . "</td>";
					echo "<td>" . $row["horario"] . "</td>";
                    echo "<td>" . $row["tipo"] . "</td>";
                    // Añade más columnas si es necesario
                    echo "</tr>";
                }
            } else {
                echo "0 resultados";
            }
            ?>
        </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
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
	
<!-- //js-scripts -->

<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
