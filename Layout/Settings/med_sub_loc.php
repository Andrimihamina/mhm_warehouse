<?php
    $settings_sql = include_once("../../sql/functions/location/medical/medicine/sub.php");
    $title_3 = "Medicine Sub Locations";

    $id = "id_sub_loc";
    $descriptions = "sublocation_descriptions";
    $definitions = "sublocation_definitions";

    $lien_add = "med_sub_loc/add.php";
    $lien_edit = "med_sub_loc/edit.php"; 

    require_once("../../Layout/Settings/items_index/layout.php");
?>