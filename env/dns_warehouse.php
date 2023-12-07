<?php
    // constantes d'environnement
    define("DBHOST", "169.254.160.2");
    define("DBUSER", "warehouse");
    define("DBPASS", "mhm_wh");
    define("DBNAME", "mhm_db");

    // Data Source Name (DSN) de connexion
    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

    // On va se connecter a la base
    try {
        // On instance PDO
        $db = new PDO($dsn, DBUSER, DBPASS);

        // On s'assure d'envoyer les donnes en UTF8
        $db->exec("SET NAMES utf8");

    }catch(PDOException $e){
        die("Erreur:".$e->getMessage());
    }

    // Data Source i query pour la verification du password
    $dbc = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) 
    or die('Error connecting to MySQL server');

    $mysqli = NEW Mysqli(DBHOST, DBUSER,DBPASS, DBNAME);
?>