<?php
$sql= "UPDATE `mat_med_id` SET 
`mat_med_image` = '$file_name' WHERE `mat_med_id`.`id` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>