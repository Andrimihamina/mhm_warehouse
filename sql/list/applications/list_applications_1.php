<?php
require_once("../../env/dns_warehouse.php");                              
$list_deroul_application= $mysqli -> query("SELECT id_appli, application_descriptions FROM med_application");
?>