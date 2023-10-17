<?php
if($quantity_out !=""){
    $sql = "INSERT INTO `flux_out` 
    (`id_flux_out`, `created_date`, `nbr_chr`, `id_out`, 
    `priority`, `services`, `patients_number`, 
    `categories`, `service_out`, 
    `id_code`, `id_abrev_code`, `descriptions`, 
    `quantity_out`, 
    `orderer`, `done_order`, `cancel`, `done_resp_storage`, 
    `name_resp_storage`) VALUES 
    (NULL, current_timestamp(), '$nbr_chr', '$id_code_out', 
    '$priority', '$services', NULL, 
    '$categories', '$service_out', 
    '$id', '$id_abrev_code', '$descriptions', 
    '$quantity_out', '$name_adding', '0', '0', '0', 'NULL')";

    $query_out = $db->prepare($sql);
   
    $query_out ->execute();

    header("Location: ../../Layout/Flux/outputs_register.php");
}

?>