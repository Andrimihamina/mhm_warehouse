<?php
  $sql_location= "UPDATE `mat_log_location` SET 
  `mat_log_loc` = '$location', 
  `location` = '$location_0', 
  `sub_location` = '$location_1', 
  `sub_sub_location` = '$location_2' 
  WHERE `mat_log_location`.`id_mat_log` = '$id'";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>