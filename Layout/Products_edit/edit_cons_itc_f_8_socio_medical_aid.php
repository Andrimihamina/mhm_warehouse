<!-- HEAD -->
<?php
 $B_head ="It & Communications";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_itc.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title_4 = "Edit Socio-Medical Aid";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");
 ?>


<?php
    // LINK DYNAMIQUE
      $link_dynamique = "itc/consumables/authorizations/8_socio_medical_aid.php";
    // LINK EDIT
      $link_edit = "edit_cons_itc_id.php";
    // LINK AUTHORIZATIONS
      $link_authorization ="edit_cons_itc_aut_active.php";
      $id ="id_code_cons_itc";
      $id_id ="id_cons_itc";
      $brands ="brand_cons_itc";
      $Descriptions ="Descriptions";
 ?>

<!-- BODY -->
<?php require_once ("layout_cons/f_8_socio_medical_aid.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>