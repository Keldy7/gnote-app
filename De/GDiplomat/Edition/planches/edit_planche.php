<?php
/*include "../setting/config.php";*/
include "../../../../config.php";
session_start();
if (!$_SESSION['de']) {
    header("location:../../../../index.php");
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
    <title>GDiplomat | Planches</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../../../dist/img/gnote.png" alt="AdminLTELogo" height="60" width="60">
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
                                <img src="../../../../dist/img/Francky.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
                                <img src="../../../../dist/img/aude.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
                                <img src="../../../../dist/img/marc.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
                    <a href="../../../deconnecter.php">
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
                <img src="../../../../dist/img/gnote.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                                    <a href="../../../prof-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Information</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../../prof-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
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
                                    <a href="../../../insp-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Information</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../../insp-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
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
                                    <a href="../../../etut-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Information</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../../etut-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ajouter</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../../etut-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Abandonner</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../../etut-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
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
                                            <a href="index.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
                                                <i class="far fa-edit nav-icon"></i>
                                                <p>Edition De Planches</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../diplomes/index.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
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
                                            <a href="../../Liste/list_diplome.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
                                                <i class="far fa-list-alt nav-icon"></i>
                                                <p>Liste Des Diplômés</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../../Liste/list_non_diplome.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
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
        <div class="content-wrapper" style="min-height: 2171.31px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Planches</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../../index.php">Home</a></li>
                                <li class="breadcrumb-item active">Planches</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">

                            <!-- Horizontal Form -->
                            <div class="card">
                                <div class="card-header bg-orange">
                                    <a href="index.php">
                                        <button type="button" class="btn bg-orange btn-sm float-right">
                                            <i class="fas fa-reply"></i>
                                        </button>
                                    </a>
                                    <h3 class="card-title text-white">Informations De l'Etudiant</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form">
                                    <div class="card-body row">
                                        <div class="form-group col-sm-2">
                                            <label for="inputEmail3" class="col-form-label">Année</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="2020-2021" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="inputEmail3" class="col-form-label">Filière</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Science et Technologie de l'information et de la communication" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="inputEmail3" class="col-form-label">Cycle</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Technicien Supérieur" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputEmail3" class="col-form-label">Classe</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="TS STIC 1-A" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputEmail3" class="col-form-label">Matricule</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="18INP00149" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="inputPassword3" class="col-form-label">Nom</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="inputPassword3" placeholder="Yao" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-7">
                                            <label for="inputEmail3" class="col-form-label">Prénom(s)</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Marcellin" disabled>
                                            </div>
                                        </div>
                                        <h4 class="col-sm-12">Bilan Du Semestre 5</h4>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Moyenne Semestrielle</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="12" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Heures d'absence totales</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="0" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Heures d'absence non justifiées</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="0" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Moyenne Semestrielle Corrigée</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="12" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Rang Semestrielle</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="5" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputEmail3" class="col-form-label">Proposition du conseil de classe</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="VAL" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputEmail3" class="col-form-label">Observations</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="AVT ABS" disabled>
                                            </div>
                                        </div>
                                        <h4 class="col-sm-12">Bilan De La Scolarité</h4>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Moyenne 1ère Année</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="12" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Moyenne 2ème Année</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="13" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Moyenne 3ème Année</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="11,5" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Moyenne De Scolarité</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="12,10" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Rang Annuel</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="10" disabled>
                                            </div>
                                        </div>
                                        <h4 class="col-sm-12">Semestre 6</h4>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Stage 1A Découverte</label>
                                            <div class="">
                                                <input type="text" class="form-control" id="inputPassword3" placeholder="V" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Stage 2A Application</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="13" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Stage de Fin d'Etudes </label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="14" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="inputPassword3" class="col-form-label">Moyenne Semestrielle</label>
                                            <div class="">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="13,5" disabled>
                                            </div>
                                        </div>
                                        <h4 class="col-sm-12">Décision Finale</h4>
                                        <div class="form-group col-sm-2">
                                            <label for="inputEmail3" class="col-form-label">Proposition du conseil de classe</label>
                                            <div class="">
                                                <select class="custom-select">
                                                    <option value="0">NON DIP</option>
                                                    <option value="1">DIP</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn bg-orange">Enregistrer</button>
                                        <button type="reset" class="btn btn-default float-right">Annuler</button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            </div>
                            <!-- /.card -->

                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
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
    <script src="../../../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>