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
  include_once ("../../php/flux/outputs/research/research.php");
  include_once ("../../Layout/Flux/outputs/services.php");
?>
<div class="row">
  <?php 
    // SESSION ERROR
    require_once ("../../php/error/error_stock.php");
    // RESEACRCH
    include_once ("../../Layout/Flux/outputs/research.php");
  ?>
  <?php 
  // REGISTER
    include_once ("../../sql/Flux/outputs/flux_out.php");
    include_once ("../../Layout/Flux/outputs/register.php");
  ?>


</div>


<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>