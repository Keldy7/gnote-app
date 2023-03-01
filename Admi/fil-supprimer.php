<?php 
include "../configu.php";
// session_start();
// if (!$_SESSION['de']) {
//   header("location:../prof.php");
// }
$id = $_GET['Id'];
$True = $info2->suprimer_fil($id);
if($True==true)
{
	echo "<script>window.location = 'fil-information.php';</script>";
	
}
else
{
	echo "<script>window.location='fil-information.php';</script>";
}
?>