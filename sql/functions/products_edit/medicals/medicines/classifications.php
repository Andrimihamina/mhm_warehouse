<?php
// CLASSIFICATIONS
$sql_medicine_classification = " UPDATE `medicine_classification` SET 
                                `med_affiche_classification` = '$classification', 
                                `classification_0` = '$classification_0', 
                                `classification_1` = '$classification_1', 
                                `classification_2` = '$classification_2' 
                                WHERE `medicine_classification`.`id_med` = '$id'";

$query_medicine_classification = $db->prepare($sql_medicine_classification);
$query_medicine_classification->execute();
?>