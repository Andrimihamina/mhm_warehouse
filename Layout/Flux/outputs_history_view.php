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
  include_once ("../../sql/flux/orders/orders_view_historique.php");
  include_once ("../../Layout/Flux/outputs/order_services.php");
?> 
<div class="row">
  <?php include_once ("../../Layout/Flux/outputs/order_view.php");?>
</div>

<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>