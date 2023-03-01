<?php
session_start();


include "config.php";



if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($info2->hackme(), $_POST['username']);
    $password = mysqli_real_escape_string($info2->hackme(), $_POST['password']);
    // $username = ($_POST['user']);
    // $password = ($_POST['pass']);
    // echo $admin_username.' '.$admin_password ;
    if ($username == "" and $password == "") {
        echo "<script>alert('Entrez votre Username & Password');</script>";
    } else {
        $melogin = $info2->controle_admin($username, $password);
        if ($melogin == 1) {

            $_SESSION['admin'] = $username;
            header("location:Admi/index.php");
        } else {
            echo "<script>alert('Email Ou Password incorrect');</script>";
        }
    }
}

if (isset($_SESSION['admin'])) {
    header("location:Admi/index.php");
}
if (isset($_POST['login1'])) {

    $username = mysqli_real_escape_string($info2->hackme(), $_POST['username1']);
    $password = mysqli_real_escape_string($info2->hackme(), $_POST['password1']);
    // $username = ($_POST['user']);
    // $password = ($_POST['pass']);
    // echo $admin_username.' '.$admin_password ;
    if ($username == "" and $password == "") {
        echo "<script>alert('Entrez votre Username & Password');</script>";
    } else {
        $melogin = $info2->controle_dge($username, $password);
        if ($melogin == 1) {

            $_SESSION['dge'] = $username;
            header("location:Dge/index.php");
        } else {
            echo "<script>alert('Email Ou Password incorrect');</script>";
        }
    }
}

if (isset($_SESSION['dge'])) {
    header("location:Dge/index.php");
}
if (isset($_POST['login2'])) {

    $username = mysqli_real_escape_string($info2->hackme(), $_POST['username2']);
    $password = mysqli_real_escape_string($info2->hackme(), $_POST['password2']);
    // $username = ($_POST['user']);
    // $password = ($_POST['pass']);
    // echo $admin_username.' '.$admin_password ;
    if ($username == "" and $password == "") {
        echo "<script>alert('Entrez votre Username & Password');</script>";
    } else {
        $melogin = $info2->controle_de($username, $password);
        if ($melogin == 1) {

            $_SESSION['de'] = $username;
            header("location:De/index.php");
        } else {
            echo "<script>alert('Email Ou Password incorrect');</script>";
        }
    }
}

if (isset($_SESSION['de'])) {
    header("location:De/index.php");
}
if (isset($_POST['login3'])) {

    $username = mysqli_real_escape_string($info2->hackme(), $_POST['username3']);
    $password = mysqli_real_escape_string($info2->hackme(), $_POST['password3']);
    // $username = ($_POST['user']);
    // $password = ($_POST['pass']);
    // echo $admin_username.' '.$admin_password ;
    if ($username == "" and $password == "") {
        echo "<script>alert('Entrez votre Username & Password');</script>";
    } else {
        $melogin = $info2->controle_inspecteur($username, $password);
        if ($melogin == 1) {

            $_SESSION['insp'] = $username;
            header("location:Insp/index.php");
        } else {
            echo "<script>alert('Email Ou Password incorrect');</script>";
        }
    }
}

if (isset($_SESSION['insp'])) {
    header("location:Insp/index.php");
}
if (isset($_POST['login4'])) {

    $username = mysqli_real_escape_string($info2->hackme(), $_POST['username4']);
    $password = mysqli_real_escape_string($info2->hackme(), $_POST['password4']);
    // $username = ($_POST['user']);
    // $password = ($_POST['pass']);
    // echo $admin_username.' '.$admin_password ;
    if ($username == "" and $password == "") {
        echo "<script>alert('Entrez votre Username & Password');</script>";
    } else {
        $melogin = $info2->controle_professeur($username, $password);
        if ($melogin == 1) {

            $_SESSION['prof'] = $username;
            header("location:Prof/index.php");
        } else {
            echo "<script>alert('Email Ou Password incorrect');</script>";
        }
    }
}

