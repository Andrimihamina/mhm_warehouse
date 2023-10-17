<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     $id = $_GET['idProduct'];

     $sql_edit_mat_itc_id= "SELECT*
                         FROM mat_itc_id
                         JOIN mat_itc_quantity ON mat_itc_id.id = mat_itc_quantity.id_mat_itc
                         WHERE mat_itc_id.id = '$id'";
     $requete_edit_mat_itc_id = $db->query($sql_edit_mat_itc_id);
     $edits = $requete_edit_mat_itc_id->fetchAll();
?>