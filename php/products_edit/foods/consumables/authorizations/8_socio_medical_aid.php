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
========================  SPONSORSHIPS =============================
*/
//MEDICAL SUPPORT
        $sponsorships_medical_support = isSet($_POST["sponsorships_medical_support-$id"]) ? 1 : 0;
//MILK PROGRAM
        $sponsorships_milk_program = isSet($_POST["sponsorships_milk_program-$id"]) ? 1 : 0;
//FAMILLES
        $sponsorships_familles = isSet($_POST["sponsorships_familles-$id"]) ? 1 : 0;
//MHM STAFF KIDS
        $sponsorships_mhm_staff_kids = isSet($_POST["sponsorships_mhm_staff_kids-$id"]) ? 1 : 0;
//HEALTHY FOODS
        $sponsorships_healthy_foods = isSet($_POST["sponsorships_healthy_foods-$id"]) ? 1 : 0;
//MHM STAFF FAMILLES
        $sponsorships_mhm_staff_familles = isSet($_POST["sponsorships_mhm_staff_familles-$id"]) ? 1 : 0;
//PREGNANCIES
        $sponsorships_preganancies = isSet($_POST["sponsorships_preganancies-$id"]) ? 1 : 0;
//KIDS
        $sponsorships_kids = isSet($_POST["sponsorships_kids-$id"]) ? 1 : 0;
//SCHOOL
        $sponsorships_school = isSet($_POST["sponsorships_school-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_cons_foo_f_8_socio_medical_aid.php");
    }
}
