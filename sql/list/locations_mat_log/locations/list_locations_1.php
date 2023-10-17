<?php
require_once("../../env/dns_warehouse.php");  
$list_deroul_location= $mysqli -> query("SELECT id_location, location_descriptions FROM mat_location_log");
?>