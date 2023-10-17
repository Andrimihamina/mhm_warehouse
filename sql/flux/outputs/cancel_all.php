<?php
$sql_cancel = "UPDATE `flux_out` SET `cancel` = '1' WHERE `flux_out`.`nbr_chr` = '$nbr_chr'";
$query_cancel= $db->prepare($sql_cancel);
var_dump($query_cancel);

$query_cancel->execute();

header("Location: ../../../../Layout/Flux/outputs_register.php")


?>