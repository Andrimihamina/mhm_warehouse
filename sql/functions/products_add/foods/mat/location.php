<?php
  $sql_location= "INSERT INTO `mat_foo_location` 
  (`id`, `id_mat_foo`, `mat_foo_loc`, `location`, `sub_location`, `sub_sub_location`) 
  VALUES 
  (NULL, '$mat_id', '$location', '$location_0', '$location_1', '$location_2')";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>