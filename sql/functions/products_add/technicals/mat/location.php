<?php
  $sql_location= "INSERT INTO `mat_tec_location` 
  (`id`, `id_mat_tec`, `mat_tec_loc`, `location`, `sub_location`, `sub_sub_location`) 
  VALUES 
  (NULL, '$mat_id', '$location', '$location_0', '$location_1', '$location_2')";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>