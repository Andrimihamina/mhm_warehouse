<?php
$sql= "UPDATE `cons_log_aut_active` SET 
`sterilizations` = '$sterilizations', `laboratory` = '$laboratory'
WHERE `cons_log_aut_active`.`id_cons_log` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>