<?php
    $settings_sql = include_once("../../sql/functions/classifications/subclassifications.php");
    $title_3 = "Sub Classifications";

    $id = "id_med_sub_class";
    $descriptions = "med_subclassification_description";
    $definitions = "med_subclassification_definition";

    $lien_add = "sub_classifications/add.php";
    $lien_edit = "sub_classifications/edit.php"; 

    require_once("../../Layout/Settings/items_index/layout.php");
?>