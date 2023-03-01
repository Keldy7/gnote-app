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
      <!-- <form method="post">
        <center>
          <div class="form-inline">
            <div class="input-group">
              <select name="ok">
                <?php
                $retour = $info2->classe1(); // afficher les classes
                while ($a = mysqli_fetch_array($retour)) {
                  echo '<option value="' . $a['CodeCLS'] . '">' . $a['LibelleCLS'] . '</option>';
                }
                ?>
              </select>
              <div class="input-group-append">

                <button class="btn btn-sidebar" name="valider">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>



          </div>
        </center>
      </form> -->
        <div class="row m-lg-3">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background-color:orangered">
                <h3 class="card-title">Formulaire de l'etudiant</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">

                <div class="card-body">
                  <div class="form-group">

                    <select name="ok" class="form-control">
                      <?php
                      $retour = $info2->classe1(); // afficher les classes
                      while ($a = mysqli_fetch_array($retour)) {
                        echo '<option value="' . $a['CodeCLS'] . '">' . $a['LibelleCLS'] . '</option>';
                      }
                      ?>
                    </select>
                    <div class="input-group-append">

                      <button class="btn btn-sidebar" name="valider">
                        <i class="fas fa-search fa-fw"></i>
                      </button>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control" name="nom">
                  </div>
                  <div class="form-group">
                    <label>Prenoms</label>
                    <input type="text" class="form-control" name="prenoms">
                  </div>
                  <div class="form-group">
                    <label>Contact parent</label>
                    <input type="text" class="form-control" name="telP">
                  </div>
                  <div class="form-group">
                    <label>Contact tuteur</label>
                    <input type="text" class="form-control" name="telT">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                    <label>Classe</label>
                    <select class="form-control" name="nomcl">
                      <?php
                      $retour = $info2->classe(); // afficher les classes
                      while ($a = mysqli_fetch_array($retour)) {
                        echo '<option value="' . $a['LibelleCLS'] . '">' . $a['LibelleCLS'] . '</option>';
                      }
                      ?>
                    </select>
                    <div class="form-group">
                      <label>Pseudo</label>
                      <input type="text" class="form-control" name="login">
                    </div>
                    <div class="form-group">
                      <label>Mot de passe</label>
                      <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                      <label>Photo</label>
                      <input type="file" class="form-control" name="photo">
                    </div>

                  </div>

                  <!-- <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button> -->
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      <?php
      // if(isset($_GET['valider']) and $_GET['valider']=="recherche"){
      //     $_GET['ok'] = htmlspecialchars($_GET['ok']);
      //     $ok = $_GET['ok'];
      //     $ok = trim($ok);
      //     $ok = strip_tags($ok);

      if (isset($_POST['valider'])) {
        $id = $_POST['ok'];
        $cherche = $info2->etudiantClasse($id);
        // $ok = ucwords($ok);
        // $cherche =mysqli_query( $info2->hackme(),"SELECT N.CodeNTE CONCAT(E.NomET,' ',E.PrenomET),N.ValeurNTE,N.CoefficientNTE,N.CodeSMSTRE FROM etudiant E,note N WHERE E.MatriculeET = N.MatriculeET and E.MatriculeET LIKE '%$id%'");

        $s_sn = 1;
      ?>

        <div class="graph">
          <div class="tables">

            <table class="table table-bordered ">

              <thead>
                <tr>
                  <th>#</th>
                  <th>Matricule</th>
                  <th>Nom</th>
                  <th>Prenoms</th>
                  <th>Email</th>
                  <th>Classe</th>
                  <th>Filière</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                <?php
                if ($cherche->num_rows > 0) {


                  while ($etud_info = mysqli_fetch_assoc($cherche)) { ?>

                    <tr>
                      <td><?php echo $s_sn; ?></td>
                      <td><?php echo $etud_info['MatriculeET']; ?></td>
                      <td><?php echo $etud_info['NomET']; ?></td>
                      <td><?php echo $etud_info['PrenomET']; ?></td>
                      <td><?php echo $etud_info['EmailET']; ?></td>
                      <td><?php echo $etud_info['LibelleCLS']; ?></td>
                      <td><?php echo $etud_info['LibelleFIL']; ?></td>
                      <?php echo '<td><img src="../destination/' . $etud_info['Photo'] . '" width="70px" height="80px"/></td>' ?>
                      <td><a class="tooltips" href="etut-suprimer.php?Id=<?php echo $etud_info['CodeET']; ?>"><i class="fa fa-trash" style="color:orangered"></i></a>
                        <a class="tooltips" href="etut_modifier.php?Id=<?php echo $etud_info['CodeET']; ?>"><i class="fa fa-edit" style="color:rgb(18, 219, 18);"></i></a>
                      </td>
                    </tr>
                  <?php $s_sn++;
                  }
                } else {
                  ?>
                  <td colspan="9" style="font-weight:bold">Pas d'élèves trouver pour cette classe
                  </td>
              <?php }
              }
              ?>
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