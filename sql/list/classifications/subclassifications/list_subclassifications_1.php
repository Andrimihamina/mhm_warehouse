<?php
require_once("../../env/dns_warehouse.php");
$list_deroul_subclassification= $mysqli -> query("SELECT id_med_sub_class, med_subclassification_description FROM med_sub_classifications");
?>