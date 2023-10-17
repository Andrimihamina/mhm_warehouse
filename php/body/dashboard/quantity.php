<?php
require_once "../../env/dns_warehouse.php";

// MEDICAL
    // MEDICINE 
        // NUMBER OF TYPES
        if($result_med = mysqli_query($dbc, "SELECT * FROM  `medicine_id`"))
            {$Nbr_Type_med =mysqli_num_rows($result_med);}
        // NEEDED FROM MADAGASCAR
        if($madagasikar_med = mysqli_query($dbc, "SELECT * FROM `medicine_quantity` INNER JOIN `medicine_from` ON medicine_quantity.id_med = medicine_from.id_med WHERE `stock` < `quantity_minimal`  AND `madagaskar`= 1"))
            {$Prospecting_med_Mada = mysqli_num_rows($madagasikar_med);}
        // NEEDED FROM GERMANY
        if($germany_med= mysqli_query($dbc, "SELECT * FROM `medicine_quantity` INNER JOIN `medicine_from` ON medicine_quantity.id_med = medicine_from.id_med WHERE `stock` < `quantity_minimal` AND `germany`= 1 AND `madagaskar`= 0"))
            {$Prospecting_med_Ger = mysqli_num_rows($germany_med);}

    // CONSUMABLES
        // NUMBER OF TYPES
        if($result_cons_med = mysqli_query($dbc, "SELECT * FROM  `cons_med_id`"))
            {$Nbr_Type_cons_med =mysqli_num_rows($result_cons_med);}
        // NEEDED FROM MADAGASCAR
        if($madagasikar_cons_med = mysqli_query($dbc, "SELECT * FROM `cons_med_quantity` INNER JOIN `cons_med_from` ON cons_med_quantity.id_cons_med = cons_med_from.id_cons_med WHERE `stock` < `quantity_minimal`  AND `madagaskar`= 1"))
            {$Prospecting_cons_med_Mada = mysqli_num_rows($madagasikar_cons_med);}
        // NEEDED FROM GERMANY
        if($germany_cons_med= mysqli_query($dbc, "SELECT * FROM `cons_med_quantity` INNER JOIN `cons_med_from` ON cons_med_quantity.id_cons_med = cons_med_from.id_cons_med WHERE `stock` < `quantity_minimal` AND `germany`= 1 AND `madagaskar`= 0"))
            {$Prospecting_cons_med_Ger = mysqli_num_rows($germany_cons_med);}

    // MATERIALS
        // NUMBER OF TYPES
        if($result_mat_med = mysqli_query($dbc, "SELECT * FROM  `mat_med_id`"))
            {$Nbr_Type_mat_med =mysqli_num_rows($result_mat_med);}
        // NEEDED FROM MADAGASCAR
        if($madagasikar_mat_med = mysqli_query($dbc, "SELECT * FROM `mat_med_quantity` INNER JOIN `mat_med_from` ON mat_med_quantity.id_mat_med = mat_med_from.id_mat_med WHERE `stock` < `quantity_minimal`  AND `madagaskar`= 1"))
            {$Prospecting_mat_med_Mada = mysqli_num_rows($madagasikar_mat_med);}
        // NEEDED FROM GERMANY
        if($germany_mat_med= mysqli_query($dbc, "SELECT * FROM `mat_med_quantity` INNER JOIN `mat_med_from` ON mat_med_quantity.id_mat_med = mat_med_from.id_mat_med WHERE `stock` < `quantity_minimal` AND `germany`= 1 AND `madagaskar`= 0"))
            {$Prospecting_mat_med_Ger = mysqli_num_rows($germany_mat_med);}

// LOGISTICS
    // CONSUMABLES
        // NUMBER OF TYPES
        if($result_cons_log = mysqli_query($dbc, "SELECT * FROM  `cons_log_id`"))
            {$Nbr_Type_cons_log =mysqli_num_rows($result_cons_log);}
        // NEEDED FROM MADAGASCAR
        if($madagasikar_cons_log = mysqli_query($dbc, "SELECT * FROM `cons_log_quantity` INNER JOIN `cons_log_from` ON cons_log_quantity.id_cons_log = cons_log_from.id_cons_log WHERE `stock` < `quantity_minimal`  AND `madagaskar`= 1"))
            {$Prospecting_cons_log_Mada = mysqli_num_rows($madagasikar_cons_log);}
        // NEEDED FROM GERMANY
        if($germany_cons_log= mysqli_query($dbc, "SELECT * FROM `cons_log_quantity` INNER JOIN `cons_log_from` ON cons_log_quantity.id_cons_log = cons_log_from.id_cons_log WHERE `stock` < `quantity_minimal` AND `germany`= 1 AND `madagaskar`= 0"))
            {$Prospecting_cons_log_Ger = mysqli_num_rows($germany_cons_log);}
    // MATERIALS
        // NUMBER OF TYPES
        if($result_mat_log = mysqli_query($dbc, "SELECT * FROM  `mat_log_id`"))
            {$Nbr_Type_mat_log =mysqli_num_rows($result_mat_log);}
        // NEEDED FROM MADAGASCAR
        if($madagasikar_mat_log = mysqli_query($dbc, "SELECT * FROM `mat_log_quantity` INNER JOIN `mat_log_from` ON mat_log_quantity.id_mat_log = mat_log_from.id_mat_log WHERE `stock` < `quantity_minimal`  AND `madagaskar`= 1"))
            {$Prospecting_mat_log_Mada = mysqli_num_rows($madagasikar_mat_log);}
        // NEEDED FROM GERMANY
        if($germany_mat_log= mysqli_query($dbc, "SELECT * FROM `mat_log_quantity` INNER JOIN `mat_log_from` ON mat_log_quantity.id_mat_log = mat_log_from.id_mat_log WHERE `stock` < `quantity_minimal` AND `germany`= 1 AND `madagaskar`= 0"))
            {$Prospecting_mat_log_Ger = mysqli_num_rows($germany_mat_log);}

