<?php 
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idUser = $_SESSION['id'];
$idPatient = $pdo->getIdPatient();
$idMedecin = $pdo->getIdMed();

switch($action) {
    case 'genererOrdonnance':{
        $test1 = $pdo->setOrdonnance($_POST['comglobal'], $_POST['datefin']);
        include("ordonnance.php");
        include("v_erreurs.php");
    }

    case 'affichageOrdonnancePdf':{
        $idOrdonnance=$pdo->getIdOrdonnance();
        $idTraitement=$pdo->getIdTraitement();
        $afficherOrdonnance=afficherOrdonnance($idOrdonnance, $idPatient, $idMedecin);
        include("ordonnance.php");

    }
}
?>