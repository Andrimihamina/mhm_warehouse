<?php
require_once("../../env/dns_warehouse.php");                       
$list_deroul_classification= $mysqli -> query("SELECT id_class, classifications_descriptions FROM med_classification");
?>