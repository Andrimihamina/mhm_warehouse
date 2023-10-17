<?php
require_once("../../env/dns_warehouse.php");
$list_deroul_types= $mysqli -> query("SELECT id_types, types_descriptions FROM cons_type");
?>