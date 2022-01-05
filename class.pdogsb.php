<?php

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

#GET INFO UTILISATEUR (patient, medecin, pharmacien)
	
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
	
public function getStatusUser(){
	$req = "select Status 
	from utilisateur";
	$rs = PdoGsb::$monPdo->query($req);
	$ligne = $rs->fetch();
return $ligne;
}

?>
