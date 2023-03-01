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
    <title>GDiplomat | Planche De Diplomation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../../dist/css/adminlte.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <div class="row">
                <div class="col-12">
                    <div class="invoice p-3 mb-3 planche">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="4">Ecole</th>
                                    <th scope="col" colspan="7">Bilan Du Semestre 5</th>
                                    <th scope="col" colspan="5">Bilan de la Scolarité</th>
                                    <th scope="col" colspan="4">Semestre 6</th>
                                    <th scope="col" colspan="1" rowspan="2" class="vert" style="writing-mode: vertical-rl;text-orientation:sideways;">Proposition du conseil de classe</th>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="4">
                                        Année Académique : 2020-2021<br>
                                        Parcours : Science et Technologie de l'Information et de la Communication(STIC)<br>
                                        Cycle : Technicien Supérieur<br>
                                        Classe : Informatique 3ème année (INFO3)<br>
                                        Semestre : 5 & 6
                                    </th>

                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Moyenne Semestrielle</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Heure d'absence totales</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Heure d'absence non justifiées</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Moyenne Semestrielle Corrigée</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Rang Semestriel</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Proposition du conseil de classe</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Observations</p></th>
                                
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Moyenne 1ère Année</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Moyenne 2ème Année</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Moyenne 3ème Année</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Moyenne de Scolarité</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Rang Annuel</p></th>
                                    
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Stage 1A Découverte</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Stage 2A Application</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Projet de Fin d'Etudes</p></th>
                                    <th colspan="1" style="writing-mode: vertical-rl;text-orientation:sideways;"><p>Moyenne Semestrielle</p></th>
                                    
                                </tr>
                                <tr>
                                    <th colspan="1"></th>
                                    <th colspan="1">Matricule</th>
                                    <th colspan="1">Nom</th>
                                    <th colspan="1">Sexe</th>

                                    <th colspan="1">30,00</th>
                                    <th colspan="1"></th>
                                    <th colspan="1">0,02</th>
                                    <th colspan="1">30,00</th>
                                    <th colspan="1"></th>
                                    <th colspan="1"></th>
                                    <th colspan="1"></th>

                                    <th colspan="1">4</th>
                                    <th colspan="1">3</th>
                                    <th colspan="1">2</th>
                                    <th colspan="1">9</th>
                                    <th colspan="1"></th>
                                    
                                    <th colspan="1">V/NV</th>
                                    <th colspan="1">5,00</th>
                                    <th colspan="1">25,00</th>
                                    <th colspan="1">30,00</th>

                                    <th colspan="1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="1"></td>
                                    <td colspan="1">18INP00123</td>
                                    <td colspan="1">Kouassi Aya</td>
                                    <td colspan="1">F</td>

                                    <td colspan="1">14,00</td>
                                    <td colspan="1">2</td>
                                    <td colspan="1">1</td>
                                    <td colspan="1">13,98</td>
                                    <td colspan="1">3</td>
                                    <td colspan="1">VAL</td>
                                    <td colspan="1"></td>

                                    <td colspan="1">13</td>
                                    <td colspan="1">14</td>
                                    <td colspan="1">13</td>
                                    <td colspan="1">13,75</td>
                                    <td colspan="1">5</td>
                                    
                                    <td colspan="1">V</td>
                                    <td colspan="1">12</td>
                                    <td colspan="1">14</td>
                                    <td colspan="1">13</td>

                                    <td colspan="1">DIP</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <style type="text/css" media="print">
        @page { 
            size: A4 landscape;
        }
        th {
            writing-mode: vertical-rl;text-orientation:mixed;
        }
    </style>
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>

</body>

</html>