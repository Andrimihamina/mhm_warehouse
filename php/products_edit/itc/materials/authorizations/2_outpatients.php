<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
/*======================== ACTIVE =============================*/
/*========================  MEDICAL =============================*/
/*========================  OUTPATIENTS =============================*/
//JOY CENTER
        $outpatients_Joy_Center = isSet($_POST["outpatients_Joy_Center-$id"]) ? 1 : 0;
//EMERGENCY
        $outpatients_Emergency = isSet($_POST["outpatients_Emergency-$id"]) ? 1 : 0;
//GRACE CENTER
        $outpatients_Grace_Center = isSet($_POST["outpatients_Grace_Center-$id"]) ? 1 : 0;
//OCCUPATIONAL THERAPY
        $outpatients_occupational_therapy = isSet($_POST["outpatients_occupational_therapy-$id"]) ? 1 : 0;
//GENERAL DOCTORS
        $outpatients_general_Doctors = isSet($_POST["outpatients_general_Doctors-$id"]) ? 1 : 0;
//PEDIATRIC
        $outpatients_pediatric = isSet($_POST["outpatients_pediatric-$id"]) ? 1 : 0;
//DENTAL
        $outpatients_dental = isSet($_POST["outpatients_dental-$id"]) ? 1 : 0;
//DERMATHOLOGY
        $outpatients_dermathology = isSet($_POST["outpatients_dermathology-$id"]) ? 1 : 0;
//ULTRASOUND
        $outpatients_Ultrasound = isSet($_POST["outpatients_Ultrasound-$id"]) ? 1 : 0;
//OBSTETRICAL
        $outpatients_obstetrical = isSet($_POST["outpatients_obstetrical-$id"]) ? 1 : 0;
//PLANNING FAMILIAL
        $outpatients_Planning_Familial = isSet($_POST["outpatients_Planning_Familial-$id"]) ? 1 : 0;
//YUCK ROOM
        $outpatients_Yuck_Room = isSet($_POST["outpatients_Yuck_Room-$id"]) ? 1 : 0;


        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_mat_itc_f_2_outpatients.php");
    }
}
