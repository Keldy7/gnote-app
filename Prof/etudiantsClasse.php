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
            $info_etud=	$info2->recup_etud_classe($_GET['codeCLS']);
            $s_sn = 1;
            if (isset($_GET['libmat'])) {
              if ($_GET['libmat']!="") {
                $libmat = $_GET['libmat'];
                  // echo "<script>alert('echequeboom: $libmat');</script>";
              }
              else
              {
                 echo "<script>alert('champ vide');</script>";
              }
              
            }
            else
            {
              //echo "<script>alert('valeur inexistante');</script>";
            }
        ?>
        <div>Etudiants <a href="planche-note.php"><button>Saisir des notes</button></a></div>
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
                                  <th>Photo</th>
                                  <th>Notes</th>
                                  <th>Total notes</th>
                                  <th>Moyenne</th>
                                  <th>Absences</th>
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
                          <?php echo '<td><img src="../destination/'. $etud_info['Photo'].'" width="70px" height="80px"/></td>' ?>
                          <td>
                            <a href="etut-note.php?<?php $para="etcl"; require('etut-note-donneesGET.php') ?>" title="afficher les notes">
                              <div class="btn" style="background-color: white;"><i class="fa fa-door-open"></i></div>
                            </a>
                            <?php  
                            if (isset($_GET['codeMAT'])): 
                                if($_GET['codeMAT'] !=""): ?>

                                <a href="Saisir.php?<?php $para="etcl"; require('etut-note-donneesGET.php') ?>">
                                  <div class="btn" style="background-color: white;"><i class="fa fa-plus" title="ajouter une note"></i></div>
                                </a>
                              <?php 
                                else:
                                  echo "<script>alert('Erreur, donnée corrompu');</script>";
                                endif;
                            else:
                              echo "<script>alert('Des données n\'existent pas');</script>";
                            endif; ?>
                          </td>
                          <td>
                            <?php
                                $liste=$info2->recuperer_nombreNote($etud_info['CodeET'], $_GET['codeMAT']);
                                if($liste->num_rows>0){
                                    if($element_info = $liste->fetch_assoc()){ 
                                      echo $element_info['nbNote'];
                                 }
                                }
                            ?>
                          </td>
                          <td>
                            <?php
                                $liste=$info2->recuperer_moyenneEtu($etud_info['CodeET'], $_GET['codeMAT']);
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
                          <td>
                              + <select name="heures" id="">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                          </td>
                      </tr>
                  <?php $s_sn++; }} ?>
                  </tbody> 

                  </table>
                  <button name="valider" type="submit">Valider les heures d'absences</button>
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