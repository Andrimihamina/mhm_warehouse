<?php
if($abbrev_value_indentif == "MAT-MED-"){
    // VARIABLE ID FLUX
    $code_flux = str_replace("$id_cons","", $cles);
    $code_flux_out = "code-flux-" . "$code_flux";

    // ID FLUX
    $ID_flux = $_POST["$code_flux_out"];

    // QUANTITY IN
    $var_qt_in = "qt" ."-". $id_cons  . $ID_flux;
    $QT = $_POST["$var_qt_in"];

    // ID ABREV
    $identifiant = $id_cons . $ID_flux;
    $identifiant =$_POST["$identifiant"];

    require("../../../../sql/flux/outputs/update_flux.php");
    // require("../../../../sql/flux/outputs/categories/mat_med.php");
    }
?>