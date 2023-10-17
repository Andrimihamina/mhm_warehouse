<?php
      require_once("../../../../../php/dns/connect.php");
     /*
     ============== POUR LE NAME DE CONSUMABLE MEDICAL========================================
     */
    $mat_log_sess = $_SESSION["mat_log"]["id_code_mat_log"];

    if($mat_log_sess !=""){
        $sql_affiche_mat_log= "SELECT * FROM `mat_log_id` WHERE `id_code_mat_log` = '$mat_log_sess'";

        //On excute directement la requete
        $requete_affiche_mat_log  = $db->query($sql_affiche_mat_log);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_name = $requete_affiche_mat_log ->fetchall();

    }else{
     $affiche_name = "NULL";
    }

     /*
     ============== USED FOR========================================
     */
    $id_mat_log = $affiche_name[0]["id"];

    if($mat_log_sess !=""){
        $sql_affiche_mat_log_used_for= "SELECT * FROM `mat_log_used` WHERE `id_mat_log` = '$id_mat_log'";

        //On excute directement la requete
        $requete_affiche_mat_log_used_for = $db->query($sql_affiche_mat_log_used_for);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_used_for = $requete_affiche_mat_log_used_for ->fetchAll();
 
    }else{
     $affiche_used_for = "NULL";
    }
    
    /*
     ============== LOCATION ========================================
     */

    if($mat_log_sess !=""){
        $sql_affiche_mat_log_location = "SELECT * FROM `mat_log_location` WHERE `id_mat_log` = '$id_mat_log'";

        //On excute directement la requete
        $requete_affiche_mat_log_location = $db->query($sql_affiche_mat_log_location);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_location = $requete_affiche_mat_log_location ->fetchAll();
 
    }else{
     $affiche_location = "NULL";
    }
    /*
     ============== PRICE ========================================
     */
    if($mat_log_sess !=""){
        $sql_affiche_mat_log_price = "SELECT * FROM `mat_log_price` WHERE `id_mat_log` = '$id_mat_log'";

        //On excute directement la requete
        $requete_affiche_mat_log_price = $db->query($sql_affiche_mat_log_price);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_price = $requete_affiche_mat_log_price ->fetchAll();
 
    }else{
     $affiche_price = "NULL";
    }
    /*
     ============== QUANTITY ========================================
     */

    if($mat_log_sess !=""){
        $sql_affiche_mat_log_quantity = "SELECT * FROM `mat_log_quantity` WHERE `id_mat_log` = '$id_mat_log'";

        //On excute directement la requete
        $requete_affiche_mat_log_quantity = $db->query($sql_affiche_mat_log_quantity);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_quantity = $requete_affiche_mat_log_quantity->fetchAll();
 
    }else{
     $affiche_quantity = "NULL";
    }
?>