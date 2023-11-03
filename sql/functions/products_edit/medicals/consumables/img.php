<?php
$sql= "UPDATE `cons_med_id` SET 
`cons_image` = '$file_name' WHERE `cons_med_id`.`id` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>