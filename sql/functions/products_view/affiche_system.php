<?php
require_once("../../env/dns_warehouse.php"); 
if($_GET['idProduit'] ==""){echo "Not found"; }else{
    // GET NOT EMPTY
    $id_abrev = $_GET['idProduit'];
    // savoire si medicine ou consumable ou materiel
    $id_med = substr($id_abrev, 0, 3);
    //ID CONS
    $id_cons = substr($id_abrev, 0, 7);

    // CATEGORIES
        /*==================MEDICINE=====================*/
        include_once("categories/medicines.php");
        /*==================CONS MED=====================*/
        include_once("categories/cons_med.php");
        /*==================MAT MED=====================*/
        include_once("categories/mat_med.php");
        /*==================CONS LOG=====================*/
        include_once("categories/cons_log.php");
        /*==================MAT LOG=====================*/
        include_once("categories/mat_log.php");
        /*==================CONS ITC=====================*/
        include_once("categories/cons_itc.php");
        /*==================MAT ITC=====================*/
        include_once("categories/mat_itc.php");
        /*==================CONS TEC=====================*/
        include_once("categories/cons_tec.php");
        /*==================MAT TEC=====================*/
        include_once("categories/mat_tec.php");
         /*==================CONS FOO=====================*/
         include_once("categories/cons_foo.php");
        /*==================MAT LOG=====================*/
        include_once("categories/mat_foo.php");
        /*==================MAT IMO=====================*/
         include_once("categories/mat_imo.php");
}