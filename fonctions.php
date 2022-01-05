<?php

class PdoTest{
    private static $server = 'mysql:host=localhost';
    private static $bdd = 'dbname=mydb';
    private static $user = 'root';
    private static $mdp = 'admin';
        private static $monPdo;
        private static $monPdoTest=null;
    


    private function __construct(){
    PdoTest::$monPdo = new PDO(PdoTest::$server.';'.PdoTest::$bdd, PdoTest::$user, PdoTest::$mdp);
        PdoTest::$monPdo->query("SET CHARACTER SET utf8");
    }

    Public function _destruct(){
        PdoTest::$monPdo = null;
    }

    public static function getPdoTest(){
        if(PdoTest::$monPdoTest==null){
            PdoTest::$monPdoTest = new PdoTest();
        }
        return PdoTest::$monPdoTest;
    }



    public function inscription($nom, $prenom, $dateNaiss, $email, $mdp, $statut){
        $req = "INSERT INTO utilisateur (nom, prenom, statut, NumSecu, rpps, email, mdp, dateNaiss) VALUES ('$nom', '$prenom', '$statut', null, null, '$email', '$mdp', '$dateNaiss')";
        $rs = PdoTest::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }

    public function connexion($email, $mdp){
        $req = "SELECT * FROM utilisateur WHERE email='$email' AND mdp='$mdp'";
        $rs = PdoTest::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }

    public function getInfoUtilisateur($id){
        $req = "SELECT * FROM utilisateur WHERE id='$id'";
        $rs = PdoTest::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }

    public function setInfoUtilisateur($nom, $prenom, $email, $mdp){
        $req = "UPDATE utilisateur (nom, prenom, email, mdp) VALUES ('$nom', '$prenom', '$email', '$mdp')";
        $rs = PdoTest::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }

}

?>