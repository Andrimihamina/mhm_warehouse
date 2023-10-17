<!-- HEAD -->
<?php
 $B_head ="Technicals";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_tec.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title_4 = "Edit Quantity";
 $title ="Title/title_four.php";
 $section = "section cons_tecs";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "technicals/consumables/quantity/edit.php";
    // LINK EDIT
      $link_edit = "edit_cons_tec_id.php";
      $id ="id_code_cons_tec";
      $id_id ="id_cons_tec";
      $brands ="brand_cons_tec";
      $Descriptions ="Descriptions";
 ?>

<!-- BODY -->
<?php require_once ("layout_cons/i_quantity.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>
