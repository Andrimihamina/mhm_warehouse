<?php
require_once("../../env/dns_warehouse.php"); 
$list_services= $mysqli -> query("SELECT id_service, services_descriptions FROM services");
?> 