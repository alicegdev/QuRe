<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/.php");
		break;
	}
	case '' :{
		include("controleurs/.php");
		break;
	}
	case '' :{
		include("controleurs/.php");
		break; 
	}
	case '' : {
		include("controleurs/.php");
		break;
	}
	case '' : {
		include("controleurs/.php");
		break;
	}
}
include("vues/v_pied.php") ;
?>