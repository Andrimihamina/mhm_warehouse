<?php
require_once("../../env/dns_warehouse.php");
$list_deroul_measurs= $mysqli -> query("SELECT id_measurs, measurs_descriptions FROM cons_measurs");
?>