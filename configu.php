<?php

class BeWeb
{
	public $server = "localhost:3309";
	public $username = "root";
	public $password = "";
	public $dbname = "gnote2";
	public $connectdb;
	function __construct()
	{
		// try{
		// $this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
		// // $this->connectdb = new PDO('mysql:host=localhost:3309;dbname=gnote', 'root', '');
		// }
		// catch(Exception $e){
		// 	die('Erreur : '.$e->getMessage());
		// 	}
		$this->connectdb = new mysqli($this->server, $this->username, $this->password, $this->dbname);
		if ($this->connectdb->connect_error) {
			die("connection failed");
		}
	}

	public function hackme()
	{
		$this->connectdb = new mysqli($this->server, $this->username, $this->password, $this->dbname);
		return $this->connectdb;
	}
	
	//Authentification
	public function controle_admin($username, $password)
	{
		//$mdp = md5($password);
		$req_Login = "SELECT * from admin where username='$username' AND password='$password'";
		$lancement = $this->connectdb->query($req_Login);
		// var_dump($meadmin_login_run);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function controle_de($username, $password)
	{
		//$mdp = md5($password);
		$req_Login = "SELECT * from de where LoginDE='$username' AND PaswdDE='$password'";
		$lancement = $this->connectdb->query($req_Login);
		// var_dump($meadmin_login_run);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function controle_dge($username, $password)
	{
		//$mdp = md5($password);
		$req_Login = "SELECT * from dge where LoginDGE='$username' AND PaswdDGE='$password'";
		$lancement = $this->connectdb->query($req_Login);
		// var_dump($meadmin_login_run);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function controle_inspecteur($username, $password)
	{
		//$mdp = md5($password);
		$req_Login = "SELECT * from inspecteur where LoginINSP='$username' AND PswdINSP='$password'";
		$lancement = $this->connectdb->query($req_Login);
		// var_dump($meadmin_login_run);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function controle_professeur($username, $password)
	{
		//$mdp = md5($password);
		$req_Login = "SELECT * from professeur where LoginProf='$username' AND PaswdProf='$password'";
		$lancement = $this->connectdb->query($req_Login);
		// var_dump($meadmin_login_run);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function controle_etudiant($username, $password)
	{
		//$mdp = md5($password);
		$req_Login = "SELECT * from etudiant where LoginET='$username' AND PaswdET='$password'";
		$lancement = $this->connectdb->query($req_Login);
		// var_dump($meadmin_login_run);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}

	//Afficher le nom de chacun
	public function dge_username($username)
	{
		$req_Username = "SELECT * from dge where LoginDGE='$username'";
		$lancement = $this->connectdb->query($req_Username);
		return $lancement;
	}
	public function de_username($username)
	{
		$req_Username = "SELECT * from de where LoginDE='$username'";
		$lancement = $this->connectdb->query($req_Username);
		return $lancement;
	}
	public function insp_username($username)
	{
		$req_Username = "SELECT * from inspecteur where LoginINSP='$username'";
		$lancement = $this->connectdb->query($req_Username);
		return $lancement;
	}
	public function prof_username($username)
	{
		$req_Username = "SELECT * from professeur where LoginProf='$username'";
		$lancement = $this->connectdb->query($req_Username);
		return $lancement;
	}
	public function etud_username($username)
	{
		$req_Username = "SELECT * from etudiant where LoginET='$username'";
		$lancement = $this->connectdb->query($req_Username);
		return $lancement;
	}
    //Ajouter un Directeur générale
	public function ajouter_dge($nom, $prenoms, $tel, $semail, $login, $password)
	{
		//$mdp = md5($password);
		$req_ajout_dge = "insert into dge(NomDGE,PrenomDGE,TelDGE,EmailDGE,LoginDGE,PaswdDGE) values('$nom','$prenoms','$tel','$semail','$login','$password')";
		$lancement = $this->connectdb->query($req_ajout_dge);
		return $lancement;
	}
	
	//Ajouter les personnels
	public function ajouter_prof($nom, $prenoms, $tel, $semail, $login, $password)
	{
		//$mdp = md5($password);
		$req_ajout_etudiant = "insert into professeur(NomProf,PrenomProf,TelProf,EmailProf,LoginProf,PaswdProf) values('$nom','$prenoms','$tel','$semail','$login','$password')";
		$lancement = $this->connectdb->query($req_ajout_etudiant);
		return $lancement;
	}

	//Ajouter un DE
	public function ajouter_de($nom, $prenoms, $tel, $semail, $login, $password)
	{
		//$mdp = md5($password);
		$req_ajout_dee = "insert into de(NomDE,PrenomDE,TelDE,EmailDE,LoginDE,PaswdDE) values('$nom','$prenoms','$tel','$semail','$login','$password')";
		$lancement = $this->connectdb->query($req_ajout_dee);
		return $lancement;
	}
	public function ajouter_etudiant($mat, $nom, $prenoms, $telP, $telT, $semail, $login, $password, $photo)
	{
		//$mdp = md5($password);
		$req_ajout_etudiant = "insert into etudiant(MatriculeET,NomET,PrenomET,NumeroParent,NumeroTuteur,EmailET,LoginET,PaswdET,Photo) values('$mat','$nom','$prenoms','$telP','$telT','$semail','$login','$password','$photo')";
		$lancement = $this->connectdb->query($req_ajout_etudiant);
		return $lancement;
	}
	public function ajouter_inspecteur($nom, $prenoms, $tel, $semail, $login, $password)
	{
		//$mdp = md5($password);
		$req_ajout_INSP = "insert into inspecteur(NomINSP,PrenomINSP,TelINSP,EmailINSP,LoginINSP,PswdINSP) values('$nom','$prenoms','$tel','$semail','$login','$password')";
		$lancement = $this->connectdb->query($req_ajout_INSP);
		return $lancement;
	}
	public function ajouter_fil($libelle, $ecole, $insp)
	{
		//$mdp = md5($password);
		$req_ajout_FIL = "insert into filiere(LibelleFIL,CodeEcole,CodeINSP) values('$libelle','$ecole','$insp')";
		$lancement = $this->connectdb->query($req_ajout_FIL);
		return $lancement;
	}
	public function ajouter_ecole($libelle, $localisation, $dge)
	{
		//$mdp = md5($password);
		$req_ajout_ecole = "insert into ecole(LibelleEcole,LocEcole,CodeDGE) values('$libelle','$localisation','$dge')";
		$lancement = $this->connectdb->query($req_ajout_ecole);
		return $lancement;
	}

	public function professeur()
	{
		$reqProf = "SELECT * from professeur";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	public function de()
	{
		$reqProf = "SELECT * from de";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	public function ecole()
	{
		$reqProf = "SELECT * from ecole";
		$lancement = $this->connectdb->query($reqProf);
		if (!$lancement) {
			trigger_error('Invalid query: ' . $this->connectdb->error);
		}
		else{
			return $lancement;
		}
	}
	public function etudiant()
	{
		$reqProf = "SELECT * from etudiant";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	public function inspecteur()
	{
		$reqProf = "SELECT * from inspecteur";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	public function lib_inspecteur()
	{
		$reqProf = "SELECT DISTINCT NomINSP from inspecteur";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	public function dge()
	{
		$reqDGE = "SELECT * from dge";
		$lancement = $this->connectdb->query($reqDGE);
		return $lancement;
	}

	public function dee()
	{
		$reqDE = "SELECT * from de";
		$lancement = $this->connectdb->query($reqDE);
		return $lancement;
	}

	public function insp()
	{
		$reqINSP = "SELECT * from inspecteur";
		$lancement = $this->connectdb->query($reqINSP);
		return $lancement;
	}
	public function fil()
	{
		$reqFIL = "SELECT * from filiere";
		$lancement = $this->connectdb->query($reqFIL);
		return $lancement;
	}
	public function classe()
	{
		$reqClasse = "SELECT * from classe";
		$lancement = $this->connectdb->query($reqClasse);
		return $lancement;
	}
	public function mat()
	{
		$reqMat = "SELECT * from mat";
		$lancement = $this->connectdb->query($reqMat);
		return $lancement;
	}


	//Supprimer les personnels

	public function suprimer_de($id)
	{
		$req_sup_dee = " delete from de where CodeDE='$id'";
		$lancement = $this->connectdb->query($req_sup_dee);
		return $lancement;
	}
	public function suprimer_prof($id)
	{
		$req_sup_prof = " delete from professeur where CodeProf='$id'";
		$lancement = $this->connectdb->query($req_sup_prof);
		return $lancement;
	}
	public function suprimer_etud($id)
	{
		$req_sup_prof = " delete from etudiant where CodeET='$id'";
		$lancement = $this->connectdb->query($req_sup_prof);
		return $lancement;
	}
	public function suprimer_dge($id)
	{
		$req_sup_dge = " delete from dge where CodeDGE='$id'";
		$lancement = $this->connectdb->query($req_sup_dge);
		return $lancement;
	}
	public function suprimer_inspecteur($id)
	{
		$req_sup_insp = " delete from inspecteur where CodeINSP='$id'";
		$lancement = $this->connectdb->query($req_sup_insp);
		return $lancement;
	}
	public function suprimer_ecole($id)
	{
		$req_sup_ecole = " delete from ecole where CodeEcole='$id'";
		$lancement = $this->connectdb->query($req_sup_ecole);
		return $lancement;
	}
	public function suprimer_fil($id)
	{
		$req_sup_fil = " delete from filiere where CodeFIL='$id'";
		$lancement = $this->connectdb->query($req_sup_fil);
		return $lancement;
	}

	//modifier personnel
	public function modifier_dge_id($dge_id)
	{
		$reqID = "SELECT * from dge where CodeDGE='$dge_id'";
		$lancement = $this->connectdb->query($reqID);
		return $lancement;
	}
	public function modifier_dge($nom, $prenoms, $tel, $email, $username, $password, $dge_id)
	{
		// $mdp = md5($password);
		$modifier_dge = "UPDATE dge set NomDGE='$nom',PrenomDGE='$prenoms',TelDGE='$tel',EmailDGE='$email',LoginDGE='$username',PaswdDGE ='$password' where CodeDGE='$dge_id'";
		$lancement = $this->connectdb->query($modifier_dge);
		return $lancement;
	}

	//Modifier inpecteur
	public function modifier_insp_id($insp_id)
	{
		$reqID = "SELECT * from inspecteur where CodeINSP='$insp_id'";
		$lancement = $this->connectdb->query($reqID);
		return $lancement;
	}
	public function modifier_insp($nom, $prenoms, $tel, $email, $username, $password, $insp_id)
	{
		// $mdp = md5($password);
		$modifier_insp = "UPDATE inspecteur set NomINSP='$nom',PrenomINSP='$prenoms',TelINSP='$tel',EmailINSP='$email',LoginINSP='$username',PswdINSP ='$password' where CodeINSP='$insp_id'";
		$lancement = $this->connectdb->query($modifier_insp);
		return $lancement;
	}
	//Modifier DE
	public function modifier_dee_id($dge_id)
	{
		$reqID = "SELECT * from de where CodeDE='$dge_id'";
		$lancement = $this->connectdb->query($reqID);
		return $lancement;
	}

	public function modifier_dee($nom, $prenoms, $tel, $email, $username, $password, $dee_id)
	{
		// $mdp = md5($password);
		$modifier_dee = "UPDATE de set NomDE='$nom',PrenomDE='$prenoms',TelDE='$tel',EmailDE='$email',LoginDE='$username',PaswdDE ='$password' where CodeDE='$dee_id'";
		$lancement = $this->connectdb->query($modifier_dee);
		return $lancement;
	}
	public function modifier_prof_id($prof_id)
	{
		$reqID = "SELECT * from professeur where CodeProf='$prof_id'";
		$lancement = $this->connectdb->query($reqID);
		return $lancement;
	}
	public function modifier_etud_id($prof_id)
	{
		$reqID = "SELECT * from etudiant where CodeET='$prof_id'";
		$lancement = $this->connectdb->query($reqID);
		return $lancement;
	}
	public function modifier_prof($nom, $prenoms, $tel, $email, $username, $password, $prof_id)
	{
		// $mdp = md5($password);
		$modifier_prof = "UPDATE professeur set NomProf='$nom',PrenomProf='$prenoms',TelProf='$tel',EmailProf='$email',LoginProf='$username',PaswdProf ='$password' where CodeProf='$prof_id'";
		$lancement = $this->connectdb->query($modifier_prof);
		return $lancement;
	}
	public function modifier_note_id($id_note)
	{
		$reqID = "SELECT * from note where CodeNTE='$id_note'";
		$lancement = $this->connectdb->query($reqID);
		return $lancement;
	}
	public function modifier_note($note, $id_note)
	{
		// $mdp = md5($password);
		$modifier_prof = "UPDATE note set ValeurNTE='$note' where CodeNTE='$id_note'";
		$lancement = $this->connectdb->query($modifier_prof);
		return $lancement;
	}

	public function modifier_ecole_id($id_ecole)
	{
		$reqID = "SELECT * from ecole where CodeEcole='$id_ecole'";
		$lancement = $this->connectdb->query($reqID);
		return $lancement;
	}
	public function modifier_ecole($libelle, $localisation, $CodeDGE, $id_ecole)
	{
		// $mdp = md5($password);
		$modifier_prof = "UPDATE ecole set LibelleEcole='$libelle', LocEcole='$localisation', CodeDGE='$CodeDGE' where CodeEcole='$id_ecole'";
		$lancement = $this->connectdb->query($modifier_prof);
		return $lancement;
	}

	public function modifier_fil_id($id_fil)
	{
		$reqID = "SELECT * from filiere where CodeFIL='$id_fil'";
		$lancement = $this->connectdb->query($reqID);
		return $lancement;
	}
	public function modifier_fil($libelle, $CodeEcole, $CodeINSP, $id_fil)
	{
		// $mdp = md5($password);
		$modifier_fil = "UPDATE filiere set LibelleFIL='$libelle', CodeEcole='$CodeEcole', CodeINSP='$CodeINSP' where CodeFIL='$id_fil'";
		$lancement = $this->connectdb->query($modifier_fil);
		return $lancement;
	}

	public function recupId($emailINSP)
	{
		$req = "select CodeINSP from inspecteur where EmailINSP='$emailINSP'";
		$lancement = $this->connectdb->query($req);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	
	public function recupEmail($emailINSP)
	{
		$req = "select EmailET from etudiant where CodeET='$emailINSP'";
		$lancement = $this->connectdb->query($req);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function recupIDET($emailINSP)
	{
		$req = "select CodeET from etudiant where EmailET='$emailINSP'";
		$lancement = $this->connectdb->query($req);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function msg_etu_insp($message, $mailINSP, $idEtud)
	{

		$req = "insert into messageinsp(DescMsg, CodeINSP, CodeET) VALUES ('$message', '$mailINSP', '$idEtud')";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}
	public function msg_insp_etud($message,$DebutM,$idEtud, $mailINSP){

		$req = "insert into reponse(DescMsg,CodeMsgINSP, CodeET, CodeINSP) VALUES ('$message','$DebutM','$idEtud','$mailINSP')";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}
	public function recup_lib_dge($id){
		$req="SELECT NomDGE, PrenomDGE FROM dge WHERE CodeDGE='$id'";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}
	public function recup_lib_ecole($id){
		$req="SELECT LibelleEcole FROM ecole WHERE CodeEcole='$id'";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}
	public function recup_lib_insp($id){
		$req="SELECT NomINSP, PrenomINSP FROM inspecteur WHERE CodeINSP='$id'";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}

	public function recup_mat_prof($id){
		$req="SELECT * FROM matiere WHERE CodeProf='$id'";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}
	public function notification()
	{

		$req = "SELECT COUNT(CodeMsgINSP) from messageinsp";
		$lancement = $this->connectdb->query($req);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function notificationEtu()
	{

		$req = "SELECT COUNT(CodeMsgET) from reponse";
		$lancement = $this->connectdb->query($req);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function LeMessager()
	{
		$req = "SELECT M.CodeMsgINSP, E.CodeET, E.MatriculeET, CONCAT(E.NomET,' ',E.PrenomET),E.EmailET,M.DescMsg FROM messageinsp M, etudiant E WHERE E.CodeET = M.CodeET";
		$lancement = $this->connectdb->query($req);

		return $lancement;
	}
	public function LeMessagerEtud()
	{
		
		$req = "SELECT I.CodeINSP, R.DescMsg, I.EmailINSP,CONCAT(I.NomINSP,' ',I.PrenomINSP) FROM reponse R, inspecteur I WHERE R.CodeINSP = I.CodeINSP  ORDER BY R.DescMsg DESC";
		$lancement = $this->connectdb->query($req);

		return $lancement;
	}

	public function LeMessagerInfo()
	{
		$req = "SELECT E.EmailET,M.DescMsg FROM messageinsp M, etudiant E WHERE E.CodeET = M.CodeET";
		$lancement = $this->connectdb->query($req);

		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	// public function recupId_Etud($emailINSP){
	// 		$req= "select CodeET from etudiant where EmailET='$emailINSP'";
	// 		$lancement = $this->connectdb->query($req);
	// 		if ($lancement) {
	// 			$resultat = $lancement->num_rows;
	// 			return $resultat;
	// 		}
	// 	}
	

	public function repondre_etut_id($prof_id)
	{
		$reqID = "SELECT * from messageinsp where CodeMsgINSP='$prof_id'";
		$lancement = $this->connectdb->query($reqID);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function repondre_Etut($aude, $insp_id)
	{

		$req = "UPDATE messageinsp set reponseMsg='$aude' where CodeMsgINSP='$insp_id'";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}
	public function recherche_note($id)
	{

		$req = "SELECT N.CodeNTE,CONCAT(E.NomET,' ',E.PrenomET),N.ValeurNTE,N.CoefficientNTE,N.CodeSMSTRE FROM etudiant E,note N WHERE E.MatriculeET = N.MatriculeET and E.MatriculeET LIKE '%$id%' ";
		$lancement = $this->connectdb->query($req);
		return $lancement;

		/*if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}*/
	}


}

$info2 = new Beweb;
