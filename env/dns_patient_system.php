<?php
    // constantes d'environnement
    define("DBHOST_p", "169.254.160.2");
    define("DBUSER_p", "warehouse");
    define("DBPASS_p", "mhm_wh");
    define("DBNAME_p", "mhm_patient_system");

    // Data Source Name (DSN) de connexion
    $dsn_p = "mysql:dbname=".DBNAME_p.";host=".DBHOST_p;

    // On va se connecter a la base
    try {
        // On instance PDO
        $db_p = new PDO($dsn_p, DBUSER_p, DBPASS_p);

        // On s'assure d'envoyer les donnes en UTF8
        $db_p->exec("SET NAMES utf8");

    }catch(PDOException $e_p){
        die("Erreur:".$e_p->getMessage());
    }

    // Data Source i query pour la verification du password
    $dbc_p = mysqli_connect(DBHOST_p, DBUSER_p, DBPASS_p, DBNAME_p) 
    or die('Error connecting to MySQL server');

    $mysqli_p = NEW Mysqli(DBHOST_p, DBUSER_p,DBPASS_p, DBNAME_p);
?>