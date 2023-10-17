<?php
require_once "../../env/dns_warehouse.php";
 
// CHECK PARKING
$services = $_SESSION["services"]["services"];
$list_service= "SELECT * FROM `services` WHERE `id_service` = '$services'";
$requete_service= $db->query($list_service);
$requete_service= $requete_service->fetchAll();

$services_parking = $requete_service[0]["active_passive_temporary"];
 switch($services_parking){ 
    case 1 :
        // ACTIVE
        $service_parking = "medicine_authorizations_active";
        break; 
    case 2 :
        // PASSIVE
        $service_parking = "medicine_authorizations_passive";
        break;
    case 3 :
        // TEMPORARY
        $service_parking = "medicine_authorizations_temporary";
        break;
    }

// SERVICES PARKING
include "../../php/functions/services_responsibility/aut_services_products.php";
        
    $list_aut_medicine = "SELECT * FROM `$service_parking` 
                            INNER JOIN `medicine_quantity` ON `$service_parking`.id_med =  `medicine_quantity`.id_med 
                            INNER JOIN `medicine_id` ON `$service_parking`.id_med =  `medicine_id`.id
                            WHERE `$service_parking`.`$service_name` = 1 AND `medicine_quantity`.`stock`>0 " ;
    $requete_aut_medicine= $db ->query($list_aut_medicine);

    $prods = $requete_aut_medicine->fetchAll();

    
     // QUANTITY > 0 POUR ETRE VUE
     $prods_med_med = $prods; 
    
?> 