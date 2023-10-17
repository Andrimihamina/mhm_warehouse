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
========================  VEHICLES =============================
*/
//ISUZU BLUE
        $vehicles_isuzu_bleu = isSet($_POST["vehicles_isuzu_bleu-$id"]) ? 1 : 0;
//ISUZU GREEN
        $vehicles_isuzu_green = isSet($_POST["vehicles_isuzu_green-$id"]) ? 1 : 0;
//GALOPPER
        $vehicles_galopper = isSet($_POST["vehicles_galopper-$id"]) ? 1 : 0;
//DAIHATSU
        $vehicles_daihatsu = isSet($_POST["vehicles_daihatsu-$id"]) ? 1 : 0;
//PRADO
        $vehicles_prado = isSet($_POST["vehicles_prado-$id"]) ? 1 : 0;
//STAREX
        $vehicles_starex = isSet($_POST["vehicles_starex-$id"]) ? 1 : 0;
// SPRINTER 
        $vehicles_sprinter = isSet($_POST["vehicles_sprinter-$id"]) ? 1 : 0;        
//MOTORBIKE HONDA
        $vehicles_motorbike_honda = isSet($_POST["vehicles_motorbike_honda-$id"]) ? 1 : 0;
//SCOOTER BLEU
        $vehicles_scooter_bleu = isSet($_POST["vehicles_scooter_bleu-$id"]) ? 1 : 0;
//SCOOTER BLEU
        $vehicles_others = isSet($_POST["vehicles_others-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_cons_tec_f_16_vehicles.php");
    }
}
