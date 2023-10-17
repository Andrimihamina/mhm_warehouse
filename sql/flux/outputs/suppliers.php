<?php

$purchase_date = $_SESSION["suppliers"]["purchase_date"];
$suppliers = $_SESSION["suppliers"]["purchase_suppliers"];

$proforma_number = $_SESSION["suppliers"]["purchase_proforma"];
if($proforma_number !=""){
    $proforma_number = $_SESSION["suppliers"]["purchase_proforma"];;
}else{$proforma_number = "NULL";}

$bill_number = $_SESSION["suppliers"]["purchase_bill"];
$bill_scan = $_SESSION["suppliers"]["purchase_bill_scan"];

$modus_payement =  $_SESSION["suppliers"]["payment"];

$payment_due_date =  $_SESSION["suppliers"]["purchase_payment_due_date"];
if($payment_due_date !=""){
    $payment_due_date = $_SESSION["suppliers"]["purchase_payment_due_date"];
}else{$payment_due_date = "NULL";}

$purchase_comments = $_SESSION["suppliers"]["purchase_commets"];
if($purchase_comments !=""){
    $purchase_comments = $_SESSION["suppliers"]["purchase_commets"];
}else{$purchase_comments = "NULL";}

$nbr_in = $_SESSION["suppliers"]["nbr_in"];
$id_code_in = $_SESSION["suppliers"]["id_code_in"];

$purchase_suppliers = $_SESSION["suppliers"]["purchase_suppliers"];

$sql_affiche_suppliers= "SELECT * FROM `suppliers` WHERE `id_suppliers` = '$purchase_suppliers'";
$requete_affiche_suppliers= $db->query($sql_affiche_suppliers);
$affiche_suppliers = $requete_affiche_suppliers->fetch();

            $affiche_suppliers = $affiche_suppliers["name"];

?>