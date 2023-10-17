<!-- HEAD -->
<?php
 $B_head ="Foods";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_foo.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title_4 = "Edit Quantity";
 $title ="Title/title_four.php";
 $section = "section cons_foos";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "foods/consumables/quantity/edit.php";
    // LINK EDIT
      $link_edit = "edit_cons_foo_id.php";
      $id ="id_code_cons_foo";
      $id_id ="id_cons_foo";
      $brands ="brand_cons_foo";
      $Descriptions ="Descriptions";
 ?>

<!-- BODY -->
<?php require_once ("layout_cons/i_quantity.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>
