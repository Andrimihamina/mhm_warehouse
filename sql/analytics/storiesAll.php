<?php
    $sql_out= "SELECT flux_out.id_flux_out, flux_out.created_date, flux_out.id_out, flux_out.services, flux_out.descriptions, flux_out.quantity_out, flux_out.orderer, flux_out.name_resp_storage, services.services_descriptions 
                FROM flux_out 
                INNER JOIN services ON services.id_service = flux_out.services 
                WHERE done_resp_storage = 1";
    $outs = $db->query($sql_out);
    $outs= $outs->fetchAll();
?>