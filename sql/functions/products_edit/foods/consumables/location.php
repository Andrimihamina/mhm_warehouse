<?php
  $sql_location= "UPDATE `cons_foo_location` SET 
  `cons_foo_loc` = '$location', 
  `location` = '$location_0', 
  `sub_location` = '$location_1', 
  `sub_sub_location` = '$location_2' 
  WHERE `cons_foo_location`.`id_cons_foo` = '$id'";

$query_location = $db->prepare($sql_location);
$query_location->execute();

?>