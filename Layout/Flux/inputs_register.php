<!-- HEAD -->
<?php
  $B_head ="Flux";
  $titre = "Flux";
  $title ="Title/title_two.php";
  $title_2 = "Inputs";
  $section = "section";
  require_once ("../Layout/head.php");

  // SUPPLIERS
  require_once("../../sql/flux/inputs/suppliers.php");
?>

<!-- BODY -->
  <?php include_once ("../../Layout/Flux/inputs/suppliers.php");?>

  <section class="section">
    <div class="row">
      <?php 
        include_once ("../../php/flux/inputs/research/research.php");
        include_once ("../../Layout/Flux/inputs/research.php");

        include_once ("../../sql/Flux/inputs/flux_in.php");
        include_once ("../../Layout/Flux/inputs/register.php");
      ?>

    </div>
  </section>

<!-- FOOTER -->
<?php
  require_once ("../Layout/footer.php");
?>