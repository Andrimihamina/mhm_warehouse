<?php
require_once("../env/dns_warehouse.php");                              
$resultSet= $mysqli -> query("SELECT id_resp, responsability FROM mhm_resp ORDER BY `responsability` ASC");
?>