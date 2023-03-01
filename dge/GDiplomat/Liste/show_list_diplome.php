<?php
/*include "../setting/config.php";*/
include "../../../config.php";
session_start();
if (!$_SESSION['dge']) {
    header("location:loginadmin.php");
} else {

    $nomDEG = $_SESSION['dge'];
    $nom_DGE = $info2->dge_username($nomDEG);
    $nomDGE_vue = $nom_DGE->fetch_assoc();
    $meadmin_info = $nomDGE_vue['LoginDGE'];
    // $info = $info2->prof_info($nomDE);
    $info = $info2->dge_username($nomDEG);
    $info_DGE = $info->fetch_assoc();
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
    <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css"><!-- Theme style -->
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
                    <!-- <div class="image">
                <img src="../dist/img/Francky.png" class="img-circle elevation-2" alt="User">
            </div> -->
                    <div class="info">
                        <a href="#" class="d-block" style="color:orangered;font-weight:bold"><?php echo $info_DGE['NomDGE'] . ' ' . $info_DGE['PrenomDGE']; ?></a>
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

                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color:orangered;font-weight:bold">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Directeur
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../de-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Information</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../de-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ajouter</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

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
                                    <a href="list_non_diplome.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-list-alt nav-icon"></i>
                                        <p>Liste Des Non Diplômés</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="list_diplome.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-list-alt nav-icon"></i>
                                        <p>Liste Des Diplômés</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="list_planche.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-list-alt nav-icon"></i>
                                        <p>Liste Des Planches</p>
                                    </a>
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
                            <div class="invoice p-3 mb-3 planche">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th scope="col">Matricule</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prénom(s)</th>
                                            <th scope="col">Cycle</th>
                                            <th scope="col">Filière</th>
                                            <th scope="col">Année Scolaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>18INP00129</td>
                                            <td>Kouadio</td>
                                            <td>Franck</td>
                                            <td>Technicien Supérieur</td>
                                            <td>Science et Technologie de l'Information et de la Communication</td>
                                            <td>2020-2021</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>18INP00159</td>
                                            <td>Kouamé</td>
                                            <td>Aya</td>
                                            <td>Technicien Supérieur</td>
                                            <td>Science et Technologie de l'Information et de la Communication</td>
                                            <td>2020-2021</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>18INP00169</td>
                                            <td>Kouassi</td>
                                            <td>Adja</td>
                                            <td>Technicien Supérieur</td>
                                            <td>Science et Technologie de l'Information et de la Communication</td>
                                            <td>2020-2021</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>18INP00169</td>
                                            <td>Kouassi</td>
                                            <td>Adja</td>
                                            <td>Technicien Supérieur</td>
                                            <td>Science et Technologie de l'Information et de la Communication</td>
                                            <td>2020-2021</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>18INP00169</td>
                                            <td>Kouassi</td>
                                            <td>Adja</td>
                                            <td>Technicien Supérieur</td>
                                            <td>Science et Technologie de l'Information et de la Communication</td>
                                            <td>2020-2021</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-12">
                                        <a href="print_list_diplome.php" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print
                                        </a>
                                        <button type="button" onclick="" class="btn bg-orange text-white float-right" style="margin-right: 5px;">
                                            <i class="fas fa-download"></i> Générer PDF
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <!-- AdminLTE App -->
    <script src="../../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../dist/js/demo.js"></script>
</body>

</html>