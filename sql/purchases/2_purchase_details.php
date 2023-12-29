<?php
require_once("../../env/dns_warehouse.php");

$sql_detail = "SELECT * FROM `flux_in` INNER JOIN suppliers ON suppliers.id_suppliers = flux_in.suppliers WHERE
-- ID
`id_in` = '$id'";
$requete_details= $db->query($sql_detail);
$affiche_details = $requete_details->fetchall()

?>