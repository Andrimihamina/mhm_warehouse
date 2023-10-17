<?php
  $sql_location= "UPDATE `cons_tec_location` SET 
  `cons_tec_loc` = '$location', 
  `location` = '$location_0', 
  `sub_location` = '$location_1', 
  `sub_sub_location` = '$location_2' 
  WHERE `cons_tec_location`.`id_cons_tec` = '$id'";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>