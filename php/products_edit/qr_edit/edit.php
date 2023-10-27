<?php
require_once("../../env/dns_warehouse.php");
if(!empty($_POST)){
    $categories = $_POST["categories"];
    $edit = $_POST["edit"];

    if($categories == "Medicines" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/medical/medicines.php");
    }

    if($categories == "Medical Consumables" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/medical/cons.php");
    }

    if($categories == "Medicals Materials" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/medical/mat.php");
    }

    if($categories == "Logistics Consumables" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/log/cons.php");
    }

    if($categories == "Logistics Materials" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/log/mat.php");
    }

    if($categories == "Technicals Consumables" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/tec/cons.php");
    }

    if($categories == "Technicals Materials" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/tec/mat.php");
    }

    if($categories == "IT & Communications Consumables" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/itc/cons.php");
    }

    if($categories == "It & Communications Materials" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/itc/mat.php");
    }

    if($categories == "Foods Consumables" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/foo/cons.php");
    }

    if($categories == "Foods Materials" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/foo/mat.php");
    }

    if($categories == "Real Estate Materials" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/imo/mat.php");
    }
}
?>