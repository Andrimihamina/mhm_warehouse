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
$InStock = $affiche_quantity[0]["stock_in"];

// STOCK ADD
$addstock = $CurStock + $QT;
$In_Stock = $InStock + $QT;

// UPDATE
$sql_Update_stock = "UPDATE `cons_med_quantity` SET `stock` = '$addstock', `stock_in`= $In_Stock 
                     WHERE `cons_med_quantity`.`id_cons_med` = '$id_cons_med'";               
$query_UpdateStock = $db->prepare($sql_Update_stock);
$query_UpdateStock -> execute();        
?>