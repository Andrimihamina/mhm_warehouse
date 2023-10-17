<?php
$sql= "UPDATE `medicine_authorizations_active` SET 
`sterilizations` = '$sterilizations', `laboratory` = '$laboratory'
WHERE `medicine_authorizations_active`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>