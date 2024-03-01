<?php
$sql_edit = "UPDATE `flux_out` SET `quantity_out` = '$qt_edit' 
            WHERE `flux_out`.`id_flux_out` = $ID_flux";
$query_edit= $db->prepare($sql_edit);
$query_edit->execute();
?>