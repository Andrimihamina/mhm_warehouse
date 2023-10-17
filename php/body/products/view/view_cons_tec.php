<?php
      require_once("../../../../../php/dns/connect.php");
     /*
     ============== POUR LE NAME DE CONSUMABLE MEDICAL========================================
     */
    $cons_tec_sess = $_SESSION["cons_tec"]["id_code_cons_tec"];

    if($cons_tec_sess !=""){
        $sql_affiche_cons_tec= "SELECT * FROM `cons_tec_id` WHERE `id_code_cons_tec` = '$cons_tec_sess'";

        //On excute directement la requete
        $requete_affiche_cons_tec  = $db->query($sql_affiche_cons_tec);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_name = $requete_affiche_cons_tec ->fetchall();

    }else{
     $affiche_name = "NULL";
    }

     /*
     ============== USED FOR========================================
     */
    $id_cons_tec = $affiche_name[0]["id"];

    if($cons_tec_sess !=""){
        $sql_affiche_cons_tec_used_for= "SELECT * FROM `cons_tec_used` WHERE `id_cons_tec` = '$id_cons_tec'";

        //On excute directement la requete
        $requete_affiche_cons_tec_used_for = $db->query($sql_affiche_cons_tec_used_for);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_used_for = $requete_affiche_cons_tec_used_for ->fetchAll();
 
    }else{
     $affiche_used_for = "NULL";
    }
    
    /*
     ============== LOCATION ========================================
     */

    if($cons_tec_sess !=""){
        $sql_affiche_cons_tec_location = "SELECT * FROM `cons_tec_location` WHERE `id_cons_tec` = '$id_cons_tec'";

        //On excute directement la requete
        $requete_affiche_cons_tec_location = $db->query($sql_affiche_cons_tec_location);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_location = $requete_affiche_cons_tec_location ->fetchAll();
 
    }else{
     $affiche_location = "NULL";
    }
    /*
     ============== PRICE ========================================
     */
    if($cons_tec_sess !=""){
        $sql_affiche_cons_tec_price = "SELECT * FROM `cons_tec_price` WHERE `id_cons_tec` = '$id_cons_tec'";

        //On excute directement la requete
        $requete_affiche_cons_tec_price = $db->query($sql_affiche_cons_tec_price);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_price = $requete_affiche_cons_tec_price ->fetchAll();
 
    }else{
     $affiche_price = "NULL";
    }
    /*
     ============== QUANTITY ========================================
     */

    if($cons_tec_sess !=""){
        $sql_affiche_cons_tec_quantity = "SELECT * FROM `cons_tec_quantity` WHERE `id_cons_tec` = '$id_cons_tec'";

        //On excute directement la requete
        $requete_affiche_cons_tec_quantity = $db->query($sql_affiche_cons_tec_quantity);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_quantity = $requete_affiche_cons_tec_quantity->fetchAll();
 
    }else{
     $affiche_quantity = "NULL";
    }
?>