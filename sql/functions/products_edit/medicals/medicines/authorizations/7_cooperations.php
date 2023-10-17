<?php
$sql= "UPDATE `medicine_authorizations_active` SET 
`o_therapy`='$o_therapy' , `german_docs` ='$german_docs' , `eye` ='$eye' , `external_dermathology`='$external_dermathology'  , 
`external_others` ='$external_others' 
 WHERE `medicine_authorizations_active`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>