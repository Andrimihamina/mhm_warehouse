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
        $service_parking = "mat_itc_aut_active";
        break; 
    case 2 :
        // PASSIVE
        $service_parking = "mat_itc_aut_passive";
        break;
    case 3 :
        // TEMPORARY
        $service_parking = "mat_itc_aut_temporary";
        break;
    }

// SERVICES PARKING
include "../../php/functions/services_responsibility/aut_services_products.php";
        
    $list_aut_mat_itc = "SELECT * FROM `$service_parking` 
                INNER JOIN `mat_itc_quantity` ON `$service_parking`.id_mat_itc =  `mat_itc_quantity`.id_mat_itc 
                INNER JOIN `mat_itc_id` ON `$service_parking`.id_mat_itc =  `mat_itc_id`.id
                WHERE `$service_parking`.`$service_name` =1 AND `mat_itc_quantity`.`stock`>0 ";

     $requete_aut_mat_itc= $db ->query($list_aut_mat_itc);

     $prods = $requete_aut_mat_itc->fetchAll();

     // QUANTITY > 0 POUR ETRE VUE
    $prods_mat_itc = $prods; 

?> 