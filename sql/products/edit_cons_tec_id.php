<?php
include_once ("../../env/dns_warehouse.php");

// cons_tec
     $sql_edit_med= "SELECT*
                         FROM cons_tec_id
                         LEFT JOIN cons_tec_quantity ON cons_tec_id.id = cons_tec_quantity.id_cons_tec";
     $requete_edit_med = $db->query($sql_edit_med);
     $edits= $requete_edit_med->fetchAll();

// UNITS
     $sql_prods_med= "SELECT *
                         FROM cons_tec_id
                         JOIN cons_tec_quantity ON cons_tec_id.id = cons_tec_quantity.id_cons_tec
                         JOIN cons_tec_location ON cons_tec_id.id = cons_tec_location.id_cons_tec
                         JOIN cons_tec_price ON cons_tec_id.id = cons_tec_price.id_cons_tec
                         JOIN cons_tec_from ON cons_tec_id.id = cons_tec_from.id_cons_tec
                         JOIN cons_tec_used ON cons_tec_id.id = cons_tec_used.id_cons_tec";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods= $requete_prods_med->fetchAll();
?>