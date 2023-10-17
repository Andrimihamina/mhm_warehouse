<?php
      require_once("../../../../../php/dns/connect.php");
     /*
     ============== POUR LE NAME DE CONSUMABLE MEDICAL========================================
     */
    $cons_med_sess = $_SESSION["cons_med"]["id_code_cons_med"];

    if($cons_med_sess !=""){
        $sql_affiche_cons_med= "SELECT * FROM `cons_med_id` WHERE `id_code_cons_med` = '$cons_med_sess'";

        //On excute directement la requete
        $requete_affiche_cons_med  = $db->query($sql_affiche_cons_med);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_name = $requete_affiche_cons_med ->fetchall();

    }else{
     $affiche_name = "NULL";
    }

     /*
     ============== USED FOR========================================
     */
    $id_cons_med = $affiche_name[0]["id"];

    if($cons_med_sess !=""){
        $sql_affiche_cons_med_used_for= "SELECT * FROM `cons_med_used` WHERE `id_cons_med` = '$id_cons_med'";

        //On excute directement la requete
        $requete_affiche_cons_med_used_for = $db->query($sql_affiche_cons_med_used_for);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_used_for = $requete_affiche_cons_med_used_for ->fetchAll();
 
    }else{
     $affiche_used_for = "NULL";
    }
    
    /*
     ============== LOCATION ========================================
     */

    if($cons_med_sess !=""){
        $sql_affiche_cons_med_location = "SELECT * FROM `cons_med_location` WHERE `id_cons_med` = '$id_cons_med'";

        //On excute directement la requete
        $requete_affiche_cons_med_location = $db->query($sql_affiche_cons_med_location);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_location = $requete_affiche_cons_med_location ->fetchAll();
 
    }else{
     $affiche_location = "NULL";
    }
    /*
     ============== PRICE ========================================
     */
    if($cons_med_sess !=""){
        $sql_affiche_cons_med_price = "SELECT * FROM `cons_med_price` WHERE `id_cons_med` = '$id_cons_med'";

        //On excute directement la requete
        $requete_affiche_cons_med_price = $db->query($sql_affiche_cons_med_price);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_price = $requete_affiche_cons_med_price ->fetchAll();
 
    }else{
     $affiche_price = "NULL";
    }
    /*
     ============== QUANTITY ========================================
     */

    if($cons_med_sess !=""){
        $sql_affiche_cons_med_quantity = "SELECT * FROM `cons_med_quantity` WHERE `id_cons_med` = '$id_cons_med'";

        //On excute directement la requete
        $requete_affiche_cons_med_quantity = $db->query($sql_affiche_cons_med_quantity);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_quantity = $requete_affiche_cons_med_quantity->fetchAll();
 
    }else{
     $affiche_quantity = "NULL";
    }
?>