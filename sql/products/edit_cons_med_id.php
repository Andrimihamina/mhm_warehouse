<?php
include_once ("../../env/dns_warehouse.php");

// cons_med
     $sql_edit_med= "SELECT*
                         FROM cons_med_id
                         LEFT JOIN cons_med_quantity ON cons_med_id.id = cons_med_quantity.id_cons_med";
     $requete_edit_med = $db->query($sql_edit_med);
     $edits= $requete_edit_med->fetchAll();

// UNITS
     $sql_prods_med= "SELECT *
                         FROM cons_med_id
                         JOIN cons_med_quantity ON cons_med_id.id = cons_med_quantity.id_cons_med
                         JOIN cons_med_location ON cons_med_id.id = cons_med_location.id_cons_med
                         JOIN cons_med_price ON cons_med_id.id = cons_med_price.id_cons_med
                         JOIN cons_med_from ON cons_med_id.id = cons_med_from.id_cons_med
                         JOIN cons_med_used ON cons_med_id.id = cons_med_used.id_cons_med";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods= $requete_prods_med->fetchAll();
?>