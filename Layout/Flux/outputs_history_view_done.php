<!-- HEAD -->
<?php
  $B_head ="Flux";
  $titre = "Flux";
  $title ="Title/title_four.php";
  $title_2 = "Outputs";
  $link_2 = "../../Layout/Flux/outputs_services.php";
  $title_3 = "History";
  $link_3 = "../../Layout/Flux/outputs_history.php";
  $title_4 = "View";
  $section = "section";
  require_once ("../Layout/head.php");
?>

<!-- BODY -->
<?php 
  $id_out = $_GET["id"];
  include ("../../sql/flux/orders/orders_view_historique_done.php");
  include ("../../Layout/Flux/outputs/order_services.php");
?> 
<div class="row">
  <?php include ("../../Layout/Flux/outputs/order_view_done.php");?>
</div>

<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>