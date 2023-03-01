<?php 
include "../config.php";
session_start();
if (!$_SESSION['de']) {
  header("location:../index.php");
}
 $id = $_GET['Id'];
$True = $info2->suprimer_inspecteur($id);
if($True==true)
{
	echo "<script>window.location = 'insp-information.php';</script>";
	
}
else
{
	echo "<script>window.location='insp-information.php';</script>";
}
?>