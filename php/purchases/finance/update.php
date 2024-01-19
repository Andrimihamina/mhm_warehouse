<?php

require_once("../../../env/dns_warehouse.php");

$id =$_POST["register"];
$date_payment =$_POST["date_payment"];
$ref_payment =$_POST["ref_payment"];
$amount_payment =$_POST["amount_payment"];




$sql_update = "UPDATE `flux_in` SET `payment_done` = 'payed', `date_payment` = '$date_payment', `ref_payment`= '$ref_payment', `amount_payment`= '$amount_payment' WHERE `flux_in`.`id_in` = '$id'";
$query_update= $db->prepare($sql_update);

$query_update->execute();

header("Location: ../../../Layout/Purchases/1_purchase.php")
?>