<?php
require_once("../../env/dns_warehouse.php");  
$list_deroul_location= $mysqli -> query("SELECT id_location, location_descriptions FROM cos_log_location");
?>