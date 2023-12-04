<?php
if($abbrev_value == "MED"){
    // VARIABLE ID FLUX
    $code_flux = str_replace("$id","", $cles);
    $code_flux_out = "code-flux-" . "$code_flux";

    // ID FLUX
    $ID_flux = $_POST["$code_flux_out"];

    // QUANTITY IN
    $var_qt_in = "qt" ."-". $id  . $ID_flux;
    $QT = $_POST["$var_qt_in"];

    // ID ABREV
    $identifiant = $id . $ID_flux;
    $identifiant =$_POST["$identifiant"];

    // RESPONSABLE STORAGE 
    $user_storage = $_SESSION["user"]["username"];

    require("../../../../sql/flux/outputs/order_update_flux.php");
    require("../../../../sql/flux/outputs/categories/medicines.php");
    
    require("../../../../sql/flux/outputs/categories/patient_system_medicine.php");
    }
?>