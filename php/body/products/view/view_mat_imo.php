<?php
      require_once("../../../../../php/dns/connect.php");
     /*
     ============== POUR LE NAME DE CONSUMABLE MEDICAL========================================
     */
    $mat_imo_sess = $_SESSION["mat_imo"]["id_code_mat_imo"];

    if($mat_imo_sess !=""){
        $sql_affiche_mat_imo= "SELECT * FROM `mat_imo_id` WHERE `id_code_mat_imo` = '$mat_imo_sess'";

        //On excute directement la requete
        $requete_affiche_mat_imo  = $db->query($sql_affiche_mat_imo);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_name = $requete_affiche_mat_imo ->fetchall();

    }else{
     $affiche_name = "NULL";
    }

     /*
     ============== USED FOR========================================
     */
    $id_mat_imo = $affiche_name[0]["id"];

    if($mat_imo_sess !=""){
        $sql_affiche_mat_imo_used_for= "SELECT * FROM `mat_imo_used` WHERE `id_mat_imo` = '$id_mat_imo'";

        //On excute directement la requete
        $requete_affiche_mat_imo_used_for = $db->query($sql_affiche_mat_imo_used_for);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_used_for = $requete_affiche_mat_imo_used_for ->fetchAll();
 
    }else{
     $affiche_used_for = "NULL";
    }
    
    /*
     ============== LOCATION ========================================
     */

    if($mat_imo_sess !=""){
        $sql_affiche_mat_imo_location = "SELECT * FROM `mat_imo_location` WHERE `id_mat_imo` = '$id_mat_imo'";

        //On excute directement la requete
        $requete_affiche_mat_imo_location = $db->query($sql_affiche_mat_imo_location);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_location = $requete_affiche_mat_imo_location ->fetchAll();
 
    }else{
     $affiche_location = "NULL";
    }
    /*
     ============== PRICE ========================================
     */
    if($mat_imo_sess !=""){
        $sql_affiche_mat_imo_price = "SELECT * FROM `mat_imo_price` WHERE `id_mat_imo` = '$id_mat_imo'";

        //On excute directement la requete
        $requete_affiche_mat_imo_price = $db->query($sql_affiche_mat_imo_price);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_price = $requete_affiche_mat_imo_price ->fetchAll();
 
    }else{
     $affiche_price = "NULL";
    }
    /*
     ============== QUANTITY ========================================
     */

    if($mat_imo_sess !=""){
        $sql_affiche_mat_imo_quantity = "SELECT * FROM `mat_imo_quantity` WHERE `id_mat_imo` = '$id_mat_imo'";

        //On excute directement la requete
        $requete_affiche_mat_imo_quantity = $db->query($sql_affiche_mat_imo_quantity);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_quantity = $requete_affiche_mat_imo_quantity->fetchAll();
 
    }else{
     $affiche_quantity = "NULL";
    }
?>