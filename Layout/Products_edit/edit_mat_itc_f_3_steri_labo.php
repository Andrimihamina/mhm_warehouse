<!-- HEAD -->
<?php
 $B_head ="It & Communications";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_itc.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Sterilizations & Laboratory";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "itc/materials/authorizations/3_steri_labo.php";
    // LINK EDIT
      $link_edit = "edit_mat_itc_id.php";
    // LINK AUTHORIZATIONS
      $link_authorization ="edit_mat_itc_aut_active.php";
      $id ="id_code_mat_itc";
      $id_id ="id_mat_itc";
      $brands ="manufacturer_name";
      $Descriptions ="Descriptions";
 ?>

<!-- BODY -->
<?php require_once ("layout_cons/f_3_steri_labo.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>