// TECHNICALS
    // CONSUMABLES
        // NUMBER OF TYPES
        if($result_cons_tec = mysqli_query($dbc, "SELECT * FROM  `cons_tec_id`"))
            {$Nbr_Type_cons_tec =mysqli_num_rows($result_cons_tec);}
        // NEEDED FROM MADAGASCAR
        if($madagasikar_cons_tec = mysqli_query($dbc, "SELECT * FROM `cons_tec_quantity` INNER JOIN `cons_tec_from` ON cons_tec_quantity.id_cons_tec = cons_tec_from.id_cons_tec WHERE `stock` < `quantity_minimal`  AND `madagaskar`= 1"))
            {$Prospecting_cons_tec_Mada = mysqli_num_rows($madagasikar_cons_tec);}
        // NEEDED FROM GERMANY
        if($germany_cons_tec= mysqli_query($dbc, "SELECT * FROM `cons_tec_quantity` INNER JOIN `cons_tec_from` ON cons_tec_quantity.id_cons_tec = cons_tec_from.id_cons_tec WHERE `stock` < `quantity_minimal` AND `germany`= 1 AND `madagaskar`= 0"))
            {$Prospecting_cons_tec_Ger = mysqli_num_rows($germany_cons_tec);}
    // MATERIALS
        // NUMBER OF TYPES
        if($result_mat_tec = mysqli_query($dbc, "SELECT * FROM  `mat_tec_id`"))
            {$Nbr_Type_mat_tec =mysqli_num_rows($result_mat_tec);}
        // NEEDED FROM MADAGASCAR
        if($madagasikar_mat_tec = mysqli_query($dbc, "SELECT * FROM `mat_tec_quantity` INNER JOIN `mat_tec_from` ON mat_tec_quantity.id_mat_tec = mat_tec_from.id_mat_tec WHERE `stock` < `quantity_minimal`  AND `madagaskar`= 1"))
            {$Prospecting_mat_tec_Mada = mysqli_num_rows($madagasikar_mat_tec);}
        // NEEDED FROM GERMANY
        if($germany_mat_tec= mysqli_query($dbc, "SELECT * FROM `mat_tec_quantity` INNER JOIN `mat_tec_from` ON mat_tec_quantity.id_mat_tec = mat_tec_from.id_mat_tec WHERE `stock` < `quantity_minimal` AND `germany`= 1 AND `madagaskar`= 0"))
            {$Prospecting_mat_tec_Ger = mysqli_num_rows($germany_mat_tec);}

// IT AND COMMUNICATION
    // CONSUMABLES
        // NUMBER OF TYPES
        if($result_cons_itc = mysqli_query($dbc, "SELECT * FROM  `cons_itc_id`"))
            {$Nbr_Type_cons_itc =mysqli_num_rows($result_cons_itc);}
        // NEEDED FROM MADAGASCAR
        if($madagasikar_cons_itc = mysqli_query($dbc, "SELECT * FROM `cons_itc_quantity` INNER JOIN `cons_itc_from` ON cons_itc_quantity.id_cons_itc = cons_itc_from.id_cons_itc WHERE `stock` < `quantity_minimal`  AND `madagaskar`= 1"))
            {$Prospecting_cons_itc_Mada = mysqli_num_rows($madagasikar_cons_itc);}
        // NEEDED FROM GERMANY
        if($germany_cons_itc= mysqli_query($dbc, "SELECT * FROM `cons_itc_quantity` INNER JOIN `cons_itc_from` ON cons_itc_quantity.id_cons_itc = cons_itc_from.id_cons_itc WHERE `stock` < `quantity_minimal` AND `germany`= 1 AND `madagaskar`= 0"))
            {$Prospecting_cons_itc_Ger = mysqli_num_rows($germany_cons_itc);}
    // MATERIALS
        // NUMBER OF TYPES
        if($result_mat_itc = mysqli_query($dbc, "SELECT * FROM  `mat_itc_id`"))
            {$Nbr_Type_mat_itc =mysqli_num_rows($result_mat_itc);}
        // NEEDED FROM MADAGASCAR
        if($madagasikar_mat_itc = mysqli_query($dbc, "SELECT * FROM `mat_itc_quantity` INNER JOIN `mat_itc_from` ON mat_itc_quantity.id_mat_itc = mat_itc_from.id_mat_itc WHERE `stock` < `quantity_minimal`  AND `madagaskar`= 1"))
            {$Prospecting_mat_itc_Mada = mysqli_num_rows($madagasikar_mat_itc);}
        // NEEDED FROM GERMANY
        if($germany_mat_itc= mysqli_query($dbc, "SELECT * FROM `mat_itc_quantity` INNER JOIN `mat_itc_from` ON mat_itc_quantity.id_mat_itc = mat_itc_from.id_mat_itc WHERE `stock` < `quantity_minimal` AND `germany`= 1 AND `madagaskar`= 0"))
            {$Prospecting_mat_itc_Ger = mysqli_num_rows($germany_mat_itc);}

