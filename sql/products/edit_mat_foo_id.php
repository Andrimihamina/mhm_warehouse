<?php
include_once ("../../env/dns_warehouse.php");

// mat_foo
     $sql_edit_med= "SELECT*
                         FROM mat_foo_id
                         LEFT JOIN mat_foo_quantity ON mat_foo_id.id = mat_foo_quantity.id_mat_foo";
     $requete_edit_med = $db->query($sql_edit_med);
     $edits= $requete_edit_med->fetchAll();

// UNITS
     $sql_prods_med= "SELECT *
                         FROM mat_foo_id
                         JOIN mat_foo_quantity ON mat_foo_id.id = mat_foo_quantity.id_mat_foo
                         JOIN mat_foo_location ON mat_foo_id.id = mat_foo_location.id_mat_foo
                         JOIN mat_foo_price ON mat_foo_id.id = mat_foo_price.id_mat_foo
                         JOIN mat_foo_from ON mat_foo_id.id = mat_foo_from.id_mat_foo
                         JOIN mat_foo_used ON mat_foo_id.id = mat_foo_used.id_mat_foo";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods= $requete_prods_med->fetchAll();
?>