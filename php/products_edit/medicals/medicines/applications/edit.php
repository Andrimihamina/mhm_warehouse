<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
        
        $application = strip_tags($_POST["app-$id"]);
        /* ===================== APPLICATION AFFICHE=========================*/
        include_once ("../../sql/functions/products_edit/affiche_applications.php");

        require_once ("../../sql/functions/products_edit/medicals/medicines/applications.php");
    }
}

?>