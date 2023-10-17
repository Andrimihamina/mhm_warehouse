<?php
  $sql_location= "UPDATE `mat_imo_location` SET 
  `mat_imo_loc` = '$location', 
  `location` = '$location_0', 
  `sub_location` = '$location_1', 
  `sub_sub_location` = '$location_2' 
  WHERE `mat_imo_location`.`id_mat_imo` = '$id'";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>