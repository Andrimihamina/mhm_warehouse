<?php
$sql= "UPDATE `cons_itc_aut_active` SET 
 `social_chaplincy` = '$social_chaplincy', `social_kids_club` = '$social_kids_club', `social_playmobil` = '$social_playmobil', 
 `social_prayer` = '$social_prayer', `social_sensibilizations` = '$social_sensibilizations'
 WHERE `cons_itc_aut_active`.`id_cons_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>