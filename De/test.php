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
  <style>
    table {
      margin-top: 50px;
      border-collapse: collapse;
    }

    td {
      border: 1px solid black;
      text-align: center;
      font-weight: bold;
      height: 50px;
      padding-left: 10px;
    }

    .title {
      text-align: center;
      font-weight: bold;
      height: 50px;
      padding-left: 10px;
      border: none;
    }

    tr {
      border: 1px solid black;
    }

    #sup5000 {
      background-color: green;
    }

    #inf5000 {
      background-color: orangered;
    }

    #noactiv {
      background-color: red;
    }
  </style>
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
            <input type="submit" name="prof_info" class="btn btn-danger" value="Voir les informations sur les professeurs">
		</form>	 -->
      <div class="col-sm-12 col-md-6">
        <div class="dt-buttons btn-group flex-wrap" >
          <!-- <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1"
                type="button">
                <span>Copy</span></button>
            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1"
                type="button">
                <span>CSV</span></button> -->
          <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
            <span>Excel</span>
          </button>
          <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button" value="imp" onclick="printpage();">
            <span>Imprimer</span>
          </button>

          <div class="graph" id="imprimer" onload="printpage()">
            <div class="tables">

              <table class="table table-bordered ">

                <theader>
                  <td tabindex="0" aria-controls="example1" colspan="4" class="title">Cycle : CYCLE TECHNICIEN SUPERIEUR</td>
                  <td tabindex="0" aria-controls="example1" colspan="6" class="title">Année Scolaire : 2021-2022</td>
                </theader>
                <theader>
                  <tr>
                    <td tabindex="0" aria-controls="example1" colspan="4" class="title">Filière
                      <select>
                        <?php
                        $retour = $info2->filiere(); // afficher les classes
                        while ($a = mysqli_fetch_array($retour)) {
                          echo '<option value="' . $a['LibelleFIL'] . '">' . $a['LibelleFIL'] . '</option>';
                        }
                        ?></select>
                    </td>
                    <td tabindex="0" aria-controls="example1" colspan="6" class="title">Semestre : 2</td>
                  </tr>
                </theader>
                <theader>
                  <tr>
                    <td tabindex="0" aria-controls="example1" colspan="4" class="title">Nom et prenoms :
                      <select>
                        <?php
                        $retour = $info2->etudiant(); // afficher les classes
                        while ($a = mysqli_fetch_array($retour)) {
                          echo '<option value="' . $a['CodeET'] . '">' . $a['NomET'] .' '. $a['PrenomET'] . '</option>';
                        }
                        ?></select>
                    </td>
                    <td tabindex="0" aria-controls="example1" colspan="6" class="title">Classe :
                      <select>
                        <?php
                        $retour = $info2->classe(); // afficher les classes
                        while ($a = mysqli_fetch_array($retour)) {
                          echo '<option value="' . $a['LibelleCLS'] . '">' . $a['LibelleCLS'] . '</option>';
                        }
                        ?>
                      </select>
                    </td>
                  </tr>
                </theader>
                <theader>
                  <tr>
                    <td tabindex="0" aria-controls="example1" colspan="4" class="title">Matricule: 20inp</td>
                    <td tabindex="0" aria-controls="example1" colspan="6" class="title">Effectif :29</td>
                  </tr>
                </theader>
                <tr>
                  <td tabindex="0" aria-controls="example1" rowspan="2">Unité D'enseigenement(UE)</td>
                  <td tabindex="0" aria-controls="example1" rowspan="2">Element Consécutif d'unité d'Enseignement</td>
                  <td tabindex="0" aria-controls="example1" rowspan="2">Coef</td>
                  <td tabindex="0" aria-controls="example1" colspan="2">Moyenne session 1</td>
                  <td tabindex="0" aria-controls="example1" colspan="2">Moyenne session 2</td>
                  <td tabindex="0" aria-controls="example1" rowspan="2">Décision du conseil</td>
                  <td tabindex="0" aria-controls="example1" rowspan="2">Crédits</td>
                  <td tabindex="0" aria-controls="example1" rowspan="2">Enseignement</td>
                </tr>
                <tr>
                  <td>ECUE</td>
                  <td>UE</td>
                  <td>ECUE</td>
                  <td>UE</td>
                </tr>
                <tbody>
                  <tr>
                    <td rowspan="3">Programme WEB</td>
                    <td>PHP</td>
                    <td> <input value="2,00" style="width:50px"></td>
                    <td><input value="14,25" style="width:50px"></td>
                    <td rowspan="3"><input value="16,00" style="width:50px"></td>
                    <td></td>
                    <td rowspan="3"></td>
                    <td rowspan="3">
                      <select>
                        <option value="UE V">EU V</option>
                        <option value="UE N">EU N</option>
                      </select>
                    </td>
                    <td rowspan="3"><input value="30,00" style="width:50px"></td>
                    <td>Docteur Appoh</td>
                  </tr>
                  <tr>
                    <td>LARAVEL</td>
                    <td><input value="2,00" style="width:50px"></td>
                    <td><input value="2,00" style="width:50px"></td>
                    <td></td>
                    <td>Diomande Souleymane</td>
                  </tr>
                  <tr>
                    <td>Webdev</td>
                    <td><input value="2,00" style="width:50px"></td>
                    <td><input value="14,25" style="width:50px"></td>
                    <td></td>
                    <td>Kesse Regis</td>
                  </tr>

                </tbody>

              </table>
            </div>
          </div>
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

  <!-- <script>
    function imprimer(){
      var imprimer = document.getElementById('imprimer');
      var popupcontenu = window.open('', '_blank');
      popupcontenu.document.open();
      popupcontenu.document.write('<html><body onload="window.print()">'+ imprimer.innerHTML+ '</html>');
    }
  </script> -->
  <script>
    function printpage() {
      window.print()
    }
  </script>
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