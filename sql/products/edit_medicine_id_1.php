<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     // MEDICINE
     $id = $_GET['idProduct'];

     $sql_edit_med_id= "SELECT*
                         FROM medicine_id
                         JOIN med_form ON medicine_id.form = med_form.id_form
                         JOIN medicine_quantity ON medicine_id.id = medicine_quantity.id_med
                         WHERE medicine_id.id = '$id'";
     $requete_edit_med_id = $db->query($sql_edit_med_id);
     $edits_med_id = $requete_edit_med_id->fetchAll();
?>