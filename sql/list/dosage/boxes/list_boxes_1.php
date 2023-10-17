<?php
require_once("../../env/dns_warehouse.php");                        
$list_deroul_box= $mysqli -> query("SELECT id_box, box_description FROM med_box");
?>