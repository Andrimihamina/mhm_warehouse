<?php
    $id_flux_out = "$id_flux_out";

        $sql_service = "SELECT * FROM `flux_out` WHERE `id_flux_out` = '$id_flux_out'";
                        
        //On excute directement la requete
        $requete_services = $db->query($sql_service);
    
        //On recupere les donnees (fetch ou fetchall)
        $affiche_services = $requete_services->fetch();

    $services = $affiche_services["services"];

    switch ($services){
        case 9:
            $services = "graceCenter";
            break;
        case 23:
            $services = "stork";
            break;
        case 27:
            $services = "bloc";
            break;
        case 16:
            $services = "midPink";
            break;
        case 24:
            $services = "pediatric";
            break;
        case 27:
            $services = "anesthetist";
            break;
        case 7:
            $services = "ambulance";
            break;
        case 11:
            $services = "glDoctor";
            break;
        case 4:
            $services = "midMob";
            break;
        case 5:
            $services = "dentMob";
            break;
        case 16:
            $services = "glMob";
            break;
        case 49:
            $services = "office";
            break;
        case 82:
            $services = "houseHold";
            break;
        case 2:
            $services = "joyCenter";
            break;
        case 60:
            $services = "technical";
            break;
        default:
            $services = "technical";
    }

    $stock_services_actual_quantity = $affiche_quantite_patient_system_inventory["$services"];

    //SOUSTRACTION DE LA STOCK ACTUELLE ET LE STOCK PRESENTE DE STOCK
    $add_qt_services = $stock_services_actual_quantity + $qt_med_out;

    // UPDATE
    $sql_flux_in_update_qt= "UPDATE `inventories` SET `$services` = '$add_qt_services' WHERE `inventories`.`id_cons_med` = '$id_cons_med'";
    $query_flux_in = $db_p ->prepare($sql_flux_in_update_qt);
    //On execute la requete
    $query_flux_in->execute();

?>