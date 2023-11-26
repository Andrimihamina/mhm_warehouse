 <!-- DASHBOARD -->
 <?php include_once("../Layout/Side/warehouse/$w_dashboard");?>

<li class="nav-heading">WAREHOUSE</li>
<?php
include_once("../Layout/Side/warehouse/$w_products");
include_once("../Layout/Side/warehouse/$w_analytics");
include_once("../Layout/Side/warehouse/$w_purchase");
include_once("../Layout/Side/warehouse/$w_flux");
?>

<li class="nav-heading">SERVICES</li>
<?php
include_once("../Layout/Side/services/$service_medical");
?>

<!-- PAGE -->
<?php
include_once ("../Layout/Side/pages/profile.php");
?>
