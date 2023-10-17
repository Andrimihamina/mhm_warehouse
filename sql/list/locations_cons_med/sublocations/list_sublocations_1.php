<?php
require_once("../../env/dns_warehouse.php");  
                                
$list_deroul_sublocation= $mysqli -> query("SELECT id_sub_loc, sublocation_descriptions FROM cos_sublocation");
?>