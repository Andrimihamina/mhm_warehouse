<?php
require_once("../../env/dns_warehouse.php");  
$sql_subclass = "SELECT * FROM `med_sub_classifications`  ORDER BY `med_subclassification_description` ASC";
$requete_subclass = $db->query($sql_subclass);
$details_settings = $requete_subclass->fetchAll();

?>