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
    <style>
        table {
            margin-top: 50px;
            border-collapse: collapse;
            border: 1px solid black;
        }

        td {
            border: 1px solid black;
            text-align: center;
            /* font-weight: bold; */
            height: 50px;
            width: 100px;
            padding-left: 10px;
        }

        .title {
            text-align: center;
            font-weight: bold;
            height: 50px;
            width: 7em;
            padding-left: 10px;
            border: none;
        }

        tr {
            border: 1px solid black;
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
            <input type="submit" name="etud_info" class="btn btn-danger" value="Voir les informations sur les professeurs">
		</form>	 -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="invoice p-3 mb-3 planche" nload="printpage()">
                                <table class="table table-bordered">
                                    <?php
                                    $info_etud = $info2->etudiant_EIT();
                                    $s_sn = 1;
                                    ?>
                                    <!-- <div class="graph" id="imprimer" onload="printpage()">
                        <div class="tables">

                            <table class="table table-bordered"> -->

                                    <theader>
                                        <td tabindex="0" aria-controls="example1" colspan="8" class="title">ECOLE SUPERIEUR D'INDUSTRIE</td>

                                    </theader>
                                    <theader>
                                        <tr>
                                            <td tabindex="0" aria-controls="example1" colspan="2" class="title">classes TS-STIC2 INFO</td>
                                            <td tabindex="0" aria-controls="example1" colspan="1" class="title">Matiere: EPS</td>
                                            <td tabindex="0" aria-controls="example1" colspan="3" rowspan="2" class="title">Enseignant : Monsieur Traore Souleyman</td>
                                            <td tabindex="0" aria-controls="example1" colspan="2" rowspan="2" class="title">Signature </td>
                                        </tr>
                                    </theader>
                                    <theader>
                                        <tr>
                                            <td tabindex="0" aria-controls="example1" colspan="3" class="title">Elément constitutif (EC)</td>

                                        </tr>
                                    </theader>
                                    <theader>
                                        <tr>
                                            <td tabindex="0" aria-controls="example1" colspan="3" class="title">COEFFICIENT</td>
                                            <td tabindex="0" aria-controls="example1" colspan="3" class="title">NATURE DES EVALUATION</td>
                                            <td tabindex="0" aria-controls="example1" colspan="1" rowspan="2" class="title">MOYENNE GENERALE</td>
                                            <td tabindex="0" aria-controls="example1" colspan="1" rowspan="2" class="title">OBSERVATION</td>

                                        </tr>
                                    </theader>
                                    <theader>
                                        <tr>
                                            <td tabindex="0" aria-controls="example1" colspan="1" class="title">N°</td>
                                            <td tabindex="0" aria-controls="example1" colspan="1" class="title">MATRICULE</td>
                                            <td tabindex="0" aria-controls="example1" colspan="1" class="title" width="100">NOM & PRENOMS</td>
                                            <td tabindex="0" aria-controls="example1" colspan="1" class="title">Devoir 1</td>
                                            <td tabindex="0" aria-controls="example1" colspan="1" class="title">Devoir 2</td>
                                            <td tabindex="0" aria-controls="example1" colspan="1" class="title">Devoir 3</td>

                                        </tr>
                                    </theader>
                                    <?php
                                    if ($info_etud->num_rows > 0) {


                                        while ($etud_info = $info_etud->fetch_assoc()) { ?>
                                            <tbody width="100">
                                                <tr>
                                                    <td><?php echo $s_sn ?></td>
                                                    <td><?php echo $etud_info['MatriculeET']; ?></td>
                                                    <td><?php echo $etud_info['NomET'] . ' ' . $etud_info['PrenomET']; ?></td>
                                                    <td><input type="text" name="note" style="width:50px"></td>
                                                    <td><input type="text" name="note" style="width:50px"></td>
                                                    <td><input type="text" name="note" style="width:50px"></td>
                                                    <td class="title"><input type="text" name="note" style="width:50px"></td>
                                                    <td></td>
                                                </tr>
                                        <?php $s_sn++;
                                        }
                                    } ?>
                                        <tr>
                                            <div style="border:none;color:white">
                                                <td style="border:none;color:white"></td>
                                                <td style="border:none;color:white"></td>
                                            </div>
                                            <td class="title">Dates des tests</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td rowspan="3" class="title">Chef de Classe</td>

                                        </tr>
                                        <tr>
                                        <div style="background-color:white;display:none">
                                                <td style="border:none;color:white"></td>
                                                <td style="border:none;color:white"></td>
                                            </div>
                                            <td class="title">Coefficient</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>


                                        </tr>
                                        <tr>
                                        <div style="background-color:white">
                                                <td style="border:none;color:white"></td>
                                                <td style="border:none;color:white"></td>
                                            </div>
                                            <td class="title">Moyenne de la classe</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>


                                        </tr>

                                            </tbody>

                                </table>
                                <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button" value="imp" onclick="printpage();">
                                    <span>Imprimer</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
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