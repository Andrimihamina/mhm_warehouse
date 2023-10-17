<?php
require_once("../../env/dns_warehouse.php");  
$sql_resp = "SELECT * FROM `mhm_resp`  ORDER BY `id_resp` ASC";
$requete_resp = $db->query($sql_resp);
$responsibilities_list = $requete_resp->fetchAll();      
?>