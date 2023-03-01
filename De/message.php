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

if (isset($_POST['envoyer'])){
    $id = $nomDE_vue['CodeDE'];
     
    $message = $_POST['message'];

    $insp_trouv = $info2->recupIdINSP($_POST['mailINSP']);
   

    if ($insp_trouv == true) {
         $envoyer = $info2->msg_de_insp($message, $insp_trouv, $id);
         if ($envoyer == true){
             echo "<script>alert('message envoyé')</script>";

         }
        
     } else {
        echo "<script>alert('mail non trouvé')</script>";
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
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-image:url('../dist/img/inp.png');background-repeat:no-repeat;height:80px;width:auto;background-position:center">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../index.php" class="nav-link" style="color:red;font-weight:bold">Home</a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->


        <!-- Messages Dropdown Menu -->
        
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" href="vueMSG.php">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge"></span>
            </a>
        </li>

        <li class="nav-item">
            <a href="deconnecter.php">
                <input type="button" value="Deconnexion" class="btn btn-danger">
            </a>
        </li>
    </ul>
</nav>

        <!-- /.navbar -->
        <!-- asside -->
        <?php include("asside.php") ?>

        <!-- /asside -->
        <br><br>
        <div class="content-wrapper">
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Composer un nouveau message</font>
                            </font>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <input class="form-control" placeholder="À:" name="mailINSP" type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Matière:">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="compose-textarea" class="form-control" style="height: 300px;">
                                </textarea>
                                <!-- <div class="note-editor note-frame card">
                                    <!-- <div class="note-dropzone">
                                        <div class="note-dropzone-message"></div>
                                    </div> 

                                    <div class="note-editing-area">
                                        <div class="note-handle">
                                            <div class="note-control-selection" style="display: none;">
                                                <div class="note-control-selection-bg"></div>
                                                <div class="note-control-holder note-control-nw"></div>
                                                <div class="note-control-holder note-control-ne"></div>
                                                <div class="note-control-holder note-control-sw"></div>
                                                <div class="note-control-sizing note-control-se"></div>
                                                <div class="note-control-selection-info"></div>
                                            </div>
                                        <!-- </div><textarea  class="note-codable" aria-multiline="true">

                                        </textarea> 
                                        <div class="note-editable card-block"  contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true">


                                        </div>
                                    </div><output class="note-status-output" role="status" aria-live="polite"></output>
                                    <div class="note-statusbar" role="status">
                                        <div class="note-resizebar" aria-label="Redimensionner">
                                            <div class="note-icon-bar"></div>
                                            <div class="note-icon-bar"></div>
                                            <div class="note-icon-bar"></div>
                                        </div>
                                    </div>

                                </div> -->
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="float-right">

                                <button type="submit" name="envoyer" class="btn btn-primary"><i class="far fa-envelope"></i>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Envoyer</font>
                                    </font>
                                </button>
                            </div>
                            <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Vider</font>
                                </font>
                            </button>
                        </div>
                    </form>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
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