<?php
    $settings_sql = include_once("../../sql/functions/location/medical/consumables/man.php");
    $title_3 = "Medical Consumables Main Locations";

    $id = "id_location";
    $descriptions = "location_descriptions";
    $definitions = "location_definitions";
  
    $lien_add = "cons_med_main_loc/add.php";
    $lien_edit = "cons_med_main_loc/edit.php"; 

    require_once("../../Layout/Settings/items_index/layout.php");
?>