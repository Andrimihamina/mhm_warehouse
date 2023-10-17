<?php
      require_once "../../../../../php/dns/connect.php";
     /*
     ============== POUR LE NAME DE MEDECINE========================================
     */
    $med_sess = $_SESSION["medicine"]["medicine_id"];

    if($med_sess !=""){
        $sql_affiche_med = "SELECT * FROM `medicine_id` WHERE `id_med` = $med_sess";

        //On excute directement la requete
        $requete_affiche_med  = $db->query($sql_affiche_med);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_med = $requete_affiche_med ->fetchAll();

        /*
        ================ POUR LE MED APPLCATION ===================
        */
        $sql_affiche_med_application = "SELECT * FROM `medicine_application` WHERE `id_med` = $med_sess";

        //On excute directement la requete
        $requete_affiche_med_application  = $db->query($sql_affiche_med_application);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_med_application = $requete_affiche_med_application ->fetchAll();
    }else{
     $affiche_med_application = "NULL";
    }

     /*
     ============== CLASSIFCATION========================================
     */
    $med_sess = $_SESSION["medicine"]["medicine_id"];

    if($med_sess !=""){
        $sql_affiche_med_classification = "SELECT * FROM `medicine_classification` WHERE `id_med` = $med_sess";

        //On excute directement la requete
        $requete_affiche_med_classification = $db->query($sql_affiche_med_classification);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_med_classification = $requete_affiche_med_classification ->fetchAll();
 
    }else{
     $affiche_med_classification = "NULL";
    }
    
    /*
     ============== LOCATION ========================================
     */
    $med_sess = $_SESSION["medicine"]["medicine_id"];

    if($med_sess !=""){
        $sql_affiche_med_location = "SELECT * FROM `medicine_location` WHERE `id_med` = $med_sess";

        //On excute directement la requete
        $requete_affiche_med_location = $db->query($sql_affiche_med_location);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_med_location = $requete_affiche_med_location ->fetchAll();
 
    }else{
     $affiche_med_location = "NULL";
    }
    /*
     ============== PRICE ========================================
     */
    $med_sess = $_SESSION["medicine"]["medicine_id"];

    if($med_sess !=""){
        $sql_affiche_med_price = "SELECT * FROM `medicine_price` WHERE `id_med` = $med_sess";

        //On excute directement la requete
        $requete_affiche_med_price = $db->query($sql_affiche_med_price);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_med_price = $requete_affiche_med_price ->fetchAll();
 
    }else{
     $affiche_med_price = "NULL";
    }
    /*
     ============== QUANTITY ========================================
     */
    $med_sess = $_SESSION["medicine"]["medicine_id"];

    if($med_sess !=""){
        $sql_affiche_med_quantity = "SELECT * FROM `medicine_quantity` WHERE `id_med` = $med_sess";

        //On excute directement la requete
        $requete_affiche_med_quantity = $db->query($sql_affiche_med_quantity);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_med_quantity = $requete_affiche_med_quantity ->fetchAll();
 
    }else{
     $affiche_med_quantity = "NULL";
    }
?>