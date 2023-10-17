<!-- HEAD -->
<?php
 $B_head ="Medicals";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_med.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Admin";
 $title ="Title/title_four.php";
 $section = "section mat_meds";
 require_once ("../Layout/head.php");
 ?> 

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "medicals/materials/authorizations/12_admin.php";
    // LINK EDIT
      $link_edit = "edit_mat_med_id.php";
    // LINK AUTHORIZATIONS
      $link_authorization ="edit_mat_med_aut_passive.php";
      $id ="id_code_mat_med";
      $id_id ="id_mat_med";
      $brands ="manufacturer_name";
      $Descriptions ="Descriptions";
 ?>

<!-- BODY -->
<?php require_once ("layout_cons/f_12_admin.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>