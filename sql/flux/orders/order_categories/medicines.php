<?php
if($abbrev_value == "MED"){

    // ID ABREV
    $identifiant = $id;

    // ID
$sql_id = "SELECT * FROM `medicine_id` WHERE `id_code_med` = '$identifiant'";
$requete_id= $db->query($sql_id);
$affiche_id = $requete_id->fetch();

$id_med = $affiche_id['id'];

// STOCK
$sql_stock = "SELECT * FROM `medicine_quantity` WHERE `id_med` = '$id_med'";
$requete_stock= $db->query($sql_stock);
$affiche_quantity = $requete_stock->fetchAll();
    }
?>