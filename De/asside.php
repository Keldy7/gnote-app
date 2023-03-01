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
                            <a href="prof-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Information</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="prof-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
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
                            <a href="insp-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Information</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="insp-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ajouter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="message.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Communiquer</p>
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
                            <a href="etut-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Information</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="etut-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ajouter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="test.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bulettin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="modifie-note.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modifie note</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="etut-dix.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Note inferieur à 10</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="etut-note.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modification</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="rechercheClasse.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Recherche par classe</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="valider.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ayant valider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="abandon.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ayant Abandonner</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Etudiant -->
                <!-- KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO  -->
                    <!-- Classe -->
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color:orangered;font-weight:bold">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Classe
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="classe-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Information</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="classe-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ajouter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="classe-attributionEtuClass.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Attriber un étudiant</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="classe-attributionProfClass.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Attriber un professeur</p>
                            </a>
                        </li>
                    </ul>
                </li>
                    <!-- /Classe-->

                        <!-- Matière -->
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color:orangered;font-weight:bold">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Matière
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="mat-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Information</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="mat-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Création de matière</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="mat-attributionProf.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Attriber un professeur</p>
                            </a>
                        </li>
                    </ul>
                </li>
                    <!-- /Matière-->

                    <!-- UE -->
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color:orangered;font-weight:bold">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            UE
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="ue-information.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Information</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="ue-ajouter.php" class="nav-link" style="color:rgb(18, 219, 18);font-weight:bold">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Création d'UE</p>
                            </a>
                        </li>
                    </ul>
                </li>
                    <!-- /UE-->
                <!-- KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO  -->

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
                                    <a href="GDiplomat/Edition/planches/index.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-edit nav-icon"></i>
                                        <p>Edition De Planches</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="GDiplomat/Edition/diplomes/index.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
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
                                    <a href="GDiplomat/Liste/list_diplome.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
                                        <i class="far fa-list-alt nav-icon"></i>
                                        <p>Liste Des Diplômés</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="GDiplomat/Liste/list_non_diplome.php" class="nav-link" style="margin-left:20px;color:rgb(18, 219, 18);font-weight:bold">
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