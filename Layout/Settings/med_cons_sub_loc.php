<?php
    $settings_sql = include_once("../../sql/functions/location/medical/consumables/sub.php");
    $title_3 = "Medicals Consumables Sub Locations";

    $id = "id_sub_loc";
    $descriptions = "sublocation_descriptions";
    $definitions = "sublocation_definitions";

    $lien_add = "cons_med_sub_loc/add.php";
    $lien_edit = "cons_med_sub_loc/edit.php"; 

    require_once("../../Layout/Settings/items_index/layout.php");
?>