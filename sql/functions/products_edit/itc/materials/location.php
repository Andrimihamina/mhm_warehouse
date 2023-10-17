<?php
  $sql_location= "UPDATE `mat_itc_location` SET 
  `mat_itc_loc` = '$location', 
  `location` = '$location_0', 
  `sub_location` = '$location_1', 
  `sub_sub_location` = '$location_2' 
  WHERE `mat_itc_location`.`id_mat_itc` = '$id'";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>