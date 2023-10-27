<?php
// ID
    $id =  strip_tags($_POST["id"]);
    $id_code =  strip_tags($_POST["id_code"]);
// LOCATION
    $location_0 = strip_tags($_POST["location_0"]);
    $location_1 = strip_tags($_POST["location_1"]);
    $location_2 = strip_tags($_POST["location_2"]);

    // LOCATION 1
    $tbl_location_1 = "mat_location";
    $colums_location_1 = "id_location";
    // LOCATION 2
    $tbl_location_2 = "mat_sublocation";
    $colums_location_2 = "id_sub_loc";
    // LOCATION 3
    $tbl_location_3 = "mat_subsublocation";
    $colums_location_3 = "id_subsubloc";

    /* ===================== APPLICATION AFFICHE=========================*/
    include_once ("../../php/products_add/add/5_b_location.php");

    require_once ("../../sql/functions/products_edit/medicals/materials/location.php");

// QUANTITE
    $stock= $_POST["stock"];
    $quantity_minimal= $_POST["quantity_minimal"];
    $quantity_avarage= $_POST["quantity_avarage"];

require_once ("../../sql/functions/products_edit/medicals/materials/quantity.php");

// BACK
        header("Location: ../../Layout/Products_view/Qr_code.php?idProduit=$id_code");

?>