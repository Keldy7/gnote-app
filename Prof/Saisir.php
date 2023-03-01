<?php
/*include "../setting/config.php";*/
include "../config.php";
session_start();
if (!$_SESSION['prof']) {
  header("location:../index.php");
} else {

  $nomPROF = $_SESSION['prof'];
  $nom_PROF = $info2->prof_username($nomPROF);
  $nomPROF_vue = $nom_PROF->fetch_assoc();
  $meadmin_info = $nomPROF_vue['LoginProf'];
  // $info = $info2->prof_info($nomPROF);
  $info = $info2->prof_username($nomPROF);
  $info_PROF = $info->fetch_assoc();
  $not = $info2->notification();
}


if(isset($_POST['submit']))
 {
	$descr = $_POST['descr'];
	$note = $_POST['note'];
	$coef = $_POST['coef'];
	$matri = $_POST['matri'];
  $codet = $_POST['codet'];

	
	  
	 if($note<0 or $note>20 or $coef<=0 or $coef>6)
	 {
    echo "<script>alert('Vérifier les informations');</script>";
	 }
	 else
	 {
		 
		 $ajouter = $info2->ajouter_note($descr,$note,$coef,$matri,$codet, $_GET['codeMAT']);
		 if($ajouter==true){
      $codemat=$_GET['codeMAT'];

       $para="location";
       require('etut-note-donneesGET.php');
		  }
		 else
		 {
			 echo "<script>alert('Information incorrect');</script>";
		 }
		 
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
    <div class="row m-lg-3">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header"  style="background-color:orangered">
              <?php 
              if (isset($_GET['matri']) and isset($_GET['codeET']) and isset($_GET['codeMAT']) ) {
                if ($_GET['matri']!="" and $_GET['codeET']!="" and $_GET['codeMAT']!="") {

                    $matri = $_GET['matri']; 
                    $codet = $_GET['codeET'];
                    $codemat=$_GET['codeMAT'];

                }
                else
                {
                  echo "<script>alert('Erreur, donnée corrompu');</script>";
                }
              }
              else
              {
                echo "<script>alert('Des données n\'existent pas');</script>";
              }

              ?>
                <h3 class="card-title">Note de l'etudiant(e) </h3> 
                
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="card-body">
                    <div class="form-group">
                      <label for="descr">Description de la note</label>
                          <select class="form-control" name="descr" id="descr" >
                             <option value="Intérrogation">Intérrogation</option>
                             <option value="Devoir">Devoir</option>
                             <option value="Projet">Projet</option>
                             <option value="Rapport">Rapport</option>
                             <option value="Exposition de rapport">Exposition de rapport</option>
                             <option value="Exposé">Exposé</option>
                             <option value="Exposition d'exposé">Exposition d'exposé</option>
                             <option value="BE">Bureau d'étude</option>
                             <option value="TP">Travaux pratique</option>
                             <option value="Orale">Orale</option>
                             <option value="Autre">Autre</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label >Note</label>
                        <input type="number" class="form-control" name="note" required>
                    </div>
                    <div class="form-group">
                        <label >Coefficient</label>
                        <input type="number" class="form-control" name="coef" required>
                    </div>
                    <div class="form-group">
                        <label >Matricule</label>
                        <input type="text" class="form-control" name="matri" value="<?php echo $matri ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label hidden>Code etudiant</label>
                        <input type="text" class="form-control" name="codet" value="<?php echo $codet ?>" hidden>
                    </div>
                    
                    
                </div>

                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
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