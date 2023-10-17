<?php
      require_once("../../../../../php/dns/connect.php");
     /*
     ============== POUR LE NAME DE CONSUMABLE MEDICAL========================================
     */
    $mat_itc_sess = $_SESSION["mat_itc"]["id_code_mat_itc"];

    if($mat_itc_sess !=""){
        $sql_affiche_mat_itc= "SELECT * FROM `mat_itc_id` WHERE `id_code_mat_itc` = '$mat_itc_sess'";

        //On excute directement la requete
        $requete_affiche_mat_itc  = $db->query($sql_affiche_mat_itc);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_name = $requete_affiche_mat_itc ->fetchall();

    }else{
     $affiche_name = "NULL";
    }

     /*
     ============== USED FOR========================================
     */
    $id_mat_itc = $affiche_name[0]["id"];

    if($mat_itc_sess !=""){
        $sql_affiche_mat_itc_used_for= "SELECT * FROM `mat_itc_used` WHERE `id_mat_itc` = '$id_mat_itc'";

        //On excute directement la requete
        $requete_affiche_mat_itc_used_for = $db->query($sql_affiche_mat_itc_used_for);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_used_for = $requete_affiche_mat_itc_used_for ->fetchAll();
 
    }else{
     $affiche_used_for = "NULL";
    }
    
    /*
     ============== LOCATION ========================================
     */

    if($mat_itc_sess !=""){
        $sql_affiche_mat_itc_location = "SELECT * FROM `mat_itc_location` WHERE `id_mat_itc` = '$id_mat_itc'";

        //On excute directement la requete
        $requete_affiche_mat_itc_location = $db->query($sql_affiche_mat_itc_location);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_location = $requete_affiche_mat_itc_location ->fetchAll();
 
    }else{
     $affiche_location = "NULL";
    }
    /*
     ============== PRICE ========================================
     */
    if($mat_itc_sess !=""){
        $sql_affiche_mat_itc_price = "SELECT * FROM `mat_itc_price` WHERE `id_mat_itc` = '$id_mat_itc'";

        //On excute directement la requete
        $requete_affiche_mat_itc_price = $db->query($sql_affiche_mat_itc_price);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_price = $requete_affiche_mat_itc_price ->fetchAll();
 
    }else{
     $affiche_price = "NULL";
    }
    /*
     ============== QUANTITY ========================================
     */

    if($mat_itc_sess !=""){
        $sql_affiche_mat_itc_quantity = "SELECT * FROM `mat_itc_quantity` WHERE `id_mat_itc` = '$id_mat_itc'";

        //On excute directement la requete
        $requete_affiche_mat_itc_quantity = $db->query($sql_affiche_mat_itc_quantity);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_quantity = $requete_affiche_mat_itc_quantity->fetchAll();
 
    }else{
     $affiche_quantity = "NULL";
    }
?>