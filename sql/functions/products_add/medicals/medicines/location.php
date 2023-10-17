<?php
  $sql_medicine_location= "INSERT INTO `medicine_location` 
  (`id`, `id_med`, `med_affiche_location`, `location_0`, `location_1`, `location_2`) 
  VALUES 
  (NULL, '$medicine_id', '$location', '$location_0', '$location_1', '$location_2')";

$query_medicine_location = $db->prepare($sql_medicine_location);
$query_medicine_location->execute();

?>