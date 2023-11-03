<?php
$sql= "UPDATE `mat_tec_id` SET 
`mat_tec_image` = '$file_name' WHERE `mat_tec_id`.`id` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>