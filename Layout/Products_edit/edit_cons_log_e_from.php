<!-- HEAD -->
<?php
 $B_head ="Office Supplies";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_log.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title_4 = "Edit Froms";
 $title ="Title/title_four.php";
 $section = "section cons_log";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
      $link_dynamique = "logistics/consumables/froms/edit.php";
    // LINK EDIT
      $link_edit = "edit_cons_log_id.php";
      $id ="id_code_cons_log";
      $id_id ="id_cons_log";
      $brands ="brand_cons_log";
      $Descriptions ="Descriptions";
 ?>

   <!-- BODY -->
   <?php require_once ("layout_cons/e_from.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>

