<?php
// Supprime une variable
session_start();

unset($_SESSION["suppliers"]);
if(!isset($_SESSION["suppliers"])){
    header("Location: ../../../../Layout/flux/inputs_suppliers.php");
    exit;
 }

header ("Location: ../../../../Layout/flux/inputs_suppliers.php");

?>