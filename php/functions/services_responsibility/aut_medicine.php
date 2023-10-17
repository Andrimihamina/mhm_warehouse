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

