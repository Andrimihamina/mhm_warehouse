<?php
  $sql_location= "UPDATE `cons_itc_location` SET 
  `cons_itc_loc` = '$location', 
  `location` = '$location_0', 
  `sub_location` = '$location_1', 
  `sub_sub_location` = '$location_2' 
  WHERE `cons_itc_location`.`id_cons_itc` = '$id'";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>