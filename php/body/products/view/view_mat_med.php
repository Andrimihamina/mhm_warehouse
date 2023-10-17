<?php
      require_once("../../../../../php/dns/connect.php");
     /*
     ============== POUR LE NAME DE CONSUMABLE MEDICAL========================================
     */
    $mat_med_sess = $_SESSION["mat_med"]["id_code_mat_med"];

    if($mat_med_sess !=""){
        $sql_affiche_mat_med= "SELECT * FROM `mat_med_id` WHERE `id_code_mat_med` = '$mat_med_sess'";

        //On excute directement la requete
        $requete_affiche_mat_med  = $db->query($sql_affiche_mat_med);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_name = $requete_affiche_mat_med ->fetchall();

    }else{
     $affiche_name = "NULL";
    }

     /*
     ============== USED FOR========================================
     */
    $id_mat_med = $affiche_name[0]["id"];

    if($mat_med_sess !=""){
        $sql_affiche_mat_med_used_for= "SELECT * FROM `mat_med_used` WHERE `id_mat_med` = '$id_mat_med'";

        //On excute directement la requete
        $requete_affiche_mat_med_used_for = $db->query($sql_affiche_mat_med_used_for);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_used_for = $requete_affiche_mat_med_used_for ->fetchAll();
 
    }else{
     $affiche_used_for = "NULL";
    }
    
    /*
     ============== LOCATION ========================================
     */

    if($mat_med_sess !=""){
        $sql_affiche_mat_med_location = "SELECT * FROM `mat_med_location` WHERE `id_mat_med` = '$id_mat_med'";

        //On excute directement la requete
        $requete_affiche_mat_med_location = $db->query($sql_affiche_mat_med_location);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_location = $requete_affiche_mat_med_location ->fetchAll();
 
    }else{
     $affiche_location = "NULL";
    }
    /*
     ============== PRICE ========================================
     */
    if($mat_med_sess !=""){
        $sql_affiche_mat_med_price = "SELECT * FROM `mat_med_price` WHERE `id_mat_med` = '$id_mat_med'";

        //On excute directement la requete
        $requete_affiche_mat_med_price = $db->query($sql_affiche_mat_med_price);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_price = $requete_affiche_mat_med_price ->fetchAll();
 
    }else{
     $affiche_price = "NULL";
    }
    /*
     ============== QUANTITY ========================================
     */

    if($mat_med_sess !=""){
        $sql_affiche_mat_med_quantity = "SELECT * FROM `mat_med_quantity` WHERE `id_mat_med` = '$id_mat_med'";

        //On excute directement la requete
        $requete_affiche_mat_med_quantity = $db->query($sql_affiche_mat_med_quantity);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_quantity = $requete_affiche_mat_med_quantity->fetchAll();
 
    }else{
     $affiche_quantity = "NULL";
    }
?>