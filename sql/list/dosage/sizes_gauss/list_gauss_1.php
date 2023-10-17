<?php
require_once("../../env/dns_warehouse.php");  
$list_deroul_gauss= $mysqli -> query("SELECT id_gauss, gauss_descriptions FROM cons_gauss");
?>