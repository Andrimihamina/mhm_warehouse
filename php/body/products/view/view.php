<?php
      require_once("../../../../../php/dns/connect.php");
     /*
     ============== POUR LE NAME DE MEDECINE========================================
     */
    $med_sess = $_SESSION["medicine"]["medicine_id"];

    if($med_sess !=""){
        $sql_affiche_med = "SELECT * FROM `medicine_id` WHERE `id` = $med_sess";

        //On excute directement la requete
        $requete_affiche_med  = $db->query($sql_affiche_med);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_name = $requete_affiche_med ->fetchAll();

    }else{
     $affiche_name = "NULL";
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
        $affiche_used_for = $requete_affiche_med_classification ->fetchAll();
 
    }else{
     $affiche_used_for = "NULL";
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
        $affiche_location = $requete_affiche_med_location ->fetchAll();
 
    }else{
     $affiche_location = "NULL";
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
        $affiche_price = $requete_affiche_med_price ->fetchAll();

     }else{
     $affiche_price = "NULL";
    }
    /*
     ============== QUTNTITY ========================================
     */
    $med_sess = $_SESSION["medicine"]["medicine_id"];

    if($med_sess !=""){
        $sql_affiche_med_quantity = "SELECT * FROM `medicine_quantity` WHERE `id_med` = $med_sess";

        //On excute directement la requete
        $requete_affiche_med_quantity = $db->query($sql_affiche_med_quantity);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_quantity = $requete_affiche_med_quantity ->fetchAll();
 
    }else{
     $affiche_quantity = "NULL";
    }
?>