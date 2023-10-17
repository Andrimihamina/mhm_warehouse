<?php
  $sql_location= "UPDATE `mat_med_location` SET 
  `mat_med_loc` = '$location', 
  `location` = '$location_0', 
  `sub_location` = '$location_1', 
  `sub_sub_location` = '$location_2' 
  WHERE `mat_med_location`.`id_mat_med` = '$id'";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>