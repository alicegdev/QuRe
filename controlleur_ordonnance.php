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
        $idTraitement=$pdo->getIdTraitement();
        $idOrdonnance=$pdo->getIdOrdonnance($idTraitement, $idPatient, $idMedecin);
        include("ordonnance.php");

    }
}
?>
