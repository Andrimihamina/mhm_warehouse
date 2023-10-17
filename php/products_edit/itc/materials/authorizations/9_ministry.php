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
========================  SOCIAL AFFAIRE MINISTRY =============================
*/
//CHAPLINCY
        $social_chaplincy = isSet($_POST["social_chaplincy-$id"]) ? 1 : 0;
//KIDS CLUBS
        $social_kids_club = isSet($_POST["social_kids_club-$id"]) ? 1 : 0;
//PLAYMOBIL
        $social_playmobil = isSet($_POST["social_playmobil-$id"]) ? 1 : 0;
//PRAYER WORKSHIP ALPHA COURS
        $social_prayer = isSet($_POST["social_prayer-$id"]) ? 1 : 0;
//SENSIBILIZATIONS
        $social_sensibilizations = isSet($_POST["social_sensibilizations-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_mat_itc_f_9_ministry.php");
    }
}
