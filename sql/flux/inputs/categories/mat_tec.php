<?php
// ID
$sql_id = "SELECT * FROM `mat_tec_id` WHERE `id_code_mat_tec` = '$identifiant'";
$requete_id= $db->query($sql_id);
$affiche_id = $requete_id->fetch();

$id_mat_tec = $affiche_id['id'];

// STOCK
$sql_stock = "SELECT * FROM `mat_tec_quantity` WHERE `id_mat_tec` = '$id_mat_tec'";
$requete_stock= $db->query($sql_stock);
$affiche_quantity = $requete_stock->fetchAll();

$CurStock = $affiche_quantity[0]["stock"];
$InStock = $affiche_quantity[0]["stock_in"];

// STOCK ADD
$addstock = $CurStock + $QT;
$In_Stock = $InStock + $QT;

// UPDATE
$sql_Update_stock = "UPDATE `mat_tec_quantity` SET `stock` = '$addstock', `stock_in`= $In_Stock 
                     WHERE `mat_tec_quantity`.`id_mat_tec` = '$id_mat_tec'";               
$query_UpdateStock = $db->prepare($sql_Update_stock);
$query_UpdateStock -> execute();        
?>