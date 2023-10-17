<?php
$sql_flux_out_update = "UPDATE `flux_out` SET `done_order`= 1, `quantity_out` = '$QT'
                       WHERE `flux_out`.`id_flux_out` = $ID_flux";
$query_flux_out_update= $db->prepare($sql_flux_out_update);
$query_flux_out_update->execute();
?>