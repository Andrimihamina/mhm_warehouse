<?php
include_once ("../../env/dns_warehouse.php");

// cons_foo
     $sql_edit_med= "SELECT*
                         FROM cons_foo_id
                         LEFT JOIN cons_foo_quantity ON cons_foo_id.id = cons_foo_quantity.id_cons_foo";
     $requete_edit_med = $db->query($sql_edit_med);
     $edits= $requete_edit_med->fetchAll();

// UNITS
     $sql_prods_med= "SELECT *
                         FROM cons_foo_id
                         JOIN cons_foo_quantity ON cons_foo_id.id = cons_foo_quantity.id_cons_foo
                         JOIN cons_foo_location ON cons_foo_id.id = cons_foo_location.id_cons_foo
                         JOIN cons_foo_price ON cons_foo_id.id = cons_foo_price.id_cons_foo
                         JOIN cons_foo_from ON cons_foo_id.id = cons_foo_from.id_cons_foo
                         JOIN cons_foo_used ON cons_foo_id.id = cons_foo_used.id_cons_foo";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods= $requete_prods_med->fetchAll();
?>