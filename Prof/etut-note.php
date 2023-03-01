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
		</form>	 -->
		<?php
    if (isset($_GET['codeET']) && isset($_GET['codeMAT'])) {
            $info_etud=	$info2->afficher_etut_matiereNote($_GET['codeET'], $_GET['codeMAT']);
            $s_sn = 1;
    }
    else
      echo "<script>alert('Données inexistantes');</script>";

    ?>
        <div>
          <a href="etudiantsClasse.php?<?php $para="hrefGET"; require('etut-note-donneesGET.php') ?>">
            <button class="btn btn-info">Liste des élèves</button>
          </a>
          <a href="Saisir.php?<?php $para="hrefGET"; require('etut-note-donneesGET.php') ?>">
            <button class="btn btn-primary">Ajouter une note</button>
          </a>
          <?php
              $liste=$info2->recuperer_moyenneEtu($_GET['codeET'], $_GET['codeMAT']);
              if($liste->num_rows>0){
                  if($element_info = $liste->fetch_assoc()){ 
                    echo 'Moyenne: '.$element_info['moyenne'];
                    $cool = $element_info['moyenne'];
                // echo "<script>alert('after: $cool');</script>";
               }

              }
              else
               {
               }
          ?>
        </div>
        <div class="graph">
                <div class="tables">      
                      <table class="table table-striped">               
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Libellé</th> 
                                  <th>Valeur</th>
                                  <th>Coéffient</th> 
                                  <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody> 
                                      
                  <?php 
                      if($info_etud->num_rows>0){


                      while($etud_info =$info_etud->fetch_assoc()){ ?>						

                      <tr>
                          <td><?php echo $s_sn; ?></td>
                          <td><?php echo $etud_info['DescriptionNTE']; ?></td>																
                          <td><?php echo $etud_info['ValeurNTE']; ?></td>
                          <td><?php echo $etud_info['CoefficientNTE']; ?></td>
                          <td>
                            <a href="prof-supprimerNote.php?Id=<?= $etud_info['CodeNTE'] ?>&codeET=<?= $etud_info['CodeET']?>&codeMAT=<?= $etud_info['CodeMAT']?>&matri=<?php echo $_GET['matri']?>&codeCLS=<?= $_GET['codeCLS'] ?>" title="supprimer" onclick="return confirm('Voulez-vous vraiment supprimer cette note ?')">
                              <div class="btn" style="background-color: white;"><i class="fa fa-trash" style="color:red;"></i></div>
                            </a>
                            <a href="prof-modifierNote.php?codeNTE=<?= $etud_info['CodeNTE'] ?>&amp;codeET=<?= $etud_info['CodeET'] ?>&amp;codeMAT=<?= $etud_info['CodeMAT'] ?>&matri=<?=$_GET['matri']?>&codeCLS=<?= $_GET['codeCLS'] ?>" title="modifier">
                              <div class="btn" style="background-color: white;"><i class="fa fa-edit" style="color:green;"></i></div>
                            </a>
                          </td>
                          
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