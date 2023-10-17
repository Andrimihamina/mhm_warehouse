<?php
      require_once("../../../../../php/dns/connect.php");
     /*
     ============== POUR LE NAME DE CONSUMABLE MEDICAL========================================
     */
    $cons_foo_sess = $_SESSION["cons_foo"]["id_code_cons_foo"];

    if($cons_foo_sess !=""){
        $sql_affiche_cons_foo= "SELECT * FROM `cons_foo_id` WHERE `id_code_cons_foo` = '$cons_foo_sess'";

        //On excute directement la requete
        $requete_affiche_cons_foo  = $db->query($sql_affiche_cons_foo);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_name = $requete_affiche_cons_foo ->fetchall();

    }else{
     $affiche_name = "NULL";
    }

     /*
     ============== USED FOR========================================
     */
    $id_cons_foo = $affiche_name[0]["id"];

    if($cons_foo_sess !=""){
        $sql_affiche_cons_foo_used_for= "SELECT * FROM `cons_foo_used` WHERE `id_cons_foo` = '$id_cons_foo'";

        //On excute directement la requete
        $requete_affiche_cons_foo_used_for = $db->query($sql_affiche_cons_foo_used_for);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_used_for = $requete_affiche_cons_foo_used_for ->fetchAll();
 
    }else{
     $affiche_used_for = "NULL";
    }
    
    /*
     ============== LOCATION ========================================
     */

    if($cons_foo_sess !=""){
        $sql_affiche_cons_foo_location = "SELECT * FROM `cons_foo_location` WHERE `id_cons_foo` = '$id_cons_foo'";

        //On excute directement la requete
        $requete_affiche_cons_foo_location = $db->query($sql_affiche_cons_foo_location);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_location = $requete_affiche_cons_foo_location ->fetchAll();
 
    }else{
     $affiche_location = "NULL";
    }
    /*
     ============== PRICE ========================================
     */
    if($cons_foo_sess !=""){
        $sql_affiche_cons_foo_price = "SELECT * FROM `cons_foo_price` WHERE `id_cons_foo` = '$id_cons_foo'";

        //On excute directement la requete
        $requete_affiche_cons_foo_price = $db->query($sql_affiche_cons_foo_price);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_price = $requete_affiche_cons_foo_price ->fetchAll();
 
    }else{
     $affiche_price = "NULL";
    }
    /*
     ============== QUANTITY ========================================
     */

    if($cons_foo_sess !=""){
        $sql_affiche_cons_foo_quantity = "SELECT * FROM `cons_foo_quantity` WHERE `id_cons_foo` = '$id_cons_foo'";

        //On excute directement la requete
        $requete_affiche_cons_foo_quantity = $db->query($sql_affiche_cons_foo_quantity);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_quantity = $requete_affiche_cons_foo_quantity->fetchAll();
 
    }else{
     $affiche_quantity = "NULL";
    }
?>