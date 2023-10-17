<?php
    $settings_sql = include_once("../../sql/functions/location/technicals/materials/sub.php");
    $title_3 = "Technicals Materials Sub Locations";

    $id = "id_sub_loc";
    $descriptions = "sublocation_descriptions";
    $definitions = "sublocation_definitions";

    $lien_add = "mat_tec_sub_loc/add.php";
    $lien_edit = "mat_tec_sub_loc/edit.php"; 

    require_once("../../Layout/Settings/items_index/layout.php");
?>