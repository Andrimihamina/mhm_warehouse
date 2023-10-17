<?php
$sql= "UPDATE `cons_tec_aut_active` SET 
`sterilizations` = '$sterilizations', `laboratory` = '$laboratory'
WHERE `cons_tec_aut_active`.`id_cons_tec` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>