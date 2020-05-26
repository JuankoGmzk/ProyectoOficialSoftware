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
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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
          <h1 class="h3 mb-0 text-gray-800">S201-4829022B Ingeniería del Software I
            Viernes 06:40:00 p.m. - 08:10:00 p.m. Viernes 08:20:00 p.m. - 09:50:00 p.m.
            MAHECHA NIETO ISABEL ANDREA</h1>

        </div>




        <!--Donde va mi codigo -->



        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="js/tables.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

        <div class="container">
          <div class="row">


            <div class="col-md-12">
              <h4>Estudiantes que estuvieron en la clase</h4>
              <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">

                  <thead>

                  <th><input type="checkbox" id="checkall" /></th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Carrera</th>
                  <th>Email</th>
                  <th>Contacto</th>


                  <th>Eliminar</th>
                  </thead>
                  <tbody>

                  <tr>
                    <td><input type="checkbox" class="checkthis" /></td>
                    <td>Juan Pablo</td>
                    <td>Bernal</td>
                    <td>Ingenieria de Sistemas</td>
                    <td>Jubernal11@poligran.edu.co</td>
                    <td>3125824399</td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>

                  <tr>
                    <td><input type="checkbox" class="checkthis" /></td>
                    <td>Juan Pablo</td>
                    <td>Bernal</td>
                    <td>Ingenieria de Sistemas</td>
                    <td>Jubernal11@poligran.edu.co</td>
                    <td>3125824399</td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>


                  <tr>
                    <td><input type="checkbox" class="checkthis" /></td>
                    <td>Juan Pablo</td>
                    <td>Bernal</td>
                    <td>Ingenieria de Sistemas</td>
                    <td>Jubernal11@poligran.edu.co</td>
                    <td>3125824399</td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>


                  <tr>
                    <td><input type="checkbox" class="checkthis" /></td>
                    <td>Juan Pablo</td>
                    <td>Bernal</td>
                    <td>Ingenieria de Sistemas</td>
                    <td>Jubernal11@poligran.edu.co</td>
                    <td>3125824399</td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>


                  <tr>
                    <td><input type="checkbox" class="checkthis" /></td>
                    <td>Juan Pablo</td>
                    <td>Bernal</td>
                    <td>Ingenieria de Sistemas</td>
                    <td>Jubernal11@poligran.edu.co</td>
                    <td>3125824399</td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>

                  </tbody>

                </table>



                <div class="clearfix"></div>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="Clases.php">Valorar la Clase</a>
                <ul class="pagination pull-right">
                  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                </ul>

              </div>

            </div>
          </div>
        </div>


        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <input class="form-control " type="text" placeholder="Mohsin">
                </div>
                <div class="form-group">

                  <input class="form-control " type="text" placeholder="Irshad">
                </div>
                <div class="form-group">
                  <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


                </div>
              </div>
              <div class="modal-footer ">
                <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>



        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
              </div>
              <div class="modal-body">

                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

              </div>
              <div class="modal-footer ">
                <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
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
        <a class="btn btn-primary" href="login.php">Logout</a>
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
