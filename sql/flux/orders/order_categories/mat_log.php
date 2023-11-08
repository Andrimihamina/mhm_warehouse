<?php
if($abbrev_value_indentif == "MAT-LOG-"){
    // ID ABREV
    $identifiant = $id_cons;

    // ID
$sql_id = "SELECT * FROM `mat_log_id` WHERE `id_code_mat_log` = '$identifiant'";
$requete_id= $db->query($sql_id);
$affiche_id = $requete_id->fetch();

$id_mat_log = $affiche_id['id'];

// STOCK
$sql_stock = "SELECT * FROM `mat_log_quantity` WHERE `id_mat_log` = '$id_mat_log'";
$requete_stock= $db->query($sql_stock);
$affiche_quantity = $requete_stock->fetchAll();

    }
?>