<?php
require_once("../../env/dns_warehouse.php");  
    
$id_resp = $_SESSION["user"]["responsibility"];          
      
$list_services= $mysqli -> query("SELECT id_service, services FROM service_responsibility WHERE `$id_resp` = 1");
?> 