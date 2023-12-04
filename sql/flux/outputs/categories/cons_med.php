<?php
// ID
$sql_id = "SELECT * FROM `cons_med_id` WHERE `id_code_cons_med` = '$identifiant'";
$requete_id= $db->query($sql_id);
$affiche_id = $requete_id->fetch();

$id_cons_med = $affiche_id['id'];

// STOCK
$sql_stock = "SELECT * FROM `cons_med_quantity` WHERE `id_cons_med` = '$id_cons_med'";
$requete_stock= $db->query($sql_stock);
$affiche_quantity = $requete_stock->fetchAll();

$CurStock = $affiche_quantity[0]["stock"];
$OutStock = $affiche_quantity[0]["stock_out"];

// STOCK ADD
$addstock = $CurStock - $QT;
$Out_Stock = $OutStock + $QT;

// UPDATE
$sql_Update_stock = "UPDATE `cons_med_quantity` SET `stock` = '$addstock', `stock_out`= $Out_Stock 
                     WHERE `cons_med_quantity`.`id_cons_med` = '$id_cons_med'";               
$query_UpdateStock = $db->prepare($sql_Update_stock);
$query_UpdateStock -> execute();    

// UPDATE LA QUANTITE DANS LE QUANTITE MEDICINE PATIENT SYSTEM
$sql_stock_patient_system_inventory = "SELECT * FROM `inventories` WHERE `id_cons_med` = '$id_cons_med'";
$requete_stock_patient_system_inventory = $db_p->query($sql_stock_patient_system_inventory);
$affiche_quantite_patient_system_inventory = $requete_stock_patient_system_inventory->fetch();

$stock_actuelle_patient_system_inventory = $affiche_quantite_patient_system_inventory["general"];

// UPDATE GENERAL STOCK
$sql_flux_out_update_qt_general = "UPDATE `inventories` SET `general` = '$addstock' WHERE `inventories`.`id_cons_med` = '$id_cons_med'";
$query_flux_out_update_qt_general = $db_p ->prepare($sql_flux_out_update_qt_general);
$query_flux_out_update_qt_general->execute();

?>