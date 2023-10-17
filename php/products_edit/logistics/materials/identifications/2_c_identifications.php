<?php
// UNITS - SIZES
require_once("../../sql/functions/products_add/affiche_states_med.php");

$name_check = $Descriptions ." ". $model;

// COUNT NOMBRE NAME
$sql_Name_check = mysqli_query($dbc,"SELECT * FROM `mat_log_id` WHERE `name_check` = '$name_check'");
$checkrows_name_check =mysqli_num_rows($sql_Name_check);

if($checkrows_name_check > 0){$nbr_name_check = $checkrows_name_check + 1;}else { $nbr_name_check = 1;}

/*============================== NBR NAME CHECK=======================*/
$nb_char_name_check = strlen($nbr_name_check);
switch($nb_char_name_check){
    case 1 :
        $nb_chars_name_check = "No. 00";
        break;
    case 2 :
        $nb_chars_name_check = "No. 0";
        break;
    case 3 :
        $nb_chars_name_check = "No. ";
        break;
}

$Descriptions = $name_check ." ". $nb_chars_name_check ."". $nbr_name_check;

 ?>