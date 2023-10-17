<?php
    // constantes d'environnement
    define("DBHOSTP", "localhost");
    define("DBUSERP", "root");
    define("DBPASSP", "Mhm2712");
    define("DBNAMEP", "mhm_patient_system");

    // Data Source Name (DSN) de connexion
    $dsn_p = "mysql:dbname=".DBNAMEP.";host=".DBHOSTP;

    // On va se connecter a la base
    try {
        // On instance PDO
        $db_p = new PDO($dsn_p, DBUSERP, DBPASSP);

        // On s'assure d'envoyer les donnes en UTF8
        $db_p->exec("SET NAMES utf8");

    }catch(PDOException $e_p){
        die("Erreur:".$e_p->getMessage());
    }

    // Data Source i query pour la verification du password
    $dbc_p = mysqli_connect(DBHOSTP, DBUSERP, DBPASSP, DBNAMEP) 
    or die('Error connecting to MySQL server');

    $mysqli_p = NEW Mysqli(DBHOSTP, DBUSERP,DBPASSP, DBNAMEP);
?>