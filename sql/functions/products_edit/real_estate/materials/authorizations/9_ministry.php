<?php
$sql= "UPDATE `mat_imo_aut_active` SET 
 `social_chaplincy` = '$social_chaplincy', `social_kids_club` = '$social_kids_club', `social_playmobil` = '$social_playmobil', 
 `social_prayer` = '$social_prayer', `social_sensibilizations` = '$social_sensibilizations'
 WHERE `mat_imo_aut_active`.`id_mat_imo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>