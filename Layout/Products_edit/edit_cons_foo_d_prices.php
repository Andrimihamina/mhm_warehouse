<!-- HEAD -->
<?php
 $B_head ="Foods";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_foo.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumabels";
 $title_4 = "Edit Prices";
 $title ="Title/title_four.php";
 $section = "section cons_foo";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "foods/consumables/prices/edit.php";
    // LINK EDIT
      $link_edit = "edit_cons_foo_id.php";
      $id ="id_code_cons_foo";
      $id_id ="id_cons_foo";
      $brands ="brand_cons_foo";
      $Descriptions ="Descriptions";
 ?>

  <!-- BODY -->
  <?php require_once ("layout_cons/d_prices.php");?>


<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>
