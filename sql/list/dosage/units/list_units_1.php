<?php
require_once("../../env/dns_warehouse.php");
                                
$list_deroul_units= $mysqli -> query("SELECT id_units_mv, units_description FROM med_units");
?>