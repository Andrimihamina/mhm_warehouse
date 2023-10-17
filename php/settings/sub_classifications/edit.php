<?php
session_start();
require_once("../../../env/dns_warehouse.php");

$_SESSION["error_none"]=[];

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;

        include_once ("../1_edit_variables.php");

        $tbl_check = "med_sub_classifications";
        $colums_id = "id_med_sub_class";
        $colums_des = "med_subclassification_description";
        $colums_def = "med_subclassification_definition";
        $link_set ="sub_classifications.php";

        /*UPDATE*/
        $sql_edit = "UPDATE `$tbl_check` SET `$colums_des` = '$edit_descriptions', `$colums_def` = '$edit_definitions' WHERE `$tbl_check`.`$colums_id` = $id";
        $query_edit= $db->prepare($sql_edit);
        $query_edit->execute();

        header("Location: ../../../Layout/Settings/$link_set");
    }
}
    
?>