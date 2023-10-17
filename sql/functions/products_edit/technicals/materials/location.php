<?php
  $sql_location= "UPDATE `mat_tec_location` SET 
  `mat_tec_loc` = '$location', 
  `location` = '$location_0', 
  `sub_location` = '$location_1', 
  `sub_sub_location` = '$location_2' 
  WHERE `mat_tec_location`.`id_mat_tec` = '$id'";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>