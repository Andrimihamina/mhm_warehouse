<?php
$sql_cancel = "UPDATE `flux_in` SET `cancel` = '1' WHERE `flux_in`.`nbr_in` = $nbr_in";
$query_cancel= $db->prepare($sql_cancel);
$query_cancel->execute();

header("Location: ../../../../Layout/Flux/inputs_register.php")


?>