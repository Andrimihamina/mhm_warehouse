<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     $id = $_GET['idProduct'];

     $sql_edit_mat_foo_id= "SELECT*
                         FROM mat_foo_id
                         JOIN mat_foo_quantity ON mat_foo_id.id = mat_foo_quantity.id_mat_foo
                         WHERE mat_foo_id.id = '$id'";
     $requete_edit_mat_foo_id = $db->query($sql_edit_mat_foo_id);
     $edits = $requete_edit_mat_foo_id->fetchAll();
?>