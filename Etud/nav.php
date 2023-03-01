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
            <a class="nav-link" href="VueMSG.php">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge"><?php echo $not ?></span>
            </a>
        </li>

        <li class="nav-item">
            <a href="deconnecter.php">
                <input type="button" value="Deconnexion" class="btn btn-danger">
            </a>
        </li>
    </ul>
</nav>