<?php
$sql= "UPDATE `mat_med_aut_active` SET 
`sterilizations` = '$sterilizations', `laboratory` = '$laboratory'
WHERE `mat_med_aut_active`.`id_mat_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>