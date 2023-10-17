<!-- HEAD -->
<?php
 $B_head ="Foods";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_foo.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Froms";
 $title ="Title/title_four.php";
 $section = "section mat_foos";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "Foods/materials/froms/edit.php";
    // LINK EDIT
      $link_edit = "edit_mat_foo_id.php";
      $id ="id_code_mat_foo";
      $id_id ="id_mat_foo";
      $brands ="manufacturer_name";
      $Descriptions ="Descriptions";
 ?>

   <!-- BODY -->
   <?php require_once ("layout_cons/e_from.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>
