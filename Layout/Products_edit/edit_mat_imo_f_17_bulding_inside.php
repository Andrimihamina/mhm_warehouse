<!-- HEAD -->
<?php
 $B_head ="Real Estate";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_imo.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Bulding Inside";
 $title ="Title/title_four.php";
 $section = "section mat_imos";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "real_estate/materials/authorizations/17_bulding_inside.php";
    // LINK EDIT
      $link_edit = "edit_mat_imo_id.php";
    // LINK AUTHORIZATIONS
      $link_authorization ="edit_mat_imo_aut_passive.php";
      $id ="id_code_mat_imo";
      $id_id ="id_mat_imo";
      $brands ="manufacturer_name";
      $Descriptions ="Descriptions";
 ?>

<!-- BODY -->
<?php require_once ("layout_cons/f_17_bulding_inside.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>