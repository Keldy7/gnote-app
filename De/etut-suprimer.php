<?php 
include "../config.php";
session_start();
if (!$_SESSION['de']) {
  header("location:../prof.php");
}
 $id = $_GET['Id'];
$True = $info2->suprimer_etud($id);
if($True==true)
{
	echo "<script>window.location = 'etut-information.php';</script>";
	
}
else
{
	echo "<script>window.location='etut-information.php';</script>";
}
?>