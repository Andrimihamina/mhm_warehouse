<?php
//INSERTION
if($quantity_added !="" AND $purchase_price !=""){
    $sql = "INSERT INTO `flux_in` 
    (`id_flux_in`,  `created_date`, 
    `nbr_in`, `id_in`,
    `purchase_date`, `suppliers`, `Proforma_number`, 
    `bill_number`, `bill_scan`, `modus_payement`, `payment_due_date`, 
    `purchase_comments`, 
    `categories`, 
    `id_code`, `id_abrev_code`, `descriptions`, 
    `quantity_added`, `purchase_price`, 
    `name_adding`, 
    `done`,`cancel`) VALUES 
    (NULL, current_timestamp(), 
    '$nbr_in', '$id_code_in', 
    '$purchase_date','$suppliers', '$proforma_number', 
    '$bill_number', '$bill_scan', '$modus_payement', '$payment_due_date', 
    '$purchase_comments', 
    '$categories', 
    '$id', '$id_abrev_code', '$descriptions', 
    '$quantity_added', '$purchase_price', 
    '$name_adding', 
    0, 0)";

    $query_cons_foo = $db->prepare($sql);
    $query_cons_foo->execute();
}

?>