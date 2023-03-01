<?php 
include "../config.php";
session_start();
if (!$_SESSION['dge']) {
  header("location:loginadmin.php");
}
 $id = $_GET['Id'];
$True = $info2->suprimer_de($id);
if($True==true)
{
	echo "<script>window.location = 'de-information.php';</script>";
	
}
else
{
	echo "<script>window.location='de-information.php';</script>";
}
?>