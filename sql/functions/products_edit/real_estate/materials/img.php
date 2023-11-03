<?php
$sql= "UPDATE `mat_imo_id` SET 
`mat_imo_image` = '$file_name' WHERE `mat_imo_id`.`id` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>