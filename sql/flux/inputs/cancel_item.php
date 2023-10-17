<?php
$sql_cancel = "UPDATE `flux_in` SET `cancel` = '1' WHERE `flux_in`.`id_flux_in` = $ID_flux";
$query_cancel= $db->prepare($sql_cancel);
$query_cancel->execute();

header("Location: ../../../../Layout/Flux/inputs_register.php")


?>