<?php
  $sql_location= "UPDATE `cons_log_location` SET 
  `cons_log_loc` = '$location', 
  `location` = '$location_0', 
  `sub_location` = '$location_1', 
  `sub_sub_location` = '$location_2' 
  WHERE `cons_log_location`.`id_cons_log` = '$id'";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>