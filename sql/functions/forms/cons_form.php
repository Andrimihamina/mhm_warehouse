<?php
require_once("../../env/dns_warehouse.php");    
$sql_forms = "SELECT * FROM `cons_form`  ORDER BY `form_descriptions` ASC";
$requete_forms = $db->query($sql_forms);
$details_settings = $requete_forms->fetchAll();
?>