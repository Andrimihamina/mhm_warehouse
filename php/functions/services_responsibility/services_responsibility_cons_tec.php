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
        $service_parking = "cons_tec_aut_active";
        break; 
    case 2 :
        // PASSIVE
        $service_parking = "cons_tec_aut_passive";
        break;
    case 3 :
        // TEMPORARY
        $service_parking = "cons_tec_aut_temporary";
        break;
    }

// SERVICES PARKING
include "../../php/functions/services_responsibility/aut_services_products.php";

    $list_aut_cons_tec= "SELECT * FROM `$service_parking` 
                    INNER JOIN `cons_tec_quantity` ON `$service_parking`.id_cons_tec=  `cons_tec_quantity`.id_cons_tec
                    INNER JOIN `cons_tec_id` ON `$service_parking`.id_cons_tec =  `cons_tec_id`.id
                    WHERE `$service_parking`.`$service_name` =1 AND `cons_tec_quantity`.`stock`>0" ;
     $requete_aut_cons_tec= $db ->query($list_aut_cons_tec);
 
     $prods = $requete_aut_cons_tec->fetchAll();

    // QUANTITY > 0 POUR ETRE VUE
    $prods_cons_tec = $prods;

?> 