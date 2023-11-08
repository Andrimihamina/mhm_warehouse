<?php
if($abbrev_value_indentif == "COS-LOG-"){
    // ID ABREV
    $identifiant = $id_cons;
    
    // ID
    $sql_id = "SELECT * FROM `cons_log_id` WHERE `id_code_cons_log` = '$identifiant'";
    $requete_id= $db->query($sql_id);
    $affiche_id = $requete_id->fetch();

    $id_cons_log = $affiche_id['id'];

    // STOCK
    $sql_stock = "SELECT * FROM `cons_log_quantity` WHERE `id_cons_log` = '$id_cons_log'";
    $requete_stock= $db->query($sql_stock);
    $affiche_quantity = $requete_stock->fetchAll();

    }
?>