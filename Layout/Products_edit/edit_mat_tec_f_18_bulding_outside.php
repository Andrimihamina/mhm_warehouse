<!-- HEAD -->
<?php
 $B_head ="Technicals";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_tec.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Bulding Outside";
 $title ="Title/title_four.php";
 $section = "section mat_tecs";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "Technicals/materials/authorizations/18_bulding_outside.php";
    // LINK EDIT
      $link_edit = "edit_mat_tec_id.php";
    // LINK AUTHORIZATIONS
      $link_authorization ="edit_mat_tec_aut_passive.php";
      $id ="id_code_mat_tec";
      $id_id ="id_mat_tec";
      $brands ="manufacturer_name";
      $Descriptions ="Descriptions";
 ?>

<!-- BODY -->
<?php require_once ("layout_cons/f_18_bulding_outside.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>