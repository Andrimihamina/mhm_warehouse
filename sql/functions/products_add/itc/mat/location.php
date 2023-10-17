<?php
  $sql_location= "INSERT INTO `mat_itc_location` 
  (`id`, `id_mat_itc`, `mat_itc_loc`, `location`, `sub_location`, `sub_sub_location`) 
  VALUES 
  (NULL, '$mat_id', '$location', '$location_0', '$location_1', '$location_2')";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>