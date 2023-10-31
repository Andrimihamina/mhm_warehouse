<?php
    $sql_out= "SELECT flux_out.id_flux_out, flux_out.created_date, flux_out.id_out, flux_out.services, flux_out.descriptions, flux_out.quantity_out, flux_out.orderer, flux_out.name_resp_storage 
            FROM flux_out WHERE done_resp_storage = 1 AND services =$id_service";
    $outs = $db->query($sql_out);
    $outs= $outs->fetchAll();
?>