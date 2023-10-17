<!-- HEAD -->
<?php
  $B_head ="Flux";
  $titre = "Flux";
  $title ="Title/title_three.php";
  $link_2 = "../../Layout/Flux/outputs_services.php";
  $title_2 = "Outputs";
  $title_3 = "view";
  $section = "section";
  require_once ("../Layout/head.php");
?>

<!-- BODY -->
  <section class="section">
    <div class="row">
    <?php require_once("outputs/view_pdf.php");?>
    </div>
  </section>

<!-- FOOTER -->
<?php
  require_once ("../Layout/footer.php");
?>