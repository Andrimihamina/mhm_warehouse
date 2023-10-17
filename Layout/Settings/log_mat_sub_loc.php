<?php
    $settings_sql = include_once("../../sql/functions/location/logistic/materials/sub.php");
    $title_3 = "Logistics Materials Sub Locations";

    $id = "id_sub_loc";
    $descriptions = "sublocation_descriptions";
    $definitions = "sublocation_definitions";

    $lien_add = "mat_log_sub_loc/add.php";
    $lien_edit = "mat_log_sub_loc/edit.php"; 

    require_once("../../Layout/Settings/items_index/layout.php");
?>