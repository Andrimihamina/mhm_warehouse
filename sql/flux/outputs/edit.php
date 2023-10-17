<?php
$sql_edit = "UPDATE `flux_in` SET `quantity_added` = '$qt_edit', `purchase_price` = '$pr_edit' 
            WHERE `flux_in`.`id_flux_in` = $ID_flux";
$query_edit= $db->prepare($sql_edit);
$query_edit->execute();

header("Location: ../../../../Layout/Flux/inputs_register.php")


?>