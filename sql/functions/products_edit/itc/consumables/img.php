<?php
$sql= "UPDATE `cons_itc_id` SET 
`image` = '$file_name' WHERE `cons_itc_id`.`id` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>