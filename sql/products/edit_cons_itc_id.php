<?php
include_once ("../../env/dns_warehouse.php");

// cons_itc
     $sql_edit_med= "SELECT*
                         FROM cons_itc_id
                         LEFT JOIN cons_itc_quantity ON cons_itc_id.id = cons_itc_quantity.id_cons_itc";
     $requete_edit_med = $db->query($sql_edit_med);
     $edits= $requete_edit_med->fetchAll();

// UNITS
     $sql_prods_med= "SELECT *
                         FROM cons_itc_id
                         JOIN cons_itc_quantity ON cons_itc_id.id = cons_itc_quantity.id_cons_itc
                         JOIN cons_itc_location ON cons_itc_id.id = cons_itc_location.id_cons_itc
                         JOIN cons_itc_price ON cons_itc_id.id = cons_itc_price.id_cons_itc
                         JOIN cons_itc_from ON cons_itc_id.id = cons_itc_from.id_cons_itc
                         JOIN cons_itc_used ON cons_itc_id.id = cons_itc_used.id_cons_itc";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods= $requete_prods_med->fetchAll();
?>