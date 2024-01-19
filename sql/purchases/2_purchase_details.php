<?php
require_once("../../env/dns_warehouse.php");

$sql_detail = "SELECT * FROM `flux_in` INNER JOIN suppliers ON suppliers.id_suppliers = flux_in.suppliers WHERE
-- ID
`id_in` = '$id'
and cancel != 1";
$requete_details= $db->query($sql_detail);
$affiche_details = $requete_details->fetchall();

$sql_total = "SELECT id_in, SUM(purchase_price) AS total_quantity FROM flux_in WHERE done = 1 and cancel !=1 and id_in = '$id'  GROUP BY id_in";

$requete_total= $db->query($sql_total);
$affiche_total = $requete_total->fetch();

?>