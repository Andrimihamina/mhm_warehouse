<?php
$sql= "UPDATE `cons_tec_id` SET 
`image` = '$file_name' WHERE `cons_tec_id`.`id` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>