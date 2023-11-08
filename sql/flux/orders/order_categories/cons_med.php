<?php
if($abbrev_value_indentif == "COS-MED-"){
    // ID ABREV
    $identifiant = $id_cons;

    // ID
    $sql_id = "SELECT * FROM `cons_med_id` WHERE `id_code_cons_med` = '$identifiant'";
    $requete_id= $db->query($sql_id);
    $affiche_id = $requete_id->fetch();

    $id_cons_med = $affiche_id['id'];

    // STOCK
    $sql_stock = "SELECT * FROM `cons_med_quantity` WHERE `id_cons_med` = '$id_cons_med'";
    $requete_stock= $db->query($sql_stock);
    $affiche_quantity = $requete_stock->fetchAll();

    }
?>