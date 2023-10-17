<?php
$sql_flux_in_update = "UPDATE `flux_in` SET `done`= 1, `quantity_added` = '$QT', `purchase_price` = '$Prices' 
                       WHERE `flux_in`.`id_flux_in` = $ID_flux";
$query_flux_in_update= $db->prepare($sql_flux_in_update);
$query_flux_in_update->execute();
?>