<?php
require_once("../../env/dns_warehouse.php");
if(!empty($_POST)){
    $categories = $_POST["categories"];
    $edit = $_POST["edit"];

    if($categories == "Medicines" & $edit == "done"){
        include_once("../../php/products_edit/qr_edit/medical/medicines.php");
    }
}
?>