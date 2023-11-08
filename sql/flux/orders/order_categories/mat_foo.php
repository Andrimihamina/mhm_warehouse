<?php
if($abbrev_value_indentif == "MAT-FOO-"){
    // ID ABREV
    $identifiant = $id_cons;

    // ID
$sql_id = "SELECT * FROM `mat_foo_id` WHERE `id_code_mat_foo` = '$identifiant'";
$requete_id= $db->query($sql_id);
$affiche_id = $requete_id->fetch();

$id_mat_foo = $affiche_id['id'];

// STOCK
$sql_stock = "SELECT * FROM `mat_foo_quantity` WHERE `id_mat_foo` = '$id_mat_foo'";
$requete_stock= $db->query($sql_stock);
$affiche_quantity = $requete_stock->fetchAll();

    }
?>