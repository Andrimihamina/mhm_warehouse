<?php
require_once("../../env/dns_warehouse.php");  
$sql_users = "SELECT * FROM `users` ORDER BY `name` ASC";
$requete_users = $db->query($sql_users);
$users = $requete_users->fetchAll();
?>