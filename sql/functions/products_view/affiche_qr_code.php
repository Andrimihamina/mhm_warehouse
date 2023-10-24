<?php
require_once("../../env/dns_warehouse.php"); 
if($_GET['idProduit'] ==""){echo "Not found"; }else{
    // GET NOT EMPTY
    $id_abrev = $_GET['idProduit'];
    // savoire si medicine ou consumable ou materiel
    $id_med = substr($id_abrev, 0, 3);
    //ID CONS
    $id_cons = substr($id_abrev, 0, 7);
 
    // cat_qr_code
        /*==================MEDICINE=====================*/
        include_once("cat_qr_code/medicines.php");
        /*==================CONS MED=====================*/
        include_once("cat_qr_code/cons_med.php");
        /*==================MAT MED=====================*/
        include_once("cat_qr_code/mat_med.php");
        /*==================CONS LOG=====================*/
        include_once("cat_qr_code/cons_log.php");
        /*==================MAT LOG=====================*/
        include_once("cat_qr_code/mat_log.php");
        /*==================CONS ITC=====================*/
        include_once("cat_qr_code/cons_itc.php");
        /*==================MAT ITC=====================*/
        include_once("cat_qr_code/mat_itc.php");
        /*==================CONS TEC=====================*/
        include_once("cat_qr_code/cons_tec.php");
        /*==================MAT TEC=====================*/
        include_once("cat_qr_code/mat_tec.php");
         /*==================CONS FOO=====================*/
         include_once("cat_qr_code/cons_foo.php");
        /*==================MAT LOG=====================*/
        include_once("cat_qr_code/mat_foo.php");
        /*==================MAT IMO=====================*/
         include_once("cat_qr_code/mat_imo.php");
}