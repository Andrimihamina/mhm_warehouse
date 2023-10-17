<?php
    if($abbrev_value_indentif == "COS-ITC-"){
    //ID CONS
    $id_cons = substr($cles, 0, 18);

    $code_flux = str_replace("$id_cons", "", $cles);

    //ID du code flux
    $code_flux_out = "code-flux-" . $code_flux;

    //ID DU FLUX IN
    $id_flux_out = $_POST["$code_flux_out"];

    /* CANCEL ORDER CONSUMABLE */
    $sql_flux_out_cancel_cons_itc = "UPDATE `flux_out` SET `done_order` = '1', `cancel` = '1' WHERE `flux_out`.`id_flux_out` = '$id_flux_out'";
    $query_flux_out_cancel_cons_itc= $db->prepare($sql_flux_out_cancel_cons_itc);
        //On execute la requete
    $query_flux_out_cancel_cons_itc->execute();
    }
?>