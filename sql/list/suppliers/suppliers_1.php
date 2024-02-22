<?php
require_once("../../env/dns_warehouse.php");                              
$list_deroul_suppliers= $mysqli -> query("SELECT `id_suppliers`, `name` FROM `suppliers` ORDER BY `name` ASC");
?>