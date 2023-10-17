<?php
require_once("../../env/dns_warehouse.php");
$list_deroul_forms= $mysqli -> query("SELECT id_form, form_descriptions FROM cons_form");
?>