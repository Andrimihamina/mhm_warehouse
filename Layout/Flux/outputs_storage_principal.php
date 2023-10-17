<!-- HEAD -->
<?php
  $B_head ="Flux";
  $titre = "Flux";
  $title ="Title/title_two.php";
  $title_2 = "Outputs";
  $section = "section";
  require_once ("../Layout/head.php");
?>

<!-- BODY -->
<?php 
  $id_out = $_GET["id"];
  include_once ("../../sql/flux/orders/orders.php");
  include_once ("../../Layout/Flux/outputs/order_services.php");
?>
<div class="row">
  <?php 
    include_once ("../../Layout/Flux/outputs/order_register.php");
  ?>


</div>


<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>