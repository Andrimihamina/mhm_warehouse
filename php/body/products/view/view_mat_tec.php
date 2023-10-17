<?php
      require_once("../../../../../php/dns/connect.php");
     /*
     ============== POUR LE NAME DE CONSUMABLE MEDICAL========================================
     */
    $mat_tec_sess = $_SESSION["mat_tec"]["id_code_mat_tec"];

    if($mat_tec_sess !=""){
        $sql_affiche_mat_tec= "SELECT * FROM `mat_tec_id` WHERE `id_code_mat_tec` = '$mat_tec_sess'";

        //On excute directement la requete
        $requete_affiche_mat_tec  = $db->query($sql_affiche_mat_tec);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_name = $requete_affiche_mat_tec ->fetchall();

    }else{
     $affiche_name = "NULL";
    }

     /*
     ============== USED FOR========================================
     */
    $id_mat_tec = $affiche_name[0]["id"];

    if($mat_tec_sess !=""){
        $sql_affiche_mat_tec_used_for= "SELECT * FROM `mat_tec_used` WHERE `id_mat_tec` = '$id_mat_tec'";

        //On excute directement la requete
        $requete_affiche_mat_tec_used_for = $db->query($sql_affiche_mat_tec_used_for);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_used_for = $requete_affiche_mat_tec_used_for ->fetchAll();
 
    }else{
     $affiche_used_for = "NULL";
    }
    
    /*
     ============== LOCATION ========================================
     */

    if($mat_tec_sess !=""){
        $sql_affiche_mat_tec_location = "SELECT * FROM `mat_tec_location` WHERE `id_mat_tec` = '$id_mat_tec'";

        //On excute directement la requete
        $requete_affiche_mat_tec_location = $db->query($sql_affiche_mat_tec_location);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_location = $requete_affiche_mat_tec_location ->fetchAll();
 
    }else{
     $affiche_location = "NULL";
    }
    /*
     ============== PRICE ========================================
     */
    if($mat_tec_sess !=""){
        $sql_affiche_mat_tec_price = "SELECT * FROM `mat_tec_price` WHERE `id_mat_tec` = '$id_mat_tec'";

        //On excute directement la requete
        $requete_affiche_mat_tec_price = $db->query($sql_affiche_mat_tec_price);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_price = $requete_affiche_mat_tec_price ->fetchAll();
 
    }else{
     $affiche_price = "NULL";
    }
    /*
     ============== QUANTITY ========================================
     */

    if($mat_tec_sess !=""){
        $sql_affiche_mat_tec_quantity = "SELECT * FROM `mat_tec_quantity` WHERE `id_mat_tec` = '$id_mat_tec'";

        //On excute directement la requete
        $requete_affiche_mat_tec_quantity = $db->query($sql_affiche_mat_tec_quantity);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_quantity = $requete_affiche_mat_tec_quantity->fetchAll();
 
    }else{
     $affiche_quantity = "NULL";
    }
?>