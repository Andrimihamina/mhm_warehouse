<?php
require_once("../../env/dns_warehouse.php"); 
$sql_sublocation = "SELECT * FROM `cos_foo_sublocation`  ORDER BY `sublocation_descriptions` ASC";
$requete_sublocation = $db->query($sql_sublocation);
$details_settings = $requete_sublocation->fetchAll();
?>