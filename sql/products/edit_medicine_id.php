<?php
include_once ("../../env/dns_warehouse.php");

// MEDICINE
     $sql_edit_med= "SELECT*
                         FROM medicine_id
                         JOIN med_form ON medicine_id.form = med_form.id_form
                         JOIN medicine_quantity ON medicine_id.id = medicine_quantity.id_med";
     $requete_edit_med = $db->query($sql_edit_med);
     $edits_med= $requete_edit_med->fetchAll();

// UNITS
     $sql_prods_med= "SELECT *
                         FROM medicine_id
                         JOIN medicine_application ON medicine_id.id = medicine_application.id_med 
                         JOIN medicine_classification ON medicine_id.id = medicine_classification.id_med 
                         JOIN medicine_quantity ON medicine_id.id = medicine_quantity.id_med
                         JOIN medicine_location ON medicine_id.id = medicine_location.id_med
                         JOIN medicine_price ON medicine_id.id = medicine_price.id_med
                         JOIN medicine_from ON medicine_id.id = medicine_from.id_med";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods_med= $requete_prods_med->fetchAll(); 
?>