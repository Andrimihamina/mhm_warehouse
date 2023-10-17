<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     $id = $_GET['idProduct'];

     $sql_edit_cons_itc_id= "SELECT*
                         FROM cons_itc_id
                         JOIN cons_itc_quantity ON cons_itc_id.id = cons_itc_quantity.id_cons_itc
                         WHERE cons_itc_id.id = '$id'";
     $requete_edit_cons_itc_id = $db->query($sql_edit_cons_itc_id);
     $edits_med_id = $requete_edit_cons_itc_id->fetchAll();
?>