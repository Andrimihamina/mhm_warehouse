<?php
require_once("../../env/dns_warehouse.php"); 
/*=================SESSION=============*/ 
// ID
$id = $_SESSION["products"]["id"];
$categories = $_SESSION["products"]["categories"];
$link_img =  $_SESSION["products"]["link_img"];
$images = $_SESSION["products"]["images"];
// ID TABLES
$tb_id = $_SESSION["products"]["tb_id"];
$columns_id = $_SESSION["products"]["columns_id"];
// USED
$tb_app = $_SESSION["products"]["tb_app"];
$tb_used_app_desc = $_SESSION["products"]["tb_used_app_desc"];
$tb_class = $_SESSION["products"]["tb_class"];
$tb_used_class_desc = $_SESSION["products"]["tb_used_class_desc"];
// LOCATION
$tb_loc = $_SESSION["products"]["tb_loc"];
$tb_loc_desc = $_SESSION["products"]["tb_loc_desc"];
// PRICE
$tb_price = $_SESSION["products"]["tb_price"];
// QUANITY
$tb_qt = $_SESSION["products"]["tb_qt"];

/*======================SQL===================*/
// DESCRIPTIONS
if($id !=""){
    $sql_affiche = "SELECT * FROM `$tb_id` WHERE `id` = $id";
        $requete_affiche  = $db->query($sql_affiche);
        $affiche = $requete_affiche ->fetchAll();

        $Descriptions = $affiche[0]["Descriptions"];
        $image = $affiche[0]["$images"];
// USED
    $sql_affiche_used = "SELECT * FROM `$tb_app` WHERE `$columns_id` = $id";
        $requete_affiche_used  = $db->query($sql_affiche_used);
        $affiche_used = $requete_affiche_used ->fetchAll();

        $Used = $affiche_used[0]["$tb_used_app_desc"];

    $sql_affiche_classification = "SELECT * FROM `$tb_class` WHERE `$columns_id` = $id";
        $requete_affiche_classification = $db->query($sql_affiche_classification);
        $affiche_classification = $requete_affiche_classification ->fetchAll();

        $Used_class = $affiche_classification[0]["$tb_used_class_desc"];
// LOCATION
    $sql_affiche_location = "SELECT * FROM `$tb_loc` WHERE `$columns_id` = $id";
        $requete_affiche_location = $db->query($sql_affiche_location);
        $affiche_location = $requete_affiche_location ->fetchAll();

        $locations = $affiche_location[0]["$tb_loc_desc"];
// PRICES
     $sql_affiche_price = "SELECT * FROM `$tb_price` WHERE `$columns_id` = $id";
        $requete_affiche_price = $db->query($sql_affiche_price);
        $affiche_price = $requete_affiche_price ->fetchAll();

        $qt = $affiche_price[0]["price_quantity"];
        $qt_units = $affiche_price[0]["box_name"];
        $price = $affiche_price[0]["price"];
// QUANTITY
    $sql_affiche_quantity = "SELECT * FROM `$tb_qt` WHERE `$columns_id` = $id";
        $requete_affiche_quantity = $db->query($sql_affiche_quantity);
        $affiche_quantity = $requete_affiche_quantity ->fetchAll();
 
        $stock = $affiche_quantity[0]["stock"];
}
?>