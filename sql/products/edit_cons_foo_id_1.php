<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     $id = $_GET['idProduct'];

     $sql_edit_cons_foo_id= "SELECT*
                         FROM cons_foo_id
                         JOIN cons_foo_quantity ON cons_foo_id.id = cons_foo_quantity.id_cons_foo
                         WHERE cons_foo_id.id = '$id'";
     $requete_edit_cons_foo_id = $db->query($sql_edit_cons_foo_id);
     $edits_med_id = $requete_edit_cons_foo_id->fetchAll();
?>