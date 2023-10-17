<!-- HEAD -->
<?php
 $B_head ="Logistics";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_log.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title_4 = "Edit New Bulding";
 $title ="Title/title_four.php";
 $section = "section cons_logs";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "logistics/consumables/authorizations/19_new_bulding.php";
    // LINK EDIT
      $link_edit = "edit_cons_log_id.php";
    // LINK AUTHORIZATIONS
      $link_authorization ="edit_cons_log_aut_temporary.php";
      $id ="id_code_cons_log";
      $id_id ="id_cons_log";
      $brands ="brand_cons_log";
      $Descriptions ="Descriptions";
 ?>

<!-- BODY -->
<?php require_once ("layout_cons/f_19_new_bulding.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>