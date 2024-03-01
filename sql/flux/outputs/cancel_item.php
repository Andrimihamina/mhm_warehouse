<?php
$sql_cancel = "UPDATE `flux_out` SET `cancel` = '1' WHERE `flux_out`.`id_flux_out` = $ID_flux";
$query_cancel= $db->prepare($sql_cancel);
$query_cancel->execute();

?>