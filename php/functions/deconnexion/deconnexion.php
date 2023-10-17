<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: ../../../../login");
    exit;
 }
// Supprime une variable
// unset($_SESSION["user"]);
session_destroy();

header ("Location: ../../../login");

?>