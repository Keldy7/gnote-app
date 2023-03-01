<?php 
if ($para=="etcl") 
{
	
	$dCodeET=$etud_info['CodeET'];
	$dCodeMAT =$_GET['codeMAT'];
	$dMatri=$etud_info['MatriculeET'];
	$dCodeCLS=$etud_info['CodeCLS'];

	echo 'codeET='.$dCodeET .' &amp;codeMAT='. $dCodeMAT.' &amp;matri=' .$dMatri.'&amp;codeCLS='.$dCodeCLS; 
}
else if($para=="location")
{
	$dCodeET  = $_GET['codeET'];
	$dCodeMAT = $_GET['codeMAT'];
	$dMatri   = $_GET['matri'];
	$dCodeCLS = $_GET['codeCLS'];
	?>
	<script>window.location = 'etut-note.php?codeET= <?=$dCodeET?>&codeMAT=<?= $dCodeMAT ?>&matri=<?= $dMatri ?>&codeCLS=<?= $dCodeCLS ?>';</script>
<?php }
else
{
	$dCodeET  = $_GET['codeET'];
	$dCodeMAT = $_GET['codeMAT'];
	$dMatri   = $_GET['matri'];
	$dCodeCLS = $_GET['codeCLS'];

	echo 'codeET='.$dCodeET .' &amp;codeMAT='. $dCodeMAT.' &amp;matri=' .$dMatri.'&amp;codeCLS='.$dCodeCLS; 
}