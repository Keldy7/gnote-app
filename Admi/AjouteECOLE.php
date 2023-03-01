<?php
include "../configu.php";
// session_start();
// if (!$_SESSION['de']) {
//     header("location:../index.php");
// } else {

//     $nomDE = $_SESSION['de'];
//     $nom_DE = $info2->de_username($nomDE);
//     $nomDE_vue = $nom_DE->fetch_assoc();
//     $meadmin_info = $nomDE_vue['LoginDE'];
//     // $info = $info2->prof_info($nomDE);
//     $info = $info2->de_username($nomDE);
//     $info_DE = $info->fetch_assoc();
// }


if (isset($_POST['submit'])) {
    $libelle=$_POST['libelle'];
    $loc=$_POST['localisation'];
    $dge=$_POST['CodeDGE'];

    if ($libelle == "") {
        echo "<script>alert('veuillez remplir tous les champs');</script>";
    } else {
        // $ecl=mysqli_fetch_array(mysqli_query($info2->hackme(),'SELECT CodeEcole FROM ecole WHERE LibelleEcole="$ecole"'));
        // $CodeEcole=$ecl['CodeEcole'];
        // $isp=mysqli_fetch_array(mysqli_query($info2->hackme(),'SELECT CodeINSP FROM inspecteur WHERE NomINSP="$insp"'));
        // $CodeINSP=$isp['CodeINSP'];

        $ajout_ecole = $info2->ajouter_ecole($libelle, $loc, $dge);
        if ($ajout_ecole == true) {
            echo "<script>window.location = 'ecole-information.php';</script>";
        } else {
            echo "<script>alert('Quelque chose s'est mal passé!');</script>";
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
                        <div class="card-header" style="background-color:orangered">
                            <h3 class="card-title">CREATION D'ECOLES</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="POST">

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Libelle</label>
                                    <input type="text" class="form-control" name="libelle">
                                </div>
                                <div class="form-group">
                                    <label>Localisation</label>
                                    <input type="text" class="form-control" name="localisation">
                                </div>
                                <div class="form-group">
                                    <label for="">Directeur Ecole</label>
                                    <select class="form-control" name="CodeDGE" id="">
                                        <?php
                                            $dges=$info2->dge();
                                            if($dges->num_rows>0){
                                                while($dge =$dges->fetch_assoc()){ ?>
                                                <option value="<?php echo $dge['CodeDGE'] ?>"><?php echo $dge['NomDGE'].' '.$dge['PrenomDGE'] ?></option>
                                            <?php }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
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