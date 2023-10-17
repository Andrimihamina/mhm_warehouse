<?php
require_once("../../env/dns_warehouse.php"); 
$sql_box= "SELECT * FROM `med_box`  ORDER BY `box_description` ASC";
$requete_box = $db->query($sql_box);
$details_settings  = $requete_box->fetchAll();
?>