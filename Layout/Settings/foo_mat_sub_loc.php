<?php
    $settings_sql = include_once("../../sql/functions/location/Foods/materials/sub.php");
    $title_3 = "Foods Materials Sub Locations";

    $id = "id_sub_loc";
    $descriptions = "sublocation_descriptions";
    $definitions = "sublocation_definitions";
 
    $lien_add = "mat_foo_sub_loc/add.php";
    $lien_edit = "mat_foo_sub_loc/edit.php"; 

    require_once("../../Layout/Settings/items_index/layout.php");
?>