<?php
// APPLICATION
$sql_medicine_application= "INSERT INTO `medicine_application` 
    (`id`, `id_med`, `med_affiche_application`, `med_application`) 
    VALUES 
    (NULL, '$medicine_id', '$affiche_application', '$application')";

$query_medicine_application = $db->prepare($sql_medicine_application);
$query_medicine_application->execute();

// CLASSIFICATION
$sql_medicine_classification= "INSERT INTO `medicine_classification` 
(`id`, `id_med`,  `med_affiche_classification`, `classification_0`, `classification_1`, `classification_2`) 
VALUES 
(NULL, '$medicine_id', '$classification', '$classification_0', '$classification_1', '$classification_2')";
 
$query_medicine_classificaiton = $db->prepare($sql_medicine_classification);

$query_medicine_classificaiton->execute();
?>