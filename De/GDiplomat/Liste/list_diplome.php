<?php
/*include "../setting/config.php";*/
include "../../../config.php";
session_start();
if (!$_SESSION['de']) {
    header("location:../../index.php");
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
    <title>GDiplomat | Listes</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../../dist/img/gnote.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-image:url('../dist/img/inp.png');background-repeat:no-repeat;height:80px;width:auto;background-position:center">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../../index.php" class="nav-link" style="color:red;font-weight:bold">Home</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->


                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../../dist/img/Francky.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Franck Armand
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Une erreur sur ma moyenne</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>il y'a 4h</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../../dist/img/aude.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Aude Kouassy
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Merci monsieur</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>hier</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../../dist/img/marc.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Bohoussou Marc
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Un homme politique</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>2 jours</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Voir tous les messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 nouveaux messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 nouveaux raports
                            <span class="float-right text-muted text-sm">2 jours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Voir tous les messages Notifications</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="../../deconnecter.php">
                        <input type="button" value="Deconnexion" class="btn btn-danger">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- asside -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:white;color:orangered">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="../../../dist/img/gnote.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span style="color:orangered;font-weight:bold">GNOTE</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block" style="color:orangered;font-weight:bold"><?php echo $info_DE['NomDE'] . ' ' . $info_DE['PrenomDE']; ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <!-- Professeur -->
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color:orangered;font-weight:bold">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Professeur
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../prof-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Information</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../prof-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ajouter</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <!-- /Professeur-->
                        <!-- Inspecteur -->
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color:orangered;font-weight:bold">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Inspecteur de filieres
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../insp-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Information</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../insp-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ajouter</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <!-- Inspecteur -->
                        <!-- Etudiant -->
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color:orangered;font-weight:bold">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Etudiant
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../etut-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Information</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../etut-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ajouter</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../etut-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Abandonner</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../etut-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Valide Semestre</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <!-- Etudiant -->


                        <!-- Début Diplomation -->
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color:orangered;font-weight:bold">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Diplomation
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Edition
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="../Edition/planches/index.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
                                                <i class="far fa-edit nav-icon"></i>
                                                <p>Edition De Planches</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../Edition/diplomes/index.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
                                                <i class="far fa-edit nav-icon"></i>
                                                <p>Edition De Diplômes</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Liste
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="list_diplome.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
                                                <i class="far fa-list-alt nav-icon"></i>
                                                <p>Liste Des Diplômés</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="list_non_diplome.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
                                                <i class="far fa-list-alt nav-icon"></i>
                                                <p>Liste Des Non Diplômés</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Fin Diplomation -->

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- /asside -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Liste</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                                <li class="breadcrumb-item active">Liste Des Diplômés</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <a href="show_list_diplome.php" class="btn btn-primary btn-block mb-3">Imprimer La Liste</a>
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Matricule</th>
                                                <th>Nom</th>
                                                <th>Prénom(s)</th>
                                                <th>Cycle</th>
                                                <th>Filière</th>
                                                <th>Année Scolaire</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>18INP00159</td>
                                                <td>Kouamé</td>
                                                <td>Jean Jacques</td>
                                                <td>Technicien Supérieur</td>
                                                <td>Sciences et Technologie de l'Information et de la Communication (STIC)</td>
                                                <td>2020-2021</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>18INP00149</td>
                                                <td>Kouassi</td>
                                                <td>Adja</td>
                                                <td>Technicien Supérieur</td>
                                                <td>Sciences et Technologie de l'Information et de la Communication (STIC)</td>
                                                <td>2020-2021</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>18INP00129</td>
                                                <td>Kouadio</td>
                                                <td>Franck</td>
                                                <td>Technicien Supérieur</td>
                                                <td>Sciences et Technologie de l'Information et de la Communication (STIC)</td>
                                                <td>2020-2021</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Matricule</th>
                                                <th>Nom</th>
                                                <th>Prénom(s)</th>
                                                <th>Cycle</th>
                                                <th>Filière</th>
                                                <th>Année Scolaire</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
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
    <script src="../../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../../plugins/jszip/jszip.min.js"></script>
    <script src="../../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>