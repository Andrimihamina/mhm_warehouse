<?php

/*
======================================== CONNECT DNS PATIENTS SYSTEM ===================================================
*/

    $sql_patients_systems_inventory= "INSERT INTO `inventories` (`id`, `created_at`, `updated_at`, `item_id`, `general`, `graceCenter`, `stork`, `bloc`, `midPink`, `pediatric`, `anesthetist`, `ambulance`, `glDoctor`, `dentDoctor`, `midMob`, `dentMob`, `glMob`, `office`, `houseHold`, `joyCenter`, `technical`, `id_med`, `id_cons_med`) VALUES 
    (NULL, current_timestamp(), current_timestamp(), '$id_items', '$quantity_initial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,NULL,'$cons_med_id')";
    // On prerare la requete
    $query_systems_inventory = $db_p ->prepare($sql_patients_systems_inventory);
    //On execute la requete
   $query_systems_inventory->execute();
?>