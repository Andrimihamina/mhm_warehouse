<?php
session_start();

// Supprime une variable
unset($_SESSION["services"]);
 
if(!isset($_SESSION["services"])){
    header("Location: ../../../../../html/body/flux_output/orders/services");
    exit;
 }

header ("Location: Location: ../../../../../html/body/flux_output/orders/services");

?>