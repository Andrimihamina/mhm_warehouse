<?php
// ID
$sql_id = "SELECT * FROM `cons_foo_id` WHERE `id_code_cons_foo` = '$identifiant'";
$requete_id= $db->query($sql_id);
$affiche_id = $requete_id->fetch();

$id_cons_foo = $affiche_id['id'];

// STOCK
$sql_stock = "SELECT * FROM `cons_foo_quantity` WHERE `id_cons_foo` = '$id_cons_foo'";
$requete_stock= $db->query($sql_stock);
$affiche_quantity = $requete_stock->fetchAll();

$CurStock = $affiche_quantity[0]["stock"];
$OutStock = $affiche_quantity[0]["stock_out"];

// STOCK ADD
$addstock = $CurStock - $QT;
$Out_Stock = $OutStock + $QT;

// UPDATE
$sql_Update_stock = "UPDATE `cons_foo_quantity` SET `stock` = '$addstock', `stock_out`= $Out_Stock 
                     WHERE `cons_foo_quantity`.`id_cons_foo` = '$id_cons_foo'";               
$query_UpdateStock = $db->prepare($sql_Update_stock);
$query_UpdateStock -> execute();        
?>