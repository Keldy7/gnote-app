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
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Diplôme Etudiant</title>
</head>

<body>
    <div class="bg-opacity">
        <style>
            body {
                background-image: url('img/inphb-background-60.png');
                background-position: center;
                background-size: 100%;
            }
        </style>
    </div>
    <div class="grid-container-1">
        <div class="grid-item-1">Ministère de l'Enseignement Supérieur <br>et de la recherche Scientifique</div>
        <div class="grid-item-2">République de Côte d'Ivoire <br>Union - Discipline - Travail
            <br><br>N° 2022A00654
        </div>
    </div>
    <div>
        <img src="img/logo.gif" alt="Logo INPHB" width="100%">
    </div>
    <div class="filiere">
        <h2>ATTESTATION</h2>
        <h2>du DIPLÔME DE TECHNICIEN SUPÉRIEUR</h2>
        <h3>(GRADE LICENCE)</h3>
        <h4>de l'Ecole Supérieure d'Industrie</h4>
    </div>
    <div class="corps">
        <br>
        <p>Nous soussigné Directeur Général de <font size=5><b>l'Institut National Polytechnique Félix HOUPHOUËT-BOIGNY (INP-HB)</b></font>
        </p>
        <p>Certifions que, vu la décision du Jury de l'Ecole Supérieure d'Industrie, en sa séance du 01/06/2022</p>
        <p><b>Monsieur <big>DA BOUTEY YANN-DAVID</big></b></p>
        <p>Matricule : <b>20INP01011,</b> Né le 03/05/2002 à Cocody</p>
        <p>a obtenu le <big><b>DIPLÔME DE TECHNICIEN SUPÉRIEUR EN SCIENCES ET TECHNOLOGIES DE L'INFORMATION DE LA COMMUNICATION
            </big></b></p>
        <p>Spécialité : <big><b>INFORMATIQUE
            </big></b></p>
    </div>
    <div class="grid-container-5">
        <div class="grid-item-1">Pour le Directeur Général<br>Le Sous-Directeur <br>de la Scolarité, de l'Accueil <br>et de l'Information</div>
        <div class="grid-item-2">Fait à Yamoussoukro le 07/06/2022 <br><br>Le Directeur des Etudes de l'ESI</div>
    </div>
    <div class="signature">
        <div><img src="" alt=""></div>
        <div><img src="img/logo et signature ks.png" alt="Signature DE"></div>
    </div>
    <div class="important">
        <h3><b> IMPORTANT :</b></h3>
        <p><i>Il n'est délivré qu'une seule attestation. En cas de besoin, l'intéressé devra lui-même établir une copie ou une photocopie qu'il fera certifié conforme à l'originale par l'INP-HB, le Maire ou le Commissaire de Police de son lieu de résidence</i></p>
    </div>
    <div class="sep-line">
        <img src="img/Ligne de séparation.png" alt="Bande noire" width="100%">
    </div>
    <div class="grid-container-2">
        <div class="grid-item-3"><b><big>EFCPC</big></b>
            <p>Ecole de Formation Continue et de Perfectionement des Cadres</b>
        </div>
        <div class="grid-item-3"><b><big>ESA</big></b>
            <p>Ecole Supérieure d'Agronomie</b>
        </div>
        <div class="grid-item-3"><b><big>ESCAE</big></b>
            <p>Ecole Supérieure de Commerce et d'Adminstration des Entreprises</b>
        </div>
        <div class="grid-item-3"><b><big>ESI</big></b>
            <p>Ecole Supérieure d'Industrie</b>
        </div>
        <div class="grid-item-3"><b><big>ESMG</big></b>
            <p>Ecole Supérieure de Mines et de Géologie</b>
        </div>
        <div class="grid-item-3"><b><big>ESTP</big></b>
            <p>Ecole Supérieure des Travaux Publics</b>
        </div>
    </div>
    <div class="grid-container-3">
        <div class="grid-item-3"><b><big>Adresse Yamoussoukro :</big></b> 1093 YAMOUSSOUKRO (R.C.I)</div>
        <div class="grid-item-3"><b><big>Adresse Abidjan :</big></b> V 79 ABIDJAN (R.C.I)</div>
        <div class="grid-item-3"><b><big>Site web :</big></b> www.inphb.ci</div>
    </div>
    <div class="grid-container-4">
        <div class="grid-item-3"><b><big>Contact :</big></b> +225 30 64 66 66 / +225 30 64 66 60</div>
        <div class="grid-item-3"><b><big>E-mail :</big></b> ploytec@inphb.ci</div>
    </div>

    
    <style type="text/css" media="print">
        body {
                background-image: url('img/inphb-background-60.png');
                background-position: center;
                background-size: 100%;
            }
    </style>

    <script>
        window.print();
    </script>
</body>

</html>