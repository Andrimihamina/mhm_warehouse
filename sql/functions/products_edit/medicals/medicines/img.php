<?php
$sql= "UPDATE `medicine_id` SET 
`med_img` = '$file_name' WHERE `medicine_id`.`id` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>