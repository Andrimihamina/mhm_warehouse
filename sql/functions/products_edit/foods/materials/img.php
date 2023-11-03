<?php
$sql= "UPDATE `mat_foo_id` SET 
`mat_foo_image` = '$file_name' WHERE `mat_foo_id`.`id` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>