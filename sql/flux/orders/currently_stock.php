<?php
require_once("../../env/dns_warehouse.php");

$id_abrev_code = $flux["id_abrev_code"];

// ID MED
$id = $id_abrev_code;
// ID CONS AND MAT
$id_cons = $id_abrev_code;
// MED COS MAT
$abbrev_value =  substr($id, 0, 3);
$abbrev_value_indentif =  substr($id_cons, 0, 8);

require("../../sql/flux/orders/order_categories/medicines.php");

require("../../sql/flux/orders/order_categories/cons_med.php");
require("../../sql/flux/orders/order_categories/cons_log.php");
require("../../sql/flux/orders/order_categories/cons_tec.php");
require("../../sql/flux/orders/order_categories/cons_itc.php");
require("../../sql/flux/orders/order_categories/cons_foo.php");

require("../../sql/flux/orders/order_categories/mat_med.php");
require("../../sql/flux/orders/order_categories/mat_log.php");
require("../../sql/flux/orders/order_categories/mat_tec.php");
require("../../sql/flux/orders/order_categories/mat_foo.php");
require("../../sql/flux/orders/order_categories/mat_itc.php");
require("../../sql/flux/orders/order_categories/mat_imo.php");

?>