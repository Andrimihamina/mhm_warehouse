<?php
$sql= "UPDATE `cons_foo_id` SET 
`image` = '$file_name' WHERE `cons_foo_id`.`id` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>