<?php
require_once("../../env/dns_warehouse.php");    
$sql_forms = "SELECT * FROM `med_form`  ORDER BY `forms_description` ASC";
$requete_forms = $db->query($sql_forms);
$details_settings = $requete_forms->fetchAll();
?>