<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/x-icon" href="assets/img/SkillClass.png" />



<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Skill Class Home</title>

  <!-- Custom fonts for this template-->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">





<!-- Page Wrapper -->
<div id="wrapper">


  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Skill Class <sup>1</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="Perfil.php">
        <i class="fas fa-fw fa-sign"></i>
        <span>Perfil</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="Clases.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-chalkboard-teacher"></i>
        <span>Clases</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Clases:</h6>

        </div>
      </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->



    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="login.php">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Cerrar Sesión</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


  </ul>
  <!-- End of Sidebar -->



  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">




      <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Perfil</h1>

        </div>




        <!--Donde va mi codigo -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Includes the above in your HEAD tag ---------->

        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="well well-sm">
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <img src="assets/img/portfolio/thumbnails/Nosotros/juanko_perfil.png" alt="" class="img-rounded img-responsive" />
                  </div>
                  <div class="col-sm-6 col-md-8">
                    <h4>
                      Juan Pablo Bernal Bernal</h4>
                    <small><cite title="San Francisco, USA">Bogotá <i class="glyphicon glyphicon-map-marker">
                    </i></cite></small>
                    <p>
                      <i class="glyphicon glyphicon-envelope"></i> Jubernal11@poligran.edu.co
                      <br />
                      <i class="glyphicon glyphicon-envelope"></i> 1810011176
                      <br />
                      <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com"> www.poligra.edu.co</a>
                      <br />
                      <i class="glyphicon glyphicon-gift"></i> Mayo 03 2001</p>
                    <!-- Split button -->
                    <div class="btn-group">
                      <a class="btn btn-primary btn-xl js-scroll-trigger" href="Clases.html">Clases</a>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Final del mi codigo-->

    <!--  Pie de pagina  -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; SkillClass 2020</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>








  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>


</body>

</html>