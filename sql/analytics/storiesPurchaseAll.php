<?php
    $sql_in= "SELECT flux_in.id_in, flux_in.created_date, flux_in.suppliers, flux_in.suppliers, suppliers.name, flux_in.categories,
                    flux_in.descriptions, flux_in.quantity_added, flux_in.purchase_price, flux_in.name_adding 
                FROM flux_in 
                INNER JOIN suppliers ON suppliers.id_suppliers = flux_in.suppliers 
                WHERE done = 1 ORDER BY created_date ASC";
    $ins = $db->query($sql_in);
    $ins= $ins->fetchAll();
?>