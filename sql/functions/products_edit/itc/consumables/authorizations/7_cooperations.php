<?php
$sql= "UPDATE `cons_itc_aut_active` SET 
`o_therapy`='$o_therapy' , `german_docs` ='$german_docs' , `eye` ='$eye' , `external_dermathology`='$external_dermathology'  , 
`external_others` ='$external_others' 
 WHERE `cons_itc_aut_active`.`id_cons_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>