// FOODS
    // CONSUMABLES
        // NUMBER OF TYPES
        if($result_cons_foo = mysqli_query($dbc, "SELECT * FROM  `cons_foo_id`"))
            {$Nbr_Type_cons_foo =mysqli_num_rows($result_cons_foo);}
        // NEEDED FROM MADAGASCAR
        if($madagasikar_cons_foo = mysqli_query($dbc, "SELECT * FROM `cons_foo_quantity` INNER JOIN `cons_foo_from` ON cons_foo_quantity.id_cons_foo = cons_foo_from.id_cons_foo WHERE `stock` < `quantity_minimal`  AND `madagaskar`= 1"))
            {$Prospecting_cons_foo_Mada = mysqli_num_rows($madagasikar_cons_foo);}
        // NEEDED FROM GERMANY
        if($germany_cons_foo= mysqli_query($dbc, "SELECT * FROM `cons_foo_quantity` INNER JOIN `cons_foo_from` ON cons_foo_quantity.id_cons_foo = cons_foo_from.id_cons_foo WHERE `stock` < `quantity_minimal` AND `germany`= 1 AND `madagaskar`= 0"))
            {$Prospecting_cons_foo_Ger = mysqli_num_rows($germany_cons_foo);}
    // MATERIALS
        // NUMBER OF TYPES
        if($result_mat_foo = mysqli_query($dbc, "SELECT * FROM  `mat_foo_id`"))
            {$Nbr_Type_mat_foo =mysqli_num_rows($result_mat_foo);}
        // NEEDED FROM MADAGASCAR
        if($madagasikar_mat_foo = mysqli_query($dbc, "SELECT * FROM `mat_foo_quantity` INNER JOIN `mat_foo_from` ON mat_foo_quantity.id_mat_foo = mat_foo_from.id_mat_foo WHERE `stock` < `quantity_minimal`  AND `madagaskar`= 1"))
            {$Prospecting_mat_foo_Mada = mysqli_num_rows($madagasikar_mat_foo);}
        // NEEDED FROM GERMANY
        if($germany_mat_foo= mysqli_query($dbc, "SELECT * FROM `mat_foo_quantity` INNER JOIN `mat_foo_from` ON mat_foo_quantity.id_mat_foo = mat_foo_from.id_mat_foo WHERE `stock` < `quantity_minimal` AND `germany`= 1 AND `madagaskar`= 0"))
            {$Prospecting_mat_foo_Ger = mysqli_num_rows($germany_mat_foo);}
// REAL ESTAT
        // NUMBER OF TYPES
        if($result_mat_imo = mysqli_query($dbc, "SELECT * FROM  `mat_imo_id`"))
            {$Nbr_Type_mat_imo =mysqli_num_rows($result_mat_imo);}
        // NEEDED FROM MADAGASCAR
        if($madagasikar_mat_imo = mysqli_query($dbc, "SELECT * FROM `mat_imo_quantity` INNER JOIN `mat_imo_from` ON mat_imo_quantity.id_mat_imo = mat_imo_from.id_mat_imo WHERE `stock` < `quantity_minimal`  AND `madagaskar`= 1"))
            {$Prospecting_mat_imo_Mada = mysqli_num_rows($madagasikar_mat_imo);}
        // NEEDED FROM GERMANY
        if($germany_mat_imo= mysqli_query($dbc, "SELECT * FROM `mat_imo_quantity` INNER JOIN `mat_imo_from` ON mat_imo_quantity.id_mat_imo = mat_imo_from.id_mat_imo WHERE `stock` < `quantity_minimal` AND `germany`= 1 AND `madagaskar`= 0"))
            {$Prospecting_mat_imo_Ger = mysqli_num_rows($germany_mat_imo);}
?>