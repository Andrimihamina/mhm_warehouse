<?php

require_once("../../../env/dns_warehouse.php");

$id =$_POST["register"];


$sql_update = "UPDATE `flux_in` SET `payment_done` = 'payed' WHERE `flux_in`.`id_in` = '$id'";
$query_update= $db->prepare($sql_update);

$query_update->execute();

header("Location: ../../../Layout/Purchases/1_purchase.php")
?>