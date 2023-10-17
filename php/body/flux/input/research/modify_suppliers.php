<?php
// Supprime une variable
session_start();

unset($_SESSION["suppliers"]);

if(!isset($_SESSION["suppliers"])){
    header("Location: ../../../../../html/body/flux/input/suppliers");
    exit;
 }

header ("Location: ../../../../../html/body/flux/input/suppliers");

?>