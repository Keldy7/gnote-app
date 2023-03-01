<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GDiplomat | Messagerie</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60" />
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

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
                                <img src="../dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle" />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3" />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3" />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
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
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../index.php" class="brand-link">
                <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: 0.8" />
                <span class="brand-text font-weight-light">GDiplomat</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search" />
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>Messagerie</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Edition
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../Edition/planches/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edition Des Planches</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Edition/diplomes/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edition Des Diplômes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Liste
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../Liste/list_planche.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Liste Des Planches</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Liste/list_diplome.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Liste Des Diplômés</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Liste/list_non_diplome.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Liste Des Non Diplômés</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Message</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Message</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-orange card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="index.php" class="btn bg-orange btn-block mb-3">Boîte De Réception</a>
                                </h3>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool" title="Previous"><i
                                            class="fas fa-chevron-left"></i></a>
                                    <a href="#" class="btn btn-tool" title="Next"><i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5>Message Subject Is Placed Here</h5>
                                    <h6>From: support@adminlte.io
                                        <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span>
                                    </h6>
                                </div>
                                <!-- /.mailbox-read-info -->
                                <div class="mailbox-read-message">
                                    <p>Hello John,</p>

                                    <p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie
                                        chillwave put a bird
                                        on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan
                                        scenester mlkshk. Ethical
                                        master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table
                                        mlkshk fanny pack
                                        gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester
                                        chillwave 3 wolf moon
                                        asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt
                                        migas church-key tofu
                                        blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck
                                        selfies narwhal American
                                        Apparel.</p>

                                    <p>Raw denim McSweeney's bicycle rights, iPhone trust fund quinoa Neutra VHS kale
                                        chips vegan PBR&amp;B
                                        literally Thundercats +1. Forage tilde four dollar toast, banjo health goth
                                        paleo butcher. Four dollar
                                        toast Brooklyn pour-over American Apparel sustainable, lumbersexual listicle
                                        gluten-free health goth
                                        umami hoodie. Synth Echo Park bicycle rights DIY farm-to-table, retro kogi
                                        sriracha dreamcatcher PBR&amp;B
                                        flannel hashtag irony Wes Anderson. Lumbersexual Williamsburg Helvetica next
                                        level. Cold-pressed
                                        slow-carb pop-up normcore Thundercats Portland, cardigan literally meditation
                                        lumbersexual crucifix.
                                        Wayfarers raw denim paleo Bushwick, keytar Helvetica scenester keffiyeh 8-bit
                                        irony mumblecore
                                        whatever viral Truffaut.</p>

                                    <p>Post-ironic shabby chic VHS, Marfa keytar flannel lomo try-hard keffiyeh cray.
                                        Actually fap fanny
                                        pack yr artisan trust fund. High Life dreamcatcher church-key gentrify. Tumblr
                                        stumptown four dollar
                                        toast vinyl, cold-pressed try-hard blog authentic keffiyeh Helvetica lo-fi tilde
                                        Intelligentsia. Lomo
                                        locavore salvia bespoke, twee fixie paleo cliche brunch Schlitz blog McSweeney's
                                        messenger bag swag
                                        slow-carb. Odd Future photo booth pork belly, you probably haven't heard of them
                                        actually tofu ennui
                                        keffiyeh lo-fi Truffaut health goth. Narwhal sustainable retro disrupt.</p>

                                    <p>Skateboard artisan letterpress before they sold out High Life messenger bag.
                                        Bitters chambray
                                        leggings listicle, drinking vinegar chillwave synth. Fanny pack hoodie American
                                        Apparel twee. American
                                        Apparel PBR listicle, salvia aesthetic occupy sustainable Neutra kogi. Organic
                                        synth Tumblr viral
                                        plaid, shabby chic single-origin coffee Etsy 3 wolf moon slow-carb Schlitz roof
                                        party tousled squid
                                        vinyl. Readymade next level literally trust fund. Distillery master cleanse
                                        migas, Vice sriracha
                                        flannel chambray chia cronut.</p>

                                    <p>Thanks,<br>Jane</p>
                                </div>
                                <!-- /.mailbox-read-message -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer bg-white">
                                <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                                    <li>
                                        <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>

                                        <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i>
                                                Sep2014-report.pdf</a>
                                            <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>1,245 KB</span>
                                                <a href="#" class="btn btn-default btn-sm float-right"><i
                                                        class="fas fa-cloud-download-alt"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="mailbox-attachment-icon"><i class="far fa-file-word"></i></span>

                                        <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i>
                                                App Description.docx</a>
                                            <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>1,245 KB</span>
                                                <a href="#" class="btn btn-default btn-sm float-right"><i
                                                        class="fas fa-cloud-download-alt"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="mailbox-attachment-icon has-img"><img
                                                src="../../dist/img/photo1.png" alt="Attachment"></span>

                                        <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                                photo1.png</a>
                                            <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>2.67 MB</span>
                                                <a href="#" class="btn btn-default btn-sm float-right"><i
                                                        class="fas fa-cloud-download-alt"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="mailbox-attachment-icon has-img"><img
                                                src="../../dist/img/photo2.png" alt="Attachment"></span>

                                        <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                                photo2.png</a>
                                            <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>1.9 MB</span>
                                                <a href="#" class="btn btn-default btn-sm float-right"><i
                                                        class="fas fa-cloud-download-alt"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-footer -->
                            <div class="card-footer">
                                <div class="float-right">
                                    <a href="edit.php">
                                        <button type="button" class="btn btn-default"><i class="fas fa-reply"></i>
                                            Reply
                                        </button>
                                    </a>
                                </div>
                                <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i>
                                    Delete</button>
                                <button type="button" onclick="imprimer()" class="btn btn-default"><i class="fas fa-print"></i>
                                    Print</button>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021
                <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
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
        $.widget.bridge("uibutton", $.ui.button);
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

    <script>
        function imprimer(){
            window.print();
        }
    </script>
</body>

</html>