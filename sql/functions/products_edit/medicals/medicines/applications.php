<?php
// APPLICATION
$sql_medicine_application= " UPDATE `medicine_application` SET `med_affiche_application` = '$affiche_application', `med_application` = '$application' WHERE `medicine_application`.`id_med` = $id";

$query_medicine_application = $db->prepare($sql_medicine_application);
$query_medicine_application->execute();
?>