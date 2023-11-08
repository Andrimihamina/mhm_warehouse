<?php
if($abbrev_value_indentif == "MAT-MED-"){
    // ID ABREV
    $identifiant = $id_cons;

    // ID
$sql_id = "SELECT * FROM `mat_med_id` WHERE `id_code_mat_med` = '$identifiant'";
$requete_id= $db->query($sql_id);
$affiche_id = $requete_id->fetch();

$id_mat_med = $affiche_id['id'];

// STOCK
$sql_stock = "SELECT * FROM `mat_med_quantity` WHERE `id_mat_med` = '$id_mat_med'";
$requete_stock= $db->query($sql_stock);
$affiche_quantity = $requete_stock->fetchAll();

    }
?>