<?php 
include "../config.php";
session_start();
if (!$_SESSION['de']) {
  header("location:../prof.php");
}
 $id = $_GET['Id'];
$True = $info2->suprimer_prof($id);
if($True==true)
{
	echo "<script>window.location = 'prof-information.php';</script>";
	
}
else
{
	echo "<script>window.location='prof-information.php';</script>";
}
?>