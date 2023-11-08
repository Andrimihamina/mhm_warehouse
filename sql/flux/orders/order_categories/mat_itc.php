<?php
if($abbrev_value_indentif == "MAT-ITC-"){
    // ID ABREV
    $identifiant = $id_cons;

    // ID
$sql_id = "SELECT * FROM `mat_itc_id` WHERE `id_code_mat_itc` = '$identifiant'";
$requete_id= $db->query($sql_id);
$affiche_id = $requete_id->fetch();

$id_mat_itc = $affiche_id['id'];

// STOCK
$sql_stock = "SELECT * FROM `mat_itc_quantity` WHERE `id_mat_itc` = '$id_mat_itc'";
$requete_stock= $db->query($sql_stock);
$affiche_quantity = $requete_stock->fetchAll();

    }
?>