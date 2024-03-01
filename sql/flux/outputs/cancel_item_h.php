<?php
$sql_edit = "UPDATE `flux_out` SET `cancel` = 1
            WHERE `flux_out`.`id_flux_out` = $ID_flux";
$query_edit= $db->prepare($sql_edit);
$query_edit->execute();
?>