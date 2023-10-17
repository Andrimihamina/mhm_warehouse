<?php
  $sql_location= "UPDATE `cons_med_location` SET 
  `cons_med_loc` = '$location', 
  `location` = '$location_0', 
  `sub_location` = '$location_1', 
  `sub_sub_location` = '$location_2' 
  WHERE `cons_med_location`.`id_cons_med` = '$id'";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>