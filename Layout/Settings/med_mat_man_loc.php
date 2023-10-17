<?php
    $settings_sql = include_once("../../sql/functions/location/medical/materials/man.php");
    $title_3 = "Medical Materials Main Locations";

    $id = "id_location";
    $descriptions = "location_descriptions";
    $definitions = "location_definitions";

    $lien_add = "mat_med_main_loc/add.php";
    $lien_edit = "mat_med_main_loc/edit.php"; 

    require_once("../../Layout/Settings/items_index/layout.php");
?>