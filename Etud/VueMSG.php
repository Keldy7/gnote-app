<?php
/*include "../setting/config.php";*/
include "../config.php";
session_start();
if (!$_SESSION['etud']) {
    header("location:../index.php");
  } else {
  
    $nomEtud = $_SESSION['etud'];
    $nom_Etud = $info2->etud_username($nomEtud);
    $nomEtud_vue = $nom_Etud->fetch_assoc();
    $meadmin_info = $nomEtud_vue['LoginET'];
    // $info = $info2->prof_info($nomEtud);
    $info = $info2->etud_username($nomEtud);
    $info_Etud = $info->fetch_assoc();
    $not = $info2->notificationEtu();
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GNote</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../dist/img/gnote.png" alt="AdminLTELogo" height="90" width="90">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-image:url('../dist/img/inp.png');background-repeat:no-repeat;height:80px;width:auto;background-position:center">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../index.php" class="nav-link" style="color:red;font-weight:bold">Home</a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->


        <!-- Messages Dropdown Menu -->
        
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" href="vueMSG.php">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge"></span>
            </a>
        </li>

        <li class="nav-item">
            <a href="deconnecter.php">
                <input type="button" value="Deconnexion" class="btn btn-danger">
            </a>
        </li>
    </ul>
</nav>

    <!-- /.navbar -->
    <!-- asside -->
    <?php include("asside.php") ?>

    <!-- /asside -->
    <br><br>
    <div class="content-wrapper">
        <!-- <div class="graph-visual tables-main">
        <form method="post">
            <input type="submit" name="prof_info" class="btn btn-danger" value="Voir les informations sur les professeurs">
		</form>	 -->
		<?php
            $info_message=	$info2->LeMessagerEtud();
            $s_sn = 1;
        ?>
										
        <div class="graph">
                <div class="tables">
                                                
                    <table class="table table-bordered "> 
                                                        
                        <thead>
                            <tr>
                                <th>#</th> 
                                <th>Email</th> 
                                <th>Nom & Prenoms</th>
                                <th>Description</th>
                                <th>Action</th> 
                                
                            </tr>
                        </thead>
                        <tbody> 
																		
                <?php 
                    if($info_message->num_rows>0){


                    while($message_info =$info_message->fetch_assoc()){ ?>						

                    <tr>
                        <td><?php echo $s_sn; ?></td>																
                        
                        <td><?php echo $message_info['EmailINSP']; ?></td>
                        <td><?php echo $message_info["CONCAT(I.NomINSP,' ',I.PrenomINSP)"]; ?></td>
                        <td><?php echo $message_info['DescMsg']; ?></td>
                        
                        <td><a class="tooltips" href="de-suprimer.php?Id=<?php echo $message_info['CodeINSP']; ?>"><i class="fa fa-trash" style="color:orangered"></i></a>
                        <a class="tooltips" href="repondre.php?Id=<?php echo $message_info['CodeINSP']; ?>"><i class="fa fa-edit" style="color:rgb(18, 219, 18);"></i></a></td>
                    </tr>
                <?php $s_sn++; }} ?>
                </tbody> 

                </table> 
                </div>
            </div>
        </div>
    </div>


    <footer class="main-footer">
      <strong>Copyright &copy; 2022 <a href="#">Ts Info 2</a>.</strong>
      All rights reserved.

    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../dist/js/pages/dashboard.js"></script>

</body>

</html>