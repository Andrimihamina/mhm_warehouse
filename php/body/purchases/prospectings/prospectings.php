<?php
require_once "../../env/dns_warehouse.php";

// MEDICAL
    // MEDICINE
        if($prospecting_med = mysqli_query($dbc, "SELECT * FROM `medicine_quantity` INNER JOIN `medicine_from` ON medicine_quantity.id_med = medicine_from.id_med WHERE `stock` < `quantity_minimal`"))
            {$prospecting_med = mysqli_num_rows($prospecting_med);}

    // CONSUMABLES
        if($prospecting_cons_med = mysqli_query($dbc, "SELECT * FROM `cons_med_quantity` INNER JOIN `cons_med_from` ON cons_med_quantity.id_cons_med = cons_med_from.id_cons_med WHERE `stock` < `quantity_minimal`"))
            {$Prospecting_cons_med = mysqli_num_rows($prospecting_cons_med);}

    // MATERIALS
        if($prospecting_mat_med = mysqli_query($dbc, "SELECT * FROM `mat_med_quantity` INNER JOIN `mat_med_from` ON mat_med_quantity.id_mat_med = mat_med_from.id_mat_med WHERE `stock` < `quantity_minimal`"))
            {$Prospecting_mat_med= mysqli_num_rows($prospecting_mat_med);}

// LOGISTICS
    // CONSUMABLES
        if($prospecting_cons_log = mysqli_query($dbc, "SELECT * FROM `cons_log_quantity` INNER JOIN `cons_log_from` ON cons_log_quantity.id_cons_log = cons_log_from.id_cons_log WHERE `stock` < `quantity_minimal`"))
            {$Prospecting_cons_log= mysqli_num_rows($prospecting_cons_log);}
    // MATERIALS
        if($prospecting_mat_log = mysqli_query($dbc, "SELECT * FROM `mat_log_quantity` INNER JOIN `mat_log_from` ON mat_log_quantity.id_mat_log = mat_log_from.id_mat_log WHERE `stock` < `quantity_minimal`"))
            {$Prospecting_mat_log= mysqli_num_rows($prospecting_mat_log);}

// TECHNICALS
    // CONSUMABLES
        if($prospecting_cons_tec = mysqli_query($dbc, "SELECT * FROM `cons_tec_quantity` INNER JOIN `cons_tec_from` ON cons_tec_quantity.id_cons_tec = cons_tec_from.id_cons_tec WHERE `stock` < `quantity_minimal`"))
            {$Prospecting_cons_tec= mysqli_num_rows($prospecting_cons_tec);}
    // MATERIALS
        if($prospecting_mat_tec = mysqli_query($dbc, "SELECT * FROM `mat_tec_quantity` INNER JOIN `mat_tec_from` ON mat_tec_quantity.id_mat_tec = mat_tec_from.id_mat_tec WHERE `stock` < `quantity_minimal`"))
            {$Prospecting_mat_tec= mysqli_num_rows($prospecting_mat_tec);}

// IT AND COMMUNICATION
    // CONSUMABLES
        if($prospecting_cons_itc = mysqli_query($dbc, "SELECT * FROM `cons_itc_quantity` INNER JOIN `cons_itc_from` ON cons_itc_quantity.id_cons_itc = cons_itc_from.id_cons_itc WHERE `stock` < `quantity_minimal`"))
            {$Prospecting_cons_itc= mysqli_num_rows($prospecting_cons_itc);}
    // MATERIALS
        if($prospecting_mat_itc = mysqli_query($dbc, "SELECT * FROM `mat_itc_quantity` INNER JOIN `mat_itc_from` ON mat_itc_quantity.id_mat_itc = mat_itc_from.id_mat_itc WHERE `stock` < `quantity_minimal`"))
            {$Prospecting_mat_itc= mysqli_num_rows($prospecting_mat_itc);}

// FOODS
    // CONSUMABLES
        if($prospecting_cons_foo = mysqli_query($dbc, "SELECT * FROM `cons_foo_quantity` INNER JOIN `cons_foo_from` ON cons_foo_quantity.id_cons_foo = cons_foo_from.id_cons_foo WHERE `stock` < `quantity_minimal` "))
            {$Prospecting_cons_foo= mysqli_num_rows($prospecting_cons_foo);}
    // MATERIALS
        if($prospecting_mat_foo = mysqli_query($dbc, "SELECT * FROM `mat_foo_quantity` INNER JOIN `mat_foo_from` ON mat_foo_quantity.id_mat_foo = mat_foo_from.id_mat_foo WHERE `stock` < `quantity_minimal` "))
            {$Prospecting_mat_foo= mysqli_num_rows($prospecting_mat_foo);}
// REAL ESTAT
        if($prospecting_mat_imo = mysqli_query($dbc, "SELECT * FROM `mat_imo_quantity` INNER JOIN `mat_imo_from` ON mat_imo_quantity.id_mat_imo = mat_imo_from.id_mat_imo WHERE `stock` < `quantity_minimal` "))
            {$Prospecting_mat_imo= mysqli_num_rows($prospecting_mat_imo);}
?>