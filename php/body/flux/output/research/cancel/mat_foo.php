<?php
    if($abbrev_value_indentif == "MAT-FOO-"){
    //ID mat
    $id_mat = substr($cles, 0, 18);

    $code_flux = str_replace("$id_mat", "", $cles);

    //ID du code flux
    $code_flux_out = "code-flux-" . $code_flux;

    //ID DU FLUX IN
    $id_flux_out = $_POST["$code_flux_out"];

    /* CANCEL ORDER matUMABLE */
    $sql_flux_out_cancel_mat_med = "UPDATE `flux_out` SET `done_order` = '1', `cancel` = '1' WHERE `flux_out`.`id_flux_out` = '$id_flux_out'";
    $query_flux_out_cancel_mat_med= $db->prepare($sql_flux_out_cancel_mat_med);
        //On execute la requete
    $query_flux_out_cancel_mat_med->execute();
    }
?>