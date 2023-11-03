<?php
$sql= "UPDATE `mat_log_id` SET 
`mat_log_image` = '$file_name' WHERE `mat_log_id`.`id` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>