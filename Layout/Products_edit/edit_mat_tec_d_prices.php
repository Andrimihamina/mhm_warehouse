<!-- HEAD -->
<?php
 $B_head ="Technicals";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_tec.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Prices";
 $title ="Title/title_four.php";
 $section = "section mat_tec";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "Technicals/materials/prices/edit.php";
    // LINK EDIT
      $link_edit = "edit_mat_tec_id.php";
      $id ="id_code_mat_tec";
      $id_id ="id_mat_tec";
      $brands ="manufacturer_name";
      $Descriptions ="Descriptions";
 ?>

  <!-- BODY -->
  <?php require_once ("layout_cons/d_prices.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>