if (isset($_SESSION['prof'])) {
    header("location:Prof/index.php");
}
if (isset($_POST['login5'])) {

    $username = mysqli_real_escape_string($info2->hackme(), $_POST['username5']);
    $password = mysqli_real_escape_string($info2->hackme(), $_POST['password5']);
    // $username = ($_POST['user'])
    // $password = ($_POST['pass']);
    // echo $admin_username.' '.$admin_password ;
    if ($username == "" and $password == "") {
        echo "<script>alert('Entrez votre Username & Password');</script>";
    } else {
        $melogin = $info2->controle_etudiant($username, $password);
        if ($melogin == 1) {

            $_SESSION['etud'] = $username;
            header("location:Etud/index.php");
        } else {
            echo "<script>alert('Email Ou Password incorrect');</script>";
        }
    }
}

if (isset($_SESSION['etud'])) {
    header("location:Etud/index.php");
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Note</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gaia.css" rel="stylesheet" />

    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <script src="index.js"></script>
</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <div class="preloader flex-column justify-content-center align-items-center">
                    <img class="animation__shake" src="dist/img/gnote.png" alt="AdminLTELogo" height="80" width="100">
                </div>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                        <a href="https://www.inphb.ci" target="_blank">Voir Plus</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="btn btn-danger btn-fill">
                            <i class="fa fa-users"></i> Connexion
                        </a>
                        <ul class="dropdown-menu dropdown-succes" style="background-color:orangered;">
                            <li>
                                <a href="#" style="background-color:orangered;color:white;font-weight:bold" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#elegantModalForm"><i class="fa fa-user"></i>Super Admin</a>
                            </li>
                            <li>
                                <a href="#" style="background-color:orangered;color:white;font-weight:bold" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#elegantModalForm1"><i class="fa fa-user"></i>Directeur General</a>
                            </li>
                            <li>
                                <a href="#" style="background-color:orangered;color:white;font-weight:bold" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#elegantModalForm2"><i class="fa fa-user"></i>Directeur des Etudes</a>
                            </li>
                            <li>
                                <a href="#" style="background-color:orangered;color:white;font-weight:bold" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#elegantModalForm3"><i class="fa fa-user"></i>Inspecteurs</a>
                            </li>
                            <li>
                                <a href="#" style="background-color:orangered;color:white;font-weight:bold" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#elegantModalForm4"><i class="fa fa-user"></i>Professeur</a>
                            </li>
                            <li>
                                <a href="#" style="background-color:orangered;color:white;font-weight:bold" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#elegantModalForm5"><i class="fa fa-user"></i>Etudiants</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="section section-header">
        <div class="parallax filter filter-color-#FFA500">
            <div class="image" style="background-image: url('assets/img/inphb.png')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">

                        <h1 class="title-modern" style="color:orangered">GNote</h1>
                        <h3 style="color:white;font-weight:bold">Gestion des notes des etudiants de l'INPHB</h2>
                            <div class="separator line-separator">♦</div>
                    </div>

                    <div class="button-get-started">
                        <a href="https://www.inphb.ci" target="_blank" class="btn btn-danger btn-fill btn-lg " style="background-color:orangered;color:white;font-weight:bold">
                            Ici c'est chez nous
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2 style="color:rgb(18, 219, 18);font-weight:bold">Notre Ecole <a href="https://www.inphb.ci/2/vues/esi/" target="_blank" style="color:rgb(18, 219, 18);font-weight:bold"><i class="fa fa-bank"></i></a> </h2>
                    <div class="separator separator-info">✻</div>
                    <p class="description">l'Ecole supérieur d'industrie (ESI) est une ecole de l'INPHB</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon " style="color:orangered">
                            <i class="pe-7s-refresh-cloud"></i>
                        </div>
                        <h3>STIC</h3>
                        <p class="description">Science et Technologie de lInformation et de la Communication</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon " style="color:orangered">
                            <i class="pe-7s-filter"></i>
                        </div>
                        <h3>STGP</h3>
                        <p class="description">Science et technologie du Genie des Procédés.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon " style="color:orangered">
                            <i class="pe-7s-tools"></i>
                        </div>
                        <h3>STGI</h3>
                        <p class="description">Science et Technologie du Genie Industrile.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="section section-our-clients-freebie">
        <div class="container">
            <div class="title-area">
                <hr />
                <h2 style="color:rgb(18, 219, 18);font-weight:bold">Personnel <i class="fa fa-male"></i></h2>
                <div class="separator separator-danger">∎</div>
            </div>

            <ul class="nav nav-text" role="tablist">
                <li class="active">
                    <a href="#testimonial1" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="assets/img/faces/Tano.jpg" />
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#testimonial2" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="assets/img/faces/Kpo.jpg" />
                        </div>
                    </a>
                </li>
                <!-- <li>
                    <a href="#testimonial3" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="assets/img/faces/face_2.jpg"/>
                        </div>
                    </a>
                </li> -->
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="testimonial1">
                    <p class="description">
                        le directeur de l'Ecole Superieur d'Industrie (ESI)
                    </p>
                </div>
                <div class="tab-pane" id="testimonial2">
                    <p class="description">Le directeur d'Etude
                    </p>
                </div>

            </div>

        </div>
    </div>


    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image" style="background-image: url('assets/img/inphb1.jpg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">l'ecole d'excellence</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description">La meilleur école de Côte d'ivoire elle célèbrera ses 25 ans</p>
                </div>

                <div class="button-get-started">
                    <a href="#" class="btn btn-danger btn-fill btn-lg">Contactez nous</a>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer footer-big footer-color-black" data-color="black" style="background-color: #04544c">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="info">
                        <h5 class="title">Partenaire</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Orange</a>
                                </li>
                                <li>
                                    <a href="#">MTN</a>
                                </li>
                                <li>
                                    <a href="#">SGBCI</a>
                                </li>
                                <li>
                                    <a href="#">NSIA Banque</a>
                                </li>
                                <li>
                                    <a href="#">Banque National</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title"> Help and Support</h5>
                         <nav>
                            <ul>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">How it works</a>
                                </li>
                                <li>
                                    <a href="#">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Company Policy</a>
                                </li>
                                <li>
                                    <a href="#">Money Back</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> -->
                <!-- <div class="col-md-3 col-sm-3">
                    <div class="info">
                        <h5 class="title">Latest News</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> <b>Get Shit Done</b> The best kit in the market is here, just give it a try and let us...
                                        <hr class="hr-small">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> We've just been featured on <b> Awwwards Website</b>! Thank you everybody for...
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> -->
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title">Suivez nous sur : </h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i class="fa fa-facebook-square"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                        <i class="fa fa-instagram"></i> Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-twitter btn-simple">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-reddit btn-simple">
                                        <i class="fa fa-google-plus-square"></i> Google+
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright" style="color:white;font-weight:bold">
                © <script>
                    document.write(new Date().getFullYear())
                </script> TS INFO 2
            </div>
        </div>
    </footer>
    <!-- Modal section -->
    <!-- Modal -->
    <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant" style="background-color:white;color:orangered">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>CONNEXION</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->

                    <form id="quickForm" method="POST" action="">
                        <div class="card-body">
                            <div class="form-group">
                                <label>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Pseudo</font>
                                    </font>
                                </label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mot de passe</font>
                                    </font>
                                </label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                    <label class="custom-control-label" for="exampleCheck1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">J'accepte les </font>
                                        </font><a href="#">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">conditions d'utilisation</font>
                                            </font>
                                        </a>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;"> .</font>
                                        </font>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer">
                            <center>
                                <div class="card-footer">
                                    <input type="submit" name="login" class="btn btn-sucess" style="background-color: rgb(18, 219, 18);color:white" value="Se connecter">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"></font>
                                    </font>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
                <!--Footer-->

            </div>
            <!--/.Content-->
        </div>
    </div>
    <div class="modal fade" id="elegantModalForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant" style="background-color:white;color:orangered">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>CONNEXION</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->

                    <form id="quickForm" method="POST" action="">
                        <div class="card-body">
                            <div class="form-group">
                                <label>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Pseudo</font>
                                    </font>
                                </label>
                                <input type="text" name="username1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mot de passe</font>
                                    </font>
                                </label>
                                <input type="password" name="password1" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                    <label class="custom-control-label" for="exampleCheck1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">J'accepte les </font>
                                        </font><a href="#">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">conditions d'utilisation</font>
                                            </font>
                                        </a>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;"> .</font>
                                        </font>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer">
                            <center>
                                <div class="card-footer">
                                    <input type="submit" name="login1" class="btn btn-sucess" style="background-color: rgb(18, 219, 18);color:white" value="Se connecter">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"></font>
                                    </font>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
                <!--Footer-->

            </div>
            <!--/.Content-->
        </div>
    </div>
    <div class="modal fade" id="elegantModalForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant" style="background-color:white;color:orangered">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>CONNEXION</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->

                    <form id="quickForm" method="POST" action="">
                        <div class="card-body">
                            <div class="form-group">
                                <label>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Pseudo</font>
                                    </font>
                                </label>
                                <input type="text" name="username2" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mot de passe</font>
                                    </font>
                                </label>
                                <input type="password" name="password2" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                    <label class="custom-control-label" for="exampleCheck1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">J'accepte les </font>
                                        </font><a href="#">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">conditions d'utilisation</font>
                                            </font>
                                        </a>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;"> .</font>
                                        </font>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer">
                            <center>
                                <div class="card-footer">
                                    <input type="submit" name="login2" class="btn btn-sucess" style="background-color: rgb(18, 219, 18);color:white" value="Se connecter">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"></font>
                                    </font>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
                <!--Footer-->

            </div>
            <!--/.Content-->
        </div>
    </div>
    <div class="modal fade" id="elegantModalForm3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant" style="background-color:white;color:orangered">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>CONNEXION</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->

                    <form id="quickForm" method="POST" action="">
                        <div class="card-body">
                            <div class="form-group">
                                <label>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Pseudo</font>
                                    </font>
                                </label>
                                <input type="text" name="username3" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mot de passe</font>
                                    </font>
                                </label>
                                <input type="password" name="password3" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                    <label class="custom-control-label" for="exampleCheck1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">J'accepte les </font>
                                        </font><a href="#">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">conditions d'utilisation</font>
                                            </font>
                                        </a>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;"> .</font>
                                        </font>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer">
                            <center>
                                <div class="card-footer">
                                    <input type="submit" name="login3" class="btn btn-sucess" style="background-color: rgb(18, 219, 18);color:white" value="Se connecter">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"></font>
                                    </font>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
                <!--Footer-->

            </div>
            <!--/.Content-->
        </div>
    </div>
    <div class="modal fade" id="elegantModalForm4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant" style="background-color:white;color:orangered">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>CONNEXION</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->

                    <form id="quickForm" method="POST" action="">
                        <div class="card-body">
                            <div class="form-group">
                                <label>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Pseudo</font>
                                    </font>
                                </label>
                                <input type="text" name="username4" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mot de passe</font>
                                    </font>
                                </label>
                                <input type="password" name="password4" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                    <label class="custom-control-label" for="exampleCheck1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">J'accepte les </font>
                                        </font><a href="#">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">conditions d'utilisation</font>
                                            </font>
                                        </a>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;"> .</font>
                                        </font>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer">
                            <center>
                                <div class="card-footer">
                                    <input type="submit" name="login4" class="btn btn-sucess" style="background-color: rgb(18, 219, 18);color:white" value="Se connecter">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"></font>
                                    </font>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
                <!--Footer-->

            </div>
            <!--/.Content-->
        </div>
    </div>
    <div class="modal fade" id="elegantModalForm5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant" style="background-color:white;color:orangered">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>CONNEXION</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->

                    <form id="quickForm" method="POST" action="">
                        <div class="card-body">
                            <div class="form-group">
                                <label>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Pseudo</font>
                                    </font>
                                </label>
                                <input type="text" name="username5" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mot de passe</font>
                                    </font>
                                </label>
                                <input type="password" name="password5" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                    <label class="custom-control-label" for="exampleCheck1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">J'accepte les </font>
                                        </font><a href="#">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">conditions d'utilisation</font>
                                            </font>
                                        </a>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;"> .</font>
                                        </font>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer">
                            <center>
                                <div class="card-footer">
                                    <input type="submit" name="login5" class="btn btn-sucess" style="background-color: rgb(18, 219, 18);color:white" value="Se connecter">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"></font>
                                    </font>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
                <!--Footer-->

            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Modal -->

    <!-- <div class="text-center">
<a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#elegantModalForm">Launch
  modal Login Form</a>
</div> -->



</body>

<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

<style>
    hr {
        height: 3px;
        background-color: orangered;
        border: none;
    }
</style>

</html>