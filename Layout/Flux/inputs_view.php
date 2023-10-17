<!-- HEAD -->
<?php
  $B_head ="Flux";
  $titre = "Flux";
  $title ="Title/title_three.php";
  $link_2 = "../../Layout/Flux/inputs_suppliers.php";
  $title_2 = "Inputs";
  $title_3 = "view";
  $section = "section";
  require_once ("../Layout/head.php");
?>

<!-- BODY -->
  <section class="section">
    <div class="row">
    <?php require_once("inputs/view_pdf.php");?>
    </div>
  </section>

<!-- FOOTER -->
<?php
  require_once ("../Layout/footer.php");
?>