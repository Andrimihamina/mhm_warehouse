<?php
    $settings_sql = include_once("../../sql/functions/location/medical/consumables/sub_sub.php");
    $title_3 = "Medicals Consumables Sub Sub Locations";

    $id = "id_subsubloc";
    $descriptions = "subsublocation_descriptions";
    $definitions = "subsublocation_definitions";
    
    $lien_add = "cons_med_sub_sub_loc/add.php";
    $lien_edit = "cons_med_sub_sub_loc/edit.php"; 

    require_once("../../Layout/Settings/items_index/layout.php");
?>