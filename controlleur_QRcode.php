<?php 
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idUser = $_SESSION['id'];
$idPatient = $pdo->getIdPatient($idUser);
$idMedecin = $pdo->getIdMed($idUser);


switch($action) {
    case 'scan':{
        $Medicament = $_REQUEST['medic']; #medicament
        $Quantite = $_REQUEST['quantite']; #quantite de medicament
        $frequence = $_REQUEST['frequence']; #frequence de prise de medcament => 2*/j
        $echelleTemps = $_REQUEST['echelleTemps']; #jours, semaine ....
        $commedic = $_REQUEST['commedic']; #Commentaire Medicament (du traitement) => condition d'utilisation
        $comglobal = $_REQUEST['comglobal']; #Commentaire global de l'ordonnane
        
        include("scan-vid2.html");
        include("ordonnance.php");
        include("v_erreurs.php");
    }

    case 'affichage':{
        $Medicament = $_REQUEST['medic']; #medicament
        $Quantite = $_REQUEST['quantite']; #quantite de medicament
        $frequence = $_REQUEST['frequence']; #frequence de prise de medcament => 2*/j
        $echelleTemps = $_REQUEST['echelleTemps']; #jours, semaine ....
        $commedic = $_REQUEST['commedic']; #Commentaire Medicament (du traitement) => condition d'utilisation
        $comglobal = $_REQUEST['comglobal']; #Commentaire global de l'ordonnane
        $idPharmacien = $pdo->getIdPharmacien($idUser);
        $idOrdonnance=$pdo->getIdOrdonnance($idPatient);
        include("scan-vid2.html");
        include("ordonnanceGenere.php");

    }
}
?>