<?php 
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idUser = $_SESSION['id'];
$idPatient = $pdo->getIdPatient();
$idMedecin = $pdo->getIdMed();

switch($action) {
    case 'genererOrdonnance':{
        $medicament = $_REQUEST['medic']; #medicament
        $quantite = $_REQUEST['quantite']; #quantite de medicament
        $frequence = $_REQUEST['frequence']; #frequence de prise de medcament => 2*/j
        $echelleTemps = $_REQUEST['echelleTemps']; #jours, semaine ....
        $commedic = $_REQUEST['commedic']; #Commentaire Medicament (du traitement) => condition d'utilisation
        $comglobal = $_REQUEST['comglobal']; #Commentaire global de l'ordonnane
        $test1 = $pdo->setOrdonnance($_POST['comglobal'], $_POST['datefin']);
        include("ordonnance.php");
        include("v_erreurs.php");
    }

    case 'affichageOrdonnancePdf':{
        $medicament = $_REQUEST['medic']; #medicament
        $quantite = $_REQUEST['quantite']; #quantite de medicament
        $frequence = $_REQUEST['frequence']; #frequence de prise de medcament => 2*/j
        $echelleTemps = $_REQUEST['echelleTemps']; #jours, semaine ....
        $commedic = $_REQUEST['commedic']; #Commentaire Medicament (du traitement) => condition d'utilisation
        $comglobal = $_REQUEST['comglobal']; #Commentaire global de l'ordonnane
        $idTraitement=$pdo->getIdTraitement();
        $idOrdonnance=$pdo->getIdOrdonnance($idTraitement, $idPatient, $idMedecin);
        include("ordonnance.php");
        include("ordonnance.php");

    }
}
?>
