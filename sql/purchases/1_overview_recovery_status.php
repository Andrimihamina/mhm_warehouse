<?php
$sql_overview = "SELECT COUNT(id_in) AS number_buy, `flux_in`.`id_in`, `flux_in`.`created_date`, `flux_in`.`purchase_date`, `flux_in`.`suppliers`, `flux_in`.`Proforma_number`, `flux_in`.`bill_number`, `flux_in`.`bill_scan`, `flux_in`.`modus_payement`, `flux_in`.`payment_done`, `flux_in`.`payment_due_date`, suppliers.name FROM `flux_in` INNER JOIN suppliers ON suppliers.id_suppliers = flux_in.suppliers WHERE done = 1 and cancel !=1  GROUP BY id_in HAVING COUNT(id_in) >= 1 ORDER BY `created_date` DESC";

$requete_overview = $db->query($sql_overview);
$all_purchase = $requete_overview->fetchAll(); 
?>