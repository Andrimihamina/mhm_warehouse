<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     $id = $_GET['idProduct'];

     $sql_edit_cons_tec_id= "SELECT*
                         FROM cons_tec_id
                         JOIN cons_tec_quantity ON cons_tec_id.id = cons_tec_quantity.id_cons_tec
                         WHERE cons_tec_id.id = '$id'";
     $requete_edit_cons_tec_id = $db->query($sql_edit_cons_tec_id);
     $edits_med_id = $requete_edit_cons_tec_id->fetchAll();
?>