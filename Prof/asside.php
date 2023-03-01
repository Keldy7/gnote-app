<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:white;color:orangered">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="../dist/img/gnote.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                <a href="#" class="d-block" style="color:orangered;font-weight:bold"><?php echo $info_PROF['NomProf'] . ' ' . $info_PROF['PrenomProf']; ?></a>
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
                   
                <!-- Etudiant -->
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color:orangered;font-weight:bold">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Mes classes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <?php
                        $iaffiche_prof_class=   $info2->afficher_prof_classe($info_PROF['CodeProf']);
                        if($iaffiche_prof_class->num_rows>0){
                            while($class_info =$iaffiche_prof_class->fetch_assoc()){ ?> 
                                <li class="nav-item">
                                    <a href="pageMatieres.php?CodeCLS=<?php echo $class_info['CodeCLS'] ?>&CodeProf=<?php echo $info_PROF['CodeProf'] ?>" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p><?php echo $class_info['LibelleCLS'] ?></p>
                                    </a>
                                </li>
                        <?php }} ?>     
                    </ul>
                </li>
                <!-- Etudiant -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>