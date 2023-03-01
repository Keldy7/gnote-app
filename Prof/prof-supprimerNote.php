<?php 
include "../config.php";
session_start();
if (!$_SESSION['prof']) {
	header("location:../index.php");
	
}
else
{
	if (isset($_GET['codeET']) && isset($_GET['codeMAT'])) {
		if ($_GET['codeET'] != "" && $_GET['codeMAT'] != "") {

			//echo "<script>alert('avant');</script>";
			$codeet=$_GET['codeET'];
			$codemat=$_GET['codeMAT'];
			$matri=$_GET['matri'];

			$para="location";
			require('etut-note-donneesGET.php');
  		// header("location:etut-note.php?codeET=$codeet&codeMAT=$codemat&matri=$matri");
			$id = $_GET['Id'];
			$True = $info2->suprimer_noteEtu($id); 
		}
		else
		{
			 echo "<script>alert('Donnée corrompu');</script>";
			 header("location:index.php");
		}
	}
	else
	{
    echo "<script>alert('Donnée inexistante');</script>";
  	header("location:index.php");
	}

}