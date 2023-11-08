<?php
if($abbrev_value_indentif == "COS-TEC-"){
    // ID ABREV
    $identifiant = $id_cons;

    // ID
$sql_id = "SELECT * FROM `cons_tec_id` WHERE `id_code_cons_tec` = '$identifiant'";
$requete_id= $db->query($sql_id);
$affiche_id = $requete_id->fetch();

$id_cons_tec = $affiche_id['id'];

// STOCK
$sql_stock = "SELECT * FROM `cons_tec_quantity` WHERE `id_cons_tec` = '$id_cons_tec'";
$requete_stock= $db->query($sql_stock);
$affiche_quantity = $requete_stock->fetchAll();


    }
?>