<?php
/*include "../setting/config.php";*/
include "../config.php";
session_start();
if (!$_SESSION['dge']) {
  header("location:../index.php");
} else {

  $nomDEG = $_SESSION['dge'];
  $nom_DGE = $info2->dge_username($nomDEG);
  $nomDGE_vue = $nom_DGE->fetch_assoc();
  $meadmin_info = $nomDGE_vue['LoginDGE'];
  // $info = $info2->prof_info($nomDE);
  $info = $info2->dge_username($nomDEG);
  $info_DGE = $info->fetch_assoc();
}

//Marquer les absences des heures d'absences

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
        <!-- <div class="graph-visual tables-main">
        <form method="post">
            <input type="submit" name="etud_info" class="btn btn-danger" value="Voir les informations sur les professeurs">
        </form>  -->
        <?php
            $info_etud= $info2->recup_etud_classe($_GET['codeCLS']);
            $s_sn = 1;
        ?>
        <div class="graph">
          <form action="" method="POST">
                <div class="tables">      
                      <table class="table table-striped ">               
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Matricule</th> 
                                  <th>Nom</th> 
                                  <th>Prenoms</th>
                                  <th>Notes</th>
                                  <th>Total notes</th>
                                  <th>Moyenne</th>
                              </tr>
                          </thead>
                          <tbody> 
                                      
                  <?php 
                      if($info_etud->num_rows>0){


                      while($etud_info =$info_etud->fetch_assoc()){ ?>                      

                      <tr>
                          <td><?php echo $s_sn; ?></td>
                          <td><?php echo $etud_info['MatriculeET']; ?></td>                                                             
                          <td><?php echo $etud_info['NomET']; ?></td>
                          <td><?php echo $etud_info['PrenomET']; ?></td>
                          <td>
                            <a href="list_notes.php?codeMAT=<?php echo $_GET['codeMat'];?>&codeET=<?= $etud_info['CodeET'] ?>"><div class="btn btn-info">Ouvrir</div></a>
                          </td>
                          <td>
                            <?php
                                $liste=$info2->recuperer_nombreNote($etud_info['CodeET'], $_GET['codeMat']);
                                if($liste->num_rows>0){
                                    if($element_info = $liste->fetch_assoc()){ 
                                      echo $element_info['nbNote'];
                                 }
                                }
                            ?>
                          </td>
                          <td>
                            <?php
                                $liste=$info2->recuperer_moyenneEtu($etud_info['CodeET'], $_GET['codeMat']);
                                if($liste->num_rows>0){
                                    if($element_info = $liste->fetch_assoc()){ 
                                      echo $element_info['moyenne'];
                                      $cool = $element_info['moyenne'];
                                  // echo "<script>alert('after: $cool');</script>";
                                 }

                                }
                                else
                                 {
                                 }
                            ?>
                            
                          </td>
                      </tr>
                  <?php $s_sn++; }} ?>
                  </tbody> 

                  </table>
                </form>
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