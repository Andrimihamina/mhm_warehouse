<?php
$sql= "UPDATE `cons_med_aut_active` SET 
`ulm`= '$ulm', `midmob` = '$midmob', `detmob` = '$detmob', `ambulance_1` = '$ambulance_1', `ambulance_2` = '$ambulance_2', `outreaches_with_parteners`= '$outreaches_with_parteners'
WHERE `cons_med_aut_active`.`id_cons_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute();
?>