<?php
require_once("../../env/dns_warehouse.php");  
$list_deroul_subsublocation= $mysqli -> query("SELECT id_subsubloc, subsublocation_descriptions FROM cos_log_subsublocation");
?>