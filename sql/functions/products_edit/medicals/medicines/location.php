<?php
$sql_medicine_location= "UPDATE `medicine_location` SET 
`med_affiche_location` = '$location', 
`location_0` = '$location_0', 
`location_1` = '$location_1', 
`location_2` = '$location_2' 
WHERE `medicine_location`.`id_med` = '$id'";

$query_medicine_location = $db->prepare($sql_medicine_location);
$query_medicine_location->execute();

?>