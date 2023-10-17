<?php
  $sql_location= "INSERT INTO `cons_log_location` 
  (`id`, `id_cons_log`, `cons_log_loc`, `location`, `sub_location`, `sub_sub_location`) 
  VALUES 
  (NULL, '$cons_id', '$location', '$location_0', '$location_1', '$location_2')";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>