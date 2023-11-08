<?php
if($abbrev_value_indentif == "MAT-IMO-"){
    // ID ABREV
    $identifiant = $id_cons;

    // ID
$sql_id = "SELECT * FROM `mat_imo_id` WHERE `id_code_mat_imo` = '$identifiant'";
$requete_id= $db->query($sql_id);
$affiche_id = $requete_id->fetch();

$id_mat_imo = $affiche_id['id'];

// STOCK
$sql_stock = "SELECT * FROM `mat_imo_quantity` WHERE `id_mat_imo` = '$id_mat_imo'";
$requete_stock= $db->query($sql_stock);
$affiche_quantity = $requete_stock->fetchAll();

    }
?>