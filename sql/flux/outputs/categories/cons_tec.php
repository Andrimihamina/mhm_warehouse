<?php
// ID
$sql_id = "SELECT * FROM `cons_tec_id` WHERE `id_code_cons_tec` = '$identifiant'";
$requete_id= $db->query($sql_id);
$affiche_id = $requete_id->fetch();

$id_cons_tec = $affiche_id['id'];

// STOCK
$sql_stock = "SELECT * FROM `cons_tec_quantity` WHERE `id_cons_tec` = '$id_cons_tec'";
$requete_stock= $db->query($sql_stock);
$affiche_quantity = $requete_stock->fetchAll();

$CurStock = $affiche_quantity[0]["stock"];
$OutStock = $affiche_quantity[0]["stock_out"];

// STOCK ADD
$addstock = $CurStock - $QT;
$Out_Stock = $OutStock + $QT;

// UPDATE
$sql_Update_stock = "UPDATE `cons_tec_quantity` SET `stock` = '$addstock', `stock_out`= $Out_Stock 
                     WHERE `cons_tec_quantity`.`id_cons_tec` = '$id_cons_tec'";               
$query_UpdateStock = $db->prepare($sql_Update_stock);
$query_UpdateStock -> execute();        
?>