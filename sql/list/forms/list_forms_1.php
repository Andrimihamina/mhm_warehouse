<?php
require_once("../../env/dns_warehouse.php");
$list_deroul_forms= $mysqli -> query("SELECT id_form, forms_description FROM med_form");
?>