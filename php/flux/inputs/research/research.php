<?php
// SESSION SUPPLIERS ISN#T EMPTY
if(!isset($_SESSION["suppliers"])){header("Location: ../flux/inputs_register.php");exit;}
 
// VARIABLE SESSION SUPPLIERS
$purchase_date = $_SESSION["suppliers"]["purchase_date"];
$suppliers = $_SESSION["suppliers"]["purchase_suppliers"];

$proforma_number = $_SESSION["suppliers"]["purchase_proforma"];
if($proforma_number !=""){$proforma_number = $_SESSION["suppliers"]["purchase_proforma"];;}else{$proforma_number = NULL;}

$bill_number = $_SESSION["suppliers"]["purchase_bill"];
$bill_scan = $_SESSION["suppliers"]["purchase_bill_scan"];
$amount_bill = $_SESSION["suppliers"]["amount_bill"];

$modus_payement =  $_SESSION["suppliers"]["payment"];

$payment_done =  $_SESSION["suppliers"]["payment_done"];

$payment_due_date =  $_SESSION["suppliers"]["purchase_payment_due_date"];
if($payment_due_date !=""){$payment_due_date = $_SESSION["suppliers"]["purchase_payment_due_date"];}else{$payment_due_date = NULL;}

$purchase_comments = $_SESSION["suppliers"]["purchase_commets"];
if($purchase_comments !=""){$purchase_comments = $_SESSION["suppliers"]["purchase_commets"];}else{$purchase_comments = NULL;}

if($payment_done ==="payed"){
  $date_payment = $purchase_date;
}else { $date_payment = NULL ;}

$nbr_in = $_SESSION["suppliers"]["nbr_in"];
$id_code_in = $_SESSION["suppliers"]["id_code_in"];

// BODY
foreach( $_POST as $cle =>$value ){
    if ($value == "done"){
      $var_id = "$cle";

    $categories = substr($var_id, 0, 13);
    
    // CONSUMABLES
    include_once("categories/cons_med.php");
    // MAT MED
    include_once("categories/mat_med.php");
    // CONS LOG
    include_once("categories/cons_log.php");
    // MAT LOG
    include_once("categories/mat_log.php");
    // CONS TEC
    include_once("categories/cons_tec.php");
    // MAT TEC
    include_once("categories/mat_tec.php");
    // CONS ITC
    include_once("categories/cons_itc.php");
    // MAT ITC
    include_once("categories/mat_itc.php");
    // CONS FOO
    include_once("categories/cons_foo.php");
    // MAT FOO
    include_once("categories/mat_foo.php");
    // MAT IMO
    include_once("categories/mat_imo.php");
    // MEDICINE
    include_once("categories/medicines.php");
    }
} 
?>