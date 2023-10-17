<?php
      require_once("../../../../../php/dns/connect.php");
     /*
     ============== POUR LE NAME DE CONSUMABLE MEDICAL========================================
     */
    $cons_itc_sess = $_SESSION["cons_itc"]["id_code_cons_itc"];

    if($cons_itc_sess !=""){
        $sql_affiche_cons_itc= "SELECT * FROM `cons_itc_id` WHERE `id_code_cons_itc` = '$cons_itc_sess'";

        //On excute directement la requete
        $requete_affiche_cons_itc  = $db->query($sql_affiche_cons_itc);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_name = $requete_affiche_cons_itc ->fetchall();

    }else{
     $affiche_name = "NULL";
    }

     /*
     ============== USED FOR========================================
     */
    $id_cons_itc = $affiche_name[0]["id"];

    if($cons_itc_sess !=""){
        $sql_affiche_cons_itc_used_for= "SELECT * FROM `cons_itc_used` WHERE `id_cons_itc` = '$id_cons_itc'";

        //On excute directement la requete
        $requete_affiche_cons_itc_used_for = $db->query($sql_affiche_cons_itc_used_for);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_used_for = $requete_affiche_cons_itc_used_for ->fetchAll();
 
    }else{
     $affiche_used_for = "NULL";
    }
    
    /*
     ============== LOCATION ========================================
     */

    if($cons_itc_sess !=""){
        $sql_affiche_cons_itc_location = "SELECT * FROM `cons_itc_location` WHERE `id_cons_itc` = '$id_cons_itc'";

        //On excute directement la requete
        $requete_affiche_cons_itc_location = $db->query($sql_affiche_cons_itc_location);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_location = $requete_affiche_cons_itc_location ->fetchAll();
 
    }else{
     $affiche_location = "NULL";
    }
    /*
     ============== PRICE ========================================
     */
    if($cons_itc_sess !=""){
        $sql_affiche_cons_itc_price = "SELECT * FROM `cons_itc_price` WHERE `id_cons_itc` = '$id_cons_itc'";

        //On excute directement la requete
        $requete_affiche_cons_itc_price = $db->query($sql_affiche_cons_itc_price);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_price = $requete_affiche_cons_itc_price ->fetchAll();
 
    }else{
     $affiche_price = "NULL";
    }
    /*
     ============== QUANTITY ========================================
     */

    if($cons_itc_sess !=""){
        $sql_affiche_cons_itc_quantity = "SELECT * FROM `cons_itc_quantity` WHERE `id_cons_itc` = '$id_cons_itc'";

        //On excute directement la requete
        $requete_affiche_cons_itc_quantity = $db->query($sql_affiche_cons_itc_quantity);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_quantity = $requete_affiche_cons_itc_quantity->fetchAll();
 
    }else{
     $affiche_quantity = "NULL";
    }
?>