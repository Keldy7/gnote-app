<?php
/*include "../setting/config.php";*/
include "../config.php";
session_start();
if (!$_SESSION['de']) {
  header("location:../index.php");
} else {

  $nomDE = $_SESSION['de'];
  $nom_DE = $info2->de_username($nomDE);
  $nomDE_vue = $nom_DE->fetch_assoc();
  $meadmin_info = $nomDE_vue['LoginDE'];
  // $info = $info2->prof_info($nomDE);
  $info = $info2->de_username($nomDE);
  $info_DE = $info->fetch_assoc();
  $not = $info2->notification();
}

$id_note = $_GET['Id'];
$modi_prof_info = $info2->modifier_note_id($id_note);
$prof_modifier = $modi_prof_info->fetch_assoc();

if (isset($_POST['submit'])) {
  $note = $_POST['note'];
  
  $modifi_prof = $info2->modifier_note($note,$id_note);
  if ($modifi_prof == true) {
    echo "<script>window.location = 'rechercheClasse.php';alert('Note modifiée');</script>";
  } else {
    echo "<script>alert('L\'enseignant ne peut pas être modifié');</script>";
  }
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
      <img class="animation__shake" src="../dist/img/gnote.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php include("nav.php") ?>

    <!-- /.navbar -->
    <!-- asside -->
    <?php include("asside.php") ?>

    <!-- /asside -->
    <br><br>
    <div class="content-wrapper">
      <form method="post" action="">
        <div class="graph">
                    <div class="tables">
                                                    
                        <table class="table table-bordered "> 
                                                            
                            <thead>
                                <tr>
                                    <th>#</th>                                    
                                    <th>Note</th>
                                    <th>coeficient</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody> 
                                                                                                    
                        <tr>
                            <td><?php echo $prof_modifier["CodeNTE"]; ?></td>                               
                            <td><input type="number" name="note" value="<?php echo $prof_modifier['ValeurNTE']; ?>"></td>
                            <td><?php echo $prof_modifier['CoefficientNTE']; ?></td>
                        <td>
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Modifier</button>
                            </div>        
                        </td>
                        </tr>
                    </tbody> 

                    </table> 
                    </div>
                </div>
            </div>
      </form>     
        
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
    $.wiDEt.briDE('uibutton', $.ui.button)
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