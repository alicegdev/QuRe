<?php
$status = $pdo->getStatusUser();

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$email = $_REQUEST['email'];
		$mdp = $_REQUEST['password'];
		$utilisateur = $pdo->getInfosUtilisateur($email,$mdp);
		if(!is_array( $utilisateur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		
		}

		#Admin
		elseif(){
			$status = 0;
			$id = $utilisateur['id'];
			$nom =  $utilisateur['nom'];
			$prenom = $utilisateur['prenom'];
			$IsAdmin = $utilisateur['Admin'];
			connecter($id,$nom,$prenom, $IsAdmin);
			include("vues/v_sommaire.php");
			include("vues/v_Bienvenue.php");
		}
		break;

		#Medecin
		elseif(){
			$status = 2;
			$id = $utilisateur['id'];
			$nom =  $utilisateur['nom'];
			$prenom = $utilisateur['prenom'];
			$IsMedecin = $utilisateur['medecin'];
			connecter($id,$nom,$prenom, $IsMedecin);
			include("vues/v_sommaire.php");
			include("vues/v_Bienvenue.php");
		}
		break;

		#pharmacien
		else{
			$status = 3;
			$id = $utilisateur['id'];
			$nom =  $utilisateur['nom'];
			$prenom = $utilisateur['prenom'];
			$IsPharmacien = $utilisateur['pharmacien'];
			connecter($id,$nom,$prenom, $IsPharmacien);
			include("vues/v_sommaire.php");
			include("vues/v_Bienvenue.php");
		}
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>
