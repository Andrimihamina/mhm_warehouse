<?php
$sql= "UPDATE `mat_imo_aut_active` SET 
`o_therapy`='$o_therapy' , `german_docs` ='$german_docs' , `eye` ='$eye' , `external_dermathology`='$external_dermathology'  , 
`external_others` ='$external_others' 
 WHERE `mat_imo_aut_active`.`id_mat_imo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>