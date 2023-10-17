<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
/*
========================  PASSIVE =============================
*/
/*
========================  ADMIN =============================
*/
//ADMIN
        $admin_admin = isSet($_POST["admin_admin-$id"]) ? 1 : 0;
//LOGISTIC
        $admin_logistic = isSet($_POST["admin_logistic-$id"]) ? 1 : 0;
//FINANCE
        $admin_finance = isSet($_POST["admin_finance-$id"]) ? 1 : 0;
//IT
        $admin_it = isSet($_POST["admin_it-$id"]) ? 1 : 0;
//QM
        $admin_qm = isSet($_POST["admin_qm-$id"]) ? 1 : 0;
//COMMUNICATION
        $admin_communication = isSet($_POST["admin_communication-$id"]) ? 1 : 0;
//HR
        $HR = isSet($_POST["HR-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/medicals/medicines/authorizations/12_admin.php");
    }
}
