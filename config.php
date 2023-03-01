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
	public function etud_username($username)
	{
		$req_Username = "SELECT * from etudiant where LoginET='$username'";
		$lancement = $this->connectdb->query($req_Username);
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
	public function ajouter_de($nom, $prenoms, $tel, $semail, $login, $password)
	{
		//$mdp = md5($password);
		$req_ajout_etudiant = "insert into de(NomDE,PrenomDE,TelDE,EmailDE,LoginDE,PaswdDE) values('$nom','$prenoms','$tel','$semail','$login','$password')";
		$lancement = $this->connectdb->query($req_ajout_etudiant);
		return $lancement;
	}
	public function ajouter_etudiant($mat, $nom, $prenoms, $telP, $telT, $semail, $login, $password, $photo,$CodeCLS)
	{
		//$mdp = md5($password);
		$req_ajout_etudiant = "insert into etudiant(MatriculeET,NomET,PrenomET,NumeroParent,NumeroTuteur,EmailET,LoginET,PaswdET,Photo,CodeCLS) values('$mat','$nom','$prenoms','$telP','$telT','$semail','$login','$password','$photo','$CodeCLS')";
		$lancement = $this->connectdb->query($req_ajout_etudiant);
		return $lancement;
	}
	public function ajouter_inspecteur($nom, $prenoms, $tel, $semail, $login, $password)
	{
		//$mdp = md5($password);
		$req_ajout_etudiant = "insert into inspecteur(NomINSP,PrenomINSP,TelINSP,EmailINSP,LoginINSP,PswdINSP) values('$nom','$prenoms','$tel','$semail','$login','$password')";
		$lancement = $this->connectdb->query($req_ajout_etudiant);
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
	public function etudiant()
	{
		$reqProf = "SELECT e.CodeET,e.MatriculeET,e.NomET,e.PrenomET,e.EmailET,c.LibelleCLS,f.LibelleFIL,e.Photo FROM etudiant e,classe c,filiere f WHERE e.CodeCLS = c.CodeCLS and f.CodeFIL = c.CodeFIL";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	public function etudiantClasse($mat)
	{
		$reqProf = "SELECT e.CodeET,e.MatriculeET,e.NomET,e.PrenomET,e.EmailET,c.LibelleCLS,f.LibelleFIL,e.Photo FROM etudiant e,classe c ,filiere f WHERE e.CodeCLS = c.CodeCLS and f.CodeFIL = c.CodeFIL and c.CodeCLS = '$mat'";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	public function classe()
	{
		$reqProf = "SELECT distinct LibelleCLS from classe";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	public function classe1()
	{
		$reqProf = "SELECT distinct CodeCLS, LibelleCLS from classe";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	public function classe2()
	{
		$reqProf = "SELECT distinct CodeFIL, LibelleFIL from filiere";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	public function filiere()
	{
		$reqProf = "SELECT distinct LibelleFIL from filiere";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function inspecteur()
	{
		$reqProf = "SELECT * from inspecteur";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	//Supprimer les personnels

	public function suprimer_de($id)
	{
		$req_sup_prof = " delete from de where CodeDE='$id'";
		$lancement = $this->connectdb->query($req_sup_prof);
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
	public function suprimer_inspecteur($id)
	{
		$req_sup_prof = " delete from inspecteur where CodeINSP='$id'";
		$lancement = $this->connectdb->query($req_sup_prof);
		return $lancement;
	}

	//modifier personnel
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
		// COUNT(CodeMsgET)
		$req = "SELECT * from reponse";
		$lancement = $this->connectdb->query($req);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function LeMessager()
	{
		$req = "SELECT M.CodeMsgINSP, E.CodeET, E.MatriculeET, CONCAT(E.NomET,' ',E.PrenomET),E.EmailET,M.DescMsg FROM messageinsp M, etudiant E WHERE E.CodeET = M.CodeET ORDER BY E.CodeET DESC";
		$lancement = $this->connectdb->query($req);

		return $lancement;
	}
	public function LeMessagerDE()
	{
		$req = "SELECT M.CodeINSP, D.CodeDE, CONCAT(D.NomDE,' ',D.PrenomDE),D.EmailDE,M.DescMsg FROM messagede M, de D WHERE D.CodeDE = M.CodeDE";
		$lancement = $this->connectdb->query($req);

		return $lancement;
	}
	
	public function LeMessagerEtud()
	{
		
		$req = "SELECT I.CodeINSP, R.DescMsg, I.EmailINSP,CONCAT(I.NomINSP,' ',I.PrenomINSP) FROM reponse R, inspecteur I WHERE R.CodeINSP = I.CodeINSP  ORDER BY I.CodeINSP DESC";
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

		$req = "SELECT N.CodeNTE,CONCAT(E.NomET,' ',E.PrenomET),N.ValeurNTE,N.CoefficientNTE,N.CodeSMSTRE,C.LibelleCLS FROM etudiant E,note N,classe C WHERE E.MatriculeET = N.MatriculeET and E.MatriculeET  and E.CodeCLS = C.CodeCLS and  E.MatriculeET LIKE '%$id%'";
		$lancement = $this->connectdb->query($req);
		return $lancement;

		/*if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}*/
	}
	public function recherche_note_classe($id)
	{

		$req = "SELECT N.CodeNTE,CONCAT(E.NomET,' ',E.PrenomET),N.ValeurNTE, N.CoefficientNTE,C.LibelleCLS FROM etudiant E,note N,classe C WHERE E.MatriculeET = N.MatriculeET and E.MatriculeET and E.CodeCLS = C.CodeCLS and C.CodeCLS LIKE '%$id%'";
		$lancement = $this->connectdb->query($req);
		return $lancement;

		/*if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}*/
	}
	public function recherche_classe($cls)
	{

		$req = "SELECT N.CodeNTE,CONCAT(E.NomET,' ',E.PrenomET),N.ValeurNTE,N.CoefficientNTE,N.CodeSMSTRE FROM etudiant E,note N WHERE E.CodeCLS = N.CodeCLS and E.CodeCLS LIKE '%$cls%' ";
		$lancement = $this->connectdb->query($req);
		return $lancement;

		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function abandonner()
	{

		$req = "SELECT  A.MatriculeET, CONCAT(E.NomET,' ',E.PrenomET), E.EmailET, E.Photo FROM etudiant E, abondonner A WHERE E.MatriculeET = A.MatriculeET";
		$lancement = $this->connectdb->query($req);
		return $lancement;

		/*if ($lancement){
			$resultat = $lancement->num_rows;
			return $resultat;
		}*/
	}
	public function recupIdINSP($emailINSP)
	{
		$req = "select CodeINSP from inspecteur where EmailINSP='$emailINSP'";
		$lancement = $this->connectdb->query($req);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}
	public function recupEmailINSP($emailINSP)
	{
		$req = "select EmailDE from etudiant where CodeDE='$emailINSP'";
		$lancement = $this->connectdb->query($req);
		if ($lancement) {
			$resultat = $lancement->num_rows;
			return $resultat;
		}
	}

	public function msg_de_insp($message, $mailINSP, $idEtud)
	{

		$req = "insert into messagede(DescMsg, CodeINSP, CodeDE) VALUES ('$message', '$mailINSP', '$idEtud')";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}
	public function compter_etudiant()
	{
		$etudiant_info_sel = "SELECT * from etudiant";
		$lancement = $this->connectdb->query($etudiant_info_sel);
		
		return $lancement;
	}
		
	public function modifie_note_classe($id)
	{
		$req = "SELECT  C.LibelleCLS FROM filiere F, classe C WHERE F.CodeFIL = C.CodeFIL AND C.CodeFIL = '$id'";
		$lancement = $this->connectdb->query($req);


		return $lancement;
	}
	public function ajouter_ecole($libelle, $localisation, $dge)
	{
		//$mdp = md5($password);
		$req_ajout_ecole = "insert into ecole(LibelleEcole,LocEcole,CodeDGE) values('$libelle','$localisation','$dge')";
		$lancement = $this->connectdb->query($req_ajout_ecole);
		return $lancement;
	}
	public function ajouter_fil($libelle, $ecole, $insp)
	{
		//$mdp = md5($password);
		$req_ajout_FIL = "insert into filiere(LibelleFIL,CodeEcole,CodeINSP) values('$libelle','$ecole','$insp')";
		$lancement = $this->connectdb->query($req_ajout_FIL);
		return $lancement;
	}
	public function dee()
	{
		$reqDE = "SELECT * from de";
		$lancement = $this->connectdb->query($reqDE);
		return $lancement;
	}

	//KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO 
	//AJOUTER
	public function ajouter_classe($libelle, $codeFiliere)
	{
		//$mdp = md5($password);
		$req_ajout_etudiant = "insert into classe(libelleCLS, codeFIL) values('$libelle','$codeFiliere')";
		$lancement = $this->connectdb->query($req_ajout_etudiant);
		return $lancement;
	}

	public function ajouter_UE($libelle, $coefficient)
	{
		//$mdp = md5($password);
		$req_ajout_etudiant = "insert into UE(DescriptionUE, CoefficientUE) values('$libelle','$coefficient')";
		$lancement = $this->connectdb->query($req_ajout_etudiant);
		return $lancement;
	}

	public function ajouter_matiere($libelle, $coefficient, $volumeHoraire, $codeUE, $semestre)
	{
		//$mdp = md5($password);
		$req_ajout_etudiant = "insert into matiere(LibelleMAT, CoeffMAT, VolumeMAT, CodeUE, codeSMTRE) values('$libelle','$coefficient', '$volumeHoraire', '$codeUE', '$semestre')";
		$lancement = $this->connectdb->query($req_ajout_etudiant);
		return $lancement;
	}

	public function ajouter_profAMatiere($codeProf, $codeMat)
	{
		$req_ajout_etudiant = "insert into enseigner(CodeProf, CodeMAT) values('$codeProf','$codeMat')";
		$lancement = $this->connectdb->query($req_ajout_etudiant);
		return $lancement;
	}

	//ATTRIBUER
	public function attribuer_profAClasse($codeMat, $codeCls)
	{
		$req_ajout_etudiant = "insert into apprendre(CodeMAT, CodeCLS ) values('$codeMat','$codeCls')";
		$lancement = $this->connectdb->query($req_ajout_etudiant);
		return $lancement;
	}

	public function attribuer_etuAClasse($codeET, $codeCLS)
	{
		$req = "UPDATE etudiant set CodeCLS='$codeCLS' where CodeET='$codeET'";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}

	//AFFICHER
	public function afficher_classe()
	{
		$reqProf = "SELECT * from Classe, Filiere, Ecole, DGE WHERE Classe.codeFIL= Filiere.codeFIL AND Filiere.codeEcole = Ecole.codeEcole AND Ecole.codeDGE = DGE.codeDGE ";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function afficher_matiere()
	{
		$reqProf = "SELECT * from Matiere, Semestre, UE WHERE Matiere.codeSMTRE= Semestre.codeSMTRE AND Matiere.codeUE = UE.codeUE Order by descriptionUE ASC";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function afficher_UE()
	{
		$reqProf = "SELECT * from UE Order by descriptionUE ASC";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function afficher_UE_matiere($codeUE)
	{
		$reqProf = "SELECT * from UE, matiere, Semestre WHERE UE.codeUE= Matiere.codeUE AND Semestre.codeSMTRE= Matiere.codeSMTRE AND UE.codeUE= '$codeUE' Order by LibelleMAT ASC";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function afficher_prof_classe($codeProf)
	{
		$reqProf = "SELECT * from classe, matiere, Semestre, apprendre, professeur, enseigner , filiere, ecole
					WHERE  professeur.CodeProf = enseigner.CodeProf AND enseigner.CodeMAT =matiere.codeMAT 
					AND apprendre.codeMAT= Matiere.codeMAT AND apprendre.CodeCLS = classe.CodeCLS 
					AND Semestre.codeSMTRE= Matiere.codeSMTRE AND professeur.CodeProf= '$codeProf' 
					GROUP BY LibelleCLS Order by LibelleCLS ASC";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function afficher_prof_classe_matiere($codeClasse, $codeProf)
	{
		$reqProf = "SELECT * from classe, matiere, Semestre, apprendre, professeur, enseigner , filiere, ecole, UE
					WHERE  professeur.CodeProf = enseigner.CodeProf AND enseigner.CodeMAT =matiere.codeMAT 
					AND apprendre.codeMAT= Matiere.codeMAT AND apprendre.CodeCLS = classe.CodeCLS 
					AND Semestre.codeSMTRE= Matiere.codeSMTRE AND UE.codeUE= matiere.codeUE AND professeur.codeProf = '$codeProf' AND classe.CodeCLS= '$codeClasse' 
					GROUP BY LibelleCLS Order by LibelleMAT ASC";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function afficher_prof_matiere($codeProf)
	{
		$reqProf = "SELECT * from UE, Matiere, Semestre, Professeur, Enseigner 
				WHERE Professeur.codeProf= Enseigner.codeProf AND Enseigner.codeMAT= Matiere.codeMAT 
				AND Semestre.codeSMTRE= Matiere.codeSMTRE AND UE.codeUE= Matiere.codeUE AND Professeur.codeProf= '$codeProf' 
				Order by LibelleMAT ASC";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function afficher_etu_matiere($codeET, $codeCLS)
	{
		$reqProf = "SELECT * from UE, Matiere, Semestre, Classe, Apprendre, Etudiant
				WHERE Semestre.codeSMTRE= Matiere.codeSMTRE AND UE.codeUE= Matiere.codeUE 
				AND Matiere.codeMAT = Apprendre.codeMAT
				AND Apprendre.codeCLS = Classe.codeCLS
				AND Classe.codeCLS = Etudiant.codeCLS
				AND Etudiant.CodeCLS= '$codeCLS' 
                AND etudiant.CodeET ='$codeET'
				Order by LibelleMAT ASC ";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	//REMPLIR
	public function remplirListeUE()
	{
		$reqProf = "SELECT CodeUE, DescriptionUE from UE";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function remplirListeClasse()
	{
		$reqProf = "SELECT CodeCLS, LibelleCLS from Classe Order by LibelleCLS asc";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function remplirListeMatiere()
	{
		$reqProf = "SELECT CodeMAT, LibelleMAT from Matiere Order by LibelleMAT asc";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function remplirListeMatiereProf($codeProf)
	{
		$reqProf = "SELECT LibelleMAT, Professeur.codeProf, Enseigner.codeProf, Enseigner.codeMAT, Matiere.codeMAT  
		from Matiere, Professeur, Enseigner 
		WHERE Professeur.codeProf = Enseigner.codeProf AND Enseigner.codeMAT = Matiere.codeMAT AND Professeur.codeProf='$codeProf' Order by LibelleMAT asc";

		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	//RECUPERER
	public function recupererCodeProf($loginProf)
	{
		$reqProf = "SELECT codeProf from Professeur WHERE LoginProf = '$loginProf'";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function recupererCodeMat($libelleMAT)
	{
		$reqProf = "SELECT codeMAT from Matiere WHERE libelleMAT ='$libelleMAT'";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function recupererCodeEtu($matricule)
	{
		$reqProf = "SELECT codeET from Etudiant WHERE matriculeET ='$matricule'";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function recupererCodeClasse($LibelleCLS)
	{
		$reqProf = "SELECT codeCLS from Classe WHERE LibelleCLS ='$LibelleCLS'";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function recupererSemestreMat($codeMAT)
	{
		$reqProf = "SELECT Matiere.codeSMTRE as semCode, Semestre.codeSMTRE, LibelleSMTRE from Semestre, Matiere WHERE Matiere.codeSMTRE= Semestre.codeSMTRE AND codeMAT = '$codeMAT'";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function recupererClasseMat($codeMAT)
	{
		$reqProf = "SELECT Matiere.codeMAT , Apprendre.codeMAT, Classe.codeCLS as classCode, LibelleCLS from Apprendre, Matiere, Classe WHERE Matiere.codeMAT= Apprendre.codeMAT AND Apprendre.codeCLS= Classe.codeCLS AND Matiere.codeMAT = '$codeMAT'";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	//FIN KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO 
	

	//KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO 
	public function recuperer_nombreNote($codeET, $codeMAT)
	{
		$req = "SELECT count(CodeNTE) as nbNote from note where codeET='$codeET' AND codeMAT='$codeMAT'";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}

	public function recuperer_moyenneEtu($codeET, $codeMAT)
	{
		$req = "SELECT ( SUM(ValeurNTE * CoefficientNTE)/SUM(CoefficientNTE) ) as moyenne from note where codeET='$codeET' and codeMAT= '$codeMAT'";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}

	public function recuperer_libelleSem($codeSMTRE)
	{
		$reqProf = "SELECT CodeSMTRE, LibelleSMTRE from Semestre WHERE CodeSMTRE= '$codeSMTRE'";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}

	public function afficher_etut_matiereNote($codeET, $codeMAT)
	{
		$req = "SELECT * from note where codeET='$codeET' and codeMAT='$codeMAT'";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}

	public function afficher_etut_note($codeNTE)
	{
		$req = "SELECT * from note where codeNTE='$codeNTE'";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}

	public function suprimer_noteEtu($id)
	{
		$req_sup_prof = " DELETE from note where CodeNTE='$id'";
		$lancement = $this->connectdb->query($req_sup_prof);
		return $lancement;
	}

	public function modifier_etut_note($codeNTE, $descr, $note, $coef)
	{
		// $mdp = md5($password);
		$modifier_prof = "UPDATE note set ValeurNTE='$note', DescriptionNTE='$descr', CoefficientNTE='$coef' where CodeNTE='$codeNTE'";
		$lancement = $this->connectdb->query($modifier_prof);
		return $lancement;
	}

	//FIN KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO KOMBO 
	
	//AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE 
	public function prof_username($username)
	{
		$req_Username = "SELECT * from professeur where LoginProf='$username'";
		$lancement = $this->connectdb->query($req_Username);
		return $lancement;
	}

	//Ahébé
	public function recup_etud_classe($codeCLS)
	{
		$req = "SELECT * from etudiant WHERE CodeCLS= '$codeCLS'";
		$lancement = $this->connectdb->query($req);
		return $lancement;
	}

	public function ajouter_note($descr, $note, $coef, $matri, $codet, $codemat)
	{
		//$mdp = md5($password);
		$req_ajout_etudiant = "INSERT into note(DescriptionNTE,ValeurNTE,CoefficientNTE,MatriculeET,CodeET, CodeMAT) 
			values('$descr','$note','$coef','$matri', '$codet', '$codemat')";
			
		$lancement = $this->connectdb->query($req_ajout_etudiant);
		return $lancement;
	}
	
	
	public function classe_filiere($codefil)
	{
		$reqProf = "SELECT CodeCLS, LibelleCLS from classe where CodeFIL='$codefil'";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	public function matieres_smtre($codesmtre)
	{
		$reqProf = "SELECT CodeMAT, LibelleMAT from matiere where CodeSMTRE='$codesmtre'";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	public function semestre_classe()
	{
		$reqsmstre = "SELECT * from semestre";
		$lancement = $this->connectdb->query($reqsmstre);
		return $lancement;
	}
	
	public function filiere_ecole()
	{
		$reqProf = "SELECT CodeFIL, LibelleFIL from filiere";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	//AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE AHEBE 

	//FRANCKI
	public function etudiant_EIT()
	{
		$reqProf = "SELECT e.CodeET,e.MatriculeET,e.NomET,e.PrenomET,e.EmailET,c.LibelleCLS,f.LibelleFIL,e.Photo FROM etudiant e,classe c,filiere f WHERE e.CodeCLS = c.CodeCLS and f.CodeFIL = c.CodeFIL and c.CodeCLS = 1";
		$lancement = $this->connectdb->query($reqProf);
		return $lancement;
	}
	//FRANCKI
	
}

$info2 = new Beweb;
