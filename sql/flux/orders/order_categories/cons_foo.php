<?php
if($abbrev_value_indentif == "COS-FOO-"){

    // ID ABREV
    $identifiant = $id_cons;

    // ID
    $sql_id = "SELECT * FROM `cons_foo_id` WHERE `id_code_cons_foo` = '$identifiant'";
    $requete_id= $db->query($sql_id);
    $affiche_id = $requete_id->fetch();

    $id_cons_foo = $affiche_id['id'];

    // STOCK
    $sql_stock = "SELECT * FROM `cons_foo_quantity` WHERE `id_cons_foo` = '$id_cons_foo'";
    $requete_stock= $db->query($sql_stock);
    $affiche_quantity = $requete_stock->fetchAll();

    }
?>