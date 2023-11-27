 <!-- DASHBOARD -->
 <?php include_once("../Layout/Side/warehouse/$w_dashboard");?>

<li class="nav-heading">WAREHOUSE</li>
<?php
include_once("../Layout/Side/warehouse/$w_products");
include_once("../Layout/Side/warehouse/$w_analytics");
include_once("../Layout/Side/warehouse/$w_flux");
?>

<li class="nav-heading">DEPARTEMENTS</li>
<?php
include_once("../Layout/Side/services/$chapliancy");
?>

<!-- PAGE -->
<?php
include_once ("../Layout/Side/pages/profile.php");
?>
