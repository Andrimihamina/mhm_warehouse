<?php
require_once("../../env/dns_warehouse.php");  
$list_deroul_charrieres= $mysqli -> query("SELECT id_charrieres, charrieres_descriptions FROM cons_charrieres");
?>