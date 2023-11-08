<?php
if($abbrev_value_indentif == "COS-ITC-"){

     // ID ABREV
     $identifiant = $id_cons;

    // ID
    $sql_id = "SELECT * FROM `cons_itc_id` WHERE `id_code_cons_itc` = '$identifiant'";
    $requete_id= $db->query($sql_id);
    $affiche_id = $requete_id->fetch();

    $id_cons_itc = $affiche_id['id'];

    // STOCK
    $sql_stock = "SELECT * FROM `cons_itc_quantity` WHERE `id_cons_itc` = '$id_cons_itc'";
    $requete_stock= $db->query($sql_stock);
    $affiche_quantity = $requete_stock->fetchAll();


    }
?>