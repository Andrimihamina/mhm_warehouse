<?php
$sql= "UPDATE `mat_itc_id` SET 
`mat_itc_image` = '$file_name' WHERE `mat_itc_id`.`id` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>