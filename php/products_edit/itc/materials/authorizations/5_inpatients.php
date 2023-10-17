<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
/*
======================== ACTIVE =============================
*/

/*
========================  INPATIENTS =============================
*/
//BABY ROOM
        $inpatients_Baby_Room = isSet($_POST["inpatients_Baby_Room-$id"]) ? 1 : 0;
//STORK CENTER
        $inpatients_Stork_Center = isSet($_POST["inpatients_Stork_Center-$id"]) ? 1 : 0;
//NEONATAL INTENSIVE CARE
        $inpatients_Neonatal_Intensive = isSet($_POST["inpatients_Neonatal_Intensive-$id"]) ? 1 : 0;
//NEONATAL KANGOROO CARE
        $inpatients_Neonatal_Kangaroo = isSet($_POST["inpatients_Neonatal_Kangaroo-$id"]) ? 1 : 0;
//PEDIATRIC ONE
        $inpatients_pediatric_one = isSet($_POST["inpatients_pediatric_one-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_mat_itc_f_5_inpatients.php");
    }
}
