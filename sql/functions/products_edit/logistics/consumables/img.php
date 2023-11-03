<?php
$sql= "UPDATE `cons_log_id` SET 
`image` = '$file_name' WHERE `cons_log_id`.`id` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>