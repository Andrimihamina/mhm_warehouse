<?php
/*================= PRENDRE L'ABREVIATION ====================*/
    $abreviations = substr($descritpions,0,5);
    // MAJ
    $MAJ_abrev = strtoupper($abreviations);

// NUMBER OF REPETION OF ABREVIATION
require_once ("../../sql/functions/products_add/abreviations.php");
if($NBR_abreviations > 0){$NBR_abrev = $NBR_abreviations + 1;}else{ $NBR_abrev = 1;}

// NUMBER OF CHARACTERS
$NBR_char = strlen($NBR_abreviations);
switch($NBR_char){
    case 1 :
        $NBR_chars = "-00";
        break;
    case 2 :
        $NBR_chars = "-0";
        break;
    case 3 :
        $NBR_chars = "-";
        break;
} 

// COMPULATION
$ID = "$CATEGORIES" . "-" . $MAJ_abrev . $NBR_chars . $NBR_abrev;
$ID_patient_system = $MAJ_abrev . $NBR_chars . $NBR_abrev;
?>