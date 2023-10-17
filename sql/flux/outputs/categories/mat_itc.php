<?php
// ID
$sql_id = "SELECT * FROM `mat_itc_id` WHERE `id_code_mat_itc` = '$identifiant'";
$requete_id= $db->query($sql_id);
$affiche_id = $requete_id->fetch();

$id_mat_itc = $affiche_id['id'];

// STOCK
$sql_stock = "SELECT * FROM `mat_itc_quantity` WHERE `id_mat_itc` = '$id_mat_itc'";
$requete_stock= $db->query($sql_stock);
$affiche_quantity = $requete_stock->fetchAll();

$CurStock = $affiche_quantity[0]["stock"];
$OutStock = $affiche_quantity[0]["stock_out"];

// STOCK ADD
$addstock = $CurStock - $QT;
$Out_Stock = $OutStock + $QT;

// UPDATE
$sql_Update_stock = "UPDATE `mat_itc_quantity` SET `stock` = '$addstock', `stock_out`= $Out_Stock 
                     WHERE `mat_itc_quantity`.`id_mat_itc` = '$id_mat_itc'";               
$query_UpdateStock = $db->prepare($sql_Update_stock);
$query_UpdateStock -> execute();        
?>