<?php
#INITIALISATION BDD
class PdoGsb{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=qure';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoGsb=null;


        private function __construct(){
            PdoGsb::$monPdo = new PDO(PdoGsb::$serveur.';'.PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp); 
            PdoGsb::$monPdo->query("SET CHARACTER SET utf8");
        }
        public function _destruct(){
            PdoGsb::$monPdo = null;
        }

#GET Id UTILISATEUR (patient, medecin, pharmacien)
	
	public function getIdMed($id){
		$req = "select rpps
		from utilisateur
		where status = '2'
		and utilisateur.id = '$id'";
		$rs = PdoTest::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}

	public function getIdPatient($id){
		$req= "select numSecu
		from utilisateur
		where status = '1'
		and utilisateur.id = '$id'";
		$rs = PdoTest::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
	
	public function getIdPharmacien($id){
		$req= "select id
		from utilisateur
		where status = '3'
		and utilisateur.id = '$id'";
		$rs = PdoTest::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
	
	
#GET ID (Ordonnance, Traitement) => Créer/Générer/lire un Pdf/QRCode
	
	public function getIdOrdonnance($idTraitement, $idPatient, $idMedecin){
		$req="select id
		from ordonnance
		where ordonnance.id = '$idTraitement'
		and ordonnance.idPatient = '$idPatient'
		and ordonnance.idMedecin = '$idMedecin'";
		$rs = PdoTest::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}

	public function getIdTraitement(){
		$req="select traitement.id
		from traitement
		where traitement.ordonnance_id = ordonnance.id";
		$rs = PdoTest::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
	
	

#Get Info User (id, nom, prenom)
	#medecin => RPPS
	#patient => numSecu
#on reconnait le medecin a son numero RPPS tandis que le patient possède un numero de sécurité social
	
public function getInfosMed($login, $mdp){
		$req = "select utilisateur.id as id, 
		utilisateur.nom as nom, 
		utilisateur.prenom as prenom,
		utilisateur.status from utilisateur 
		where utilisateur.RPPS='$login' and utilisateur.mdp='$mdp'";
		$rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}


public function getInfosPatient($login, $mdp){
	$req = "select utilisateur.id as id, 
	utilisateur.nom as nom, 
	utilisateur.prenom as prenom,
	utilisateur.status from utilisateur 
	where utilisateur.secuSocial='$login' and utilisateur.mdp='$mdp'";
	$rs = PdoGsb::$monPdo->query($req);
	$ligne = $rs->fetch();
	return $ligne;
}

	
public function getInfosPharmacien($login, $mdp){
	$req = "select utilisateur.id as id, 
	utilisateur.nom as nom, 
	utilisateur.prenom as prenom,
	utilisateur.status from utilisateur 
	where utilisateur.id='$login' and utilisateur.mdp='$mdp'";
	$rs = PdoGsb::$monPdo->query($req);
	$ligne = $rs->fetch();
	return $ligne;
}
	

#MODIFIER LES DONNEES
	
 public function majInfoPatient($nom, $prenom, $dateNaiss, $email, $mdp){
	$req= "update utilisateur
	SET nom = '$nom', 
	prenom = '$prenom',
	dateNaissance = '$dateNaissance',
	email = '$email',
	mdp = '$mdp'
	WHERE utilisateur.status = '1'";
	$rs = PdoGsb::$monPdo->query($req);
	$ligne = $rs->fetch();
	return $ligne;
}
	
	
public function majInfoMedecin($nom, $prenom, $dateNaiss, $email, $mdp){
	$req= "update utilisateur
	SET nom = '$nom', 
	prenom = '$prenom',
	dateNaissance = '$dateNaissance',
	email = '$email',
	mdp = '$mdp'
	WHERE utilisateur.status = '2'";
	$rs = PdoGsb::$monPdo->query($req);
	$ligne = $rs->fetch();
	return $ligne;
}	
	
	
public function majInfoPharmacien($nom, $prenom, $dateNaiss, $email, $mdp){
	$req= "update utilisateur
	SET nom = '$nom', 
	prenom = '$prenom',
	dateNaissance = '$dateNaissance',
	email = '$email',
	mdp = '$mdp'
	WHERE utilisateur.status = '3'";
	$rs = PdoGsb::$monPdo->query($req);
	$ligne = $rs->fetch();
	return $ligne;
}	
	

#GetStatus : - 	#0 => Admin
		#1 => Patient
		#2 => medecin
		#3 => pharmacien
	
public function getStatusUser(){
	$req = "select Status 
	from utilisateur";
	$rs = PdoGsb::$monPdo->query($req);
	$ligne = $rs->fetch();
return $ligne;
}

?>
