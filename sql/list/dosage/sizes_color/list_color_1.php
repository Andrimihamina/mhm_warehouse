<?php
require_once("../../env/dns_warehouse.php");  
                                
$list_deroul_color= $mysqli -> query("SELECT id_colors, colors_descriptions FROM cons_colors");
?>