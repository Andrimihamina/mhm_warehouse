<?php
    $settings_sql = include_once("../../sql/functions/location/medical/medicine/man.php");
    $title_3 = "Medicine Main Locations";

    $id = "id_location";
    $descriptions = "location_descriptions";
    $definitions = "location_definitions";

    $lien_add = "med_main_loc/add.php";
    $lien_edit = "med_main_loc/edit.php"; 

    require_once("../../Layout/Settings/items_index/layout.php");
?>