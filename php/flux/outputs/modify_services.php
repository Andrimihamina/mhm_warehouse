<?php
// Supprime une variable
session_start();

unset($_SESSION["services"]);
if(!isset($_SESSION["services"])){
    header("Location: ../../../Layout/Flux/outputs_services.php");
    exit;
 }

header ("Location: ../../../Layout/Flux/outputs_services.php");

?>