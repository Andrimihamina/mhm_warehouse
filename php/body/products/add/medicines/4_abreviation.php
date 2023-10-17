<?php
/*
================= PRENDRE L'ABREVIATION =========================
*/
    $med_abrev = substr($actival_name_0,0,5);

    // METTRE L'ABREVIATION EN MAJ
    $med_abrev = strtoupper($med_abrev);

/*
===================CALCULATION LE NOMBRE D'ABREVIATION DANS LE BASE DE DONNE ==========================================
*/

$check_nbr_med_abrev = mysqli_query($dbc,"SELECT * FROM `medicine_id` WHERE `med_abrev` ='$med_abrev'");

$checkrows_nbr_med_abrev=mysqli_num_rows($check_nbr_med_abrev);

if($checkrows_nbr_med_abrev > 0)

{$med_nbr_abrev = $checkrows_nbr_med_abrev + 1;}
else 
{ $med_nbr_abrev = 1;}

/*
======================= COMPULATION DU NOMBRE D'ABREVIATION =================================
*/
//Nombre de caracter du nombre d'abreviaton dans le BD
$nb_char = strlen($checkrows_nbr_med_abrev);
switch($nb_char){
    case 1 :
        $nb_chars = "-00";
        break;
    case 2 :
        $nb_chars = "-0";
        break;
    case 3 :
        $nb_chars = "-";
        break;
}

/*
===================== CODE ABREVIATION ===========================================
*/
$id_code_med = "MED" . "-" . $med_abrev . $nb_chars . $med_nbr_abrev;
$id_code_med_patient_system = $med_abrev . $nb_chars . $med_nbr_abrev;
?>