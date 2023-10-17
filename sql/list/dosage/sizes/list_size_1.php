<?php
require_once("../../env/dns_warehouse.php");                                
$list_deroul_sizes= $mysqli -> query("SELECT id_sizes, sizes_descriptions FROM cons_sizes");
?>