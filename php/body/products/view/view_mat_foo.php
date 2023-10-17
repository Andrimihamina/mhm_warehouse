<?php
      require_once("../../../../../php/dns/connect.php");
     /*
     ============== POUR LE NAME DE CONSUMABLE MEDICAL========================================
     */
    $mat_foo_sess = $_SESSION["mat_foo"]["id_code_mat_foo"];

    if($mat_foo_sess !=""){
        $sql_affiche_mat_foo= "SELECT * FROM `mat_foo_id` WHERE `id_code_mat_foo` = '$mat_foo_sess'";

        //On excute directement la requete
        $requete_affiche_mat_foo  = $db->query($sql_affiche_mat_foo);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_name = $requete_affiche_mat_foo ->fetchall();

    }else{
     $affiche_name = "NULL";
    }

     /*
     ============== USED FOR========================================
     */
    $id_mat_foo = $affiche_name[0]["id"];

    if($mat_foo_sess !=""){
        $sql_affiche_mat_foo_used_for= "SELECT * FROM `mat_foo_used` WHERE `id_mat_foo` = '$id_mat_foo'";

        //On excute directement la requete
        $requete_affiche_mat_foo_used_for = $db->query($sql_affiche_mat_foo_used_for);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_used_for = $requete_affiche_mat_foo_used_for ->fetchAll();
 
    }else{
     $affiche_used_for = "NULL";
    }
    
    /*
     ============== LOCATION ========================================
     */

    if($mat_foo_sess !=""){
        $sql_affiche_mat_foo_location = "SELECT * FROM `mat_foo_location` WHERE `id_mat_foo` = '$id_mat_foo'";

        //On excute directement la requete
        $requete_affiche_mat_foo_location = $db->query($sql_affiche_mat_foo_location);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_location = $requete_affiche_mat_foo_location ->fetchAll();
 
    }else{
     $affiche_location = "NULL";
    }
    /*
     ============== PRICE ========================================
     */
    if($mat_foo_sess !=""){
        $sql_affiche_mat_foo_price = "SELECT * FROM `mat_foo_price` WHERE `id_mat_foo` = '$id_mat_foo'";

        //On excute directement la requete
        $requete_affiche_mat_foo_price = $db->query($sql_affiche_mat_foo_price);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_price = $requete_affiche_mat_foo_price ->fetchAll();
 
    }else{
     $affiche_price = "NULL";
    }
    /*
     ============== QUANTITY ========================================
     */

    if($mat_foo_sess !=""){
        $sql_affiche_mat_foo_quantity = "SELECT * FROM `mat_foo_quantity` WHERE `id_mat_foo` = '$id_mat_foo'";

        //On excute directement la requete
        $requete_affiche_mat_foo_quantity = $db->query($sql_affiche_mat_foo_quantity);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_quantity = $requete_affiche_mat_foo_quantity->fetchAll();
 
    }else{
     $affiche_quantity = "NULL";
    }
?>