<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     $id = $_GET['idProduct'];

     $sql_edit_cons_med_id= "SELECT*
                         FROM cons_med_id
                         JOIN cons_med_quantity ON cons_med_id.id = cons_med_quantity.id_cons_med
                         WHERE cons_med_id.id = '$id'";
     $requete_edit_cons_med_id = $db->query($sql_edit_cons_med_id);
     $edits_med_id = $requete_edit_cons_med_id->fetchAll();
?>