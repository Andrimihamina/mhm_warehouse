<?php
    $settings_sql = include_once("../../sql/functions/classifications/classifications.php");
    $title_3 = "Main Classifications";

    $id = "id_class";
    $descriptions = "classifications_descriptions";
    $definitions = "classifications_definitions";
    
    $lien_add = "man_classifications/add.php";
    $lien_edit = "man_classifications/edit.php"; 

    require_once("../../Layout/Settings/items_index/layout.php");
?>