<?php 
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
 }?>

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
                        <div class="card-header"  id="barTitre" style="background-color:orangered">
                            <h3 class="card-title">Attribution d'un professeur ?? une classe</h3>
                        </div>
                        <!-- /.card-header -->
 
 <?php if(isset($_POST['submit']))
 {
   $login = $_POST['login'];
   $matiere = $_POST['matiere'];
   $semestre = $_POST['semestre'];
   $classe = $_POST['classe'];

    if ($login != "") 
    {
        $infoLoginProf = $info2->recupererCodeProf($login);
        if ($infoLoginProf->num_rows>0) 
        {
            $leProf = $infoLoginProf->fetch_assoc();
            $codeProf = $leProf['codeProf']; 
            if ($matiere != "") {
                if ($semestre != "" && $classe != "") {
                    try { //ici c'est de cette fa??on que ajout peut ??tre false
                     $ajout_de = $info2->attribuer_profAClasse($matiere, $classe);
                    } catch (Exception $e) {
                        //echo "<script>alert('Pas de submit choco !);</script>";
                    }
                 if($ajout_de==true){
                    echo "<script>window.location = 'prof-information.php';</script>";
                 }
                 else
                 {
                     echo "<script>alert('Impossible d\'attribuer cet professeur ?? cette classe');</script>";
                 }

                }
                else
                {
                    include "includeFormClasse/form-Login_mat_Sem_Cla.php"; 
                }
            }
            else
            {
                include "includeFormClasse/form-Login_mat.php"; 
                // echo "<script>alert('sinon de l_m_s_c');</script>";
            }

        } 
        //ELSE NUM_ROW
        else
        {
            echo "<script>alert('Login incorrect');</script>"; 

            include "includeFormClasse/form-Login.php";
        } /*FIN ELSE NUM_ROW*/ 

    }
    else 
    {
        echo "<script>alert('veillez remplir le champ login');</script>";

    }  /*FIN ELSE LOGIN*/
	 
 } //fin if submit
 /*ELSE SUBMIT!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
 else 
 { 

    include "includeFormClasse/form-Login.php";

  } 

?>

 <!-- FIN FORMULAIRE -->



                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.contentWrapper -->


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