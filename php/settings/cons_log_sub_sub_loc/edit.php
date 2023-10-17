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

        $tbl_check = "cos_log_subsublocation";
        $colums_id = "id_subsubloc";
        $colums_des = "subsublocation_descriptions";
        $colums_def = "subsublocation_definitions";
        $link_set ="log_cons_sub_sub_loc.php";


        /*UPDATE*/
        $sql_edit = "UPDATE `$tbl_check` SET `$colums_des` = '$edit_descriptions', `$colums_def` = '$edit_definitions' WHERE `$tbl_check`.`$colums_id` = $id";
        $query_edit= $db->prepare($sql_edit);
        $query_edit->execute();

        header("Location: ../../../Layout/Settings/$link_set");
    }
}
    
?>