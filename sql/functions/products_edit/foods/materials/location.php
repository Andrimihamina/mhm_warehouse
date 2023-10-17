<?php
  $sql_location= "UPDATE `mat_foo_location` SET 
  `mat_foo_loc` = '$location', 
  `location` = '$location_0', 
  `sub_location` = '$location_1', 
  `sub_sub_location` = '$location_2' 
  WHERE `mat_foo_location`.`id_mat_foo` = '$id'";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>