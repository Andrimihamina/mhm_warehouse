<?php
    $settings_sql = include_once("../../sql/functions/location/foods/materials/man.php");
    $title_3 = "Foods Materials Main Locations";

    $id = "id_location";
    $descriptions = "location_descriptions";
    $definitions = "location_definitions";
 
    $lien_add = "mat_foo_main_loc/add.php";
    $lien_edit = "mat_foo_main_loc/edit.php"; 

    require_once("../../Layout/Settings/items_index/layout.php");
?>