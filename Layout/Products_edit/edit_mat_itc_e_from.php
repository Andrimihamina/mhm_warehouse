<!-- HEAD -->
<?php
 $B_head ="It & Communications";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_itc.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Froms";
 $title ="Title/title_four.php";
 $section = "section mat_itcs";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "itc/materials/froms/edit.php";
    // LINK EDIT
      $link_edit = "edit_mat_itc_id.php";
      $id ="id_code_mat_itc";
      $id_id ="id_mat_itc";
      $brands ="manufacturer_name";
      $Descriptions ="Descriptions";
 ?>

   <!-- BODY -->
   <?php require_once ("layout_cons/e_from.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>
