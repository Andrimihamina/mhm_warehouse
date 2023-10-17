<?php
if($abbrev_value == "MED"){
    // VARIABLE ID FLUX
    $code_flux = str_replace("$id","", $cles);
    $code_flux_in = "code-flux-" . "$code_flux";

    // ID FLUX
    $ID_flux = $_POST["$code_flux_in"];

    // QUANTITY IN
    $var_qt_in = "qt" ."-". $id  . $ID_flux;
    $QT = $_POST["$var_qt_in"];

    // PRICE IN
    $var_pr_in = "pr" ."-". $id . $ID_flux;
    $Prices = $_POST["$var_pr_in"];

    // ID ABREV
    $identifiant = $id . $ID_flux;
    $identifiant =$_POST["$identifiant"];

    require("../../../../sql/flux/inputs/update_flux.php");
    require("../../../../sql/flux/inputs/categories/medicines.php");
    }
?>