<?php
  $sql_location= "INSERT INTO `cons_tec_location` 
  (`id`, `id_cons_tec`, `cons_tec_loc`, `location`, `sub_location`, `sub_sub_location`) 
  VALUES 
  (NULL, '$cons_id', '$location', '$location_0', '$location_1', '$location_2')";

$query_location = $db->prepare($sql_location);
$query_location->execute();
?>