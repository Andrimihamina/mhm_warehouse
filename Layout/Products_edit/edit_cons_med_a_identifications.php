<!-- HEAD -->
<?php
 $B_head ="Medicals";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_med.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title_4 = "Edit Identifications";
 $title ="Title/title_four.php";
 $section = "section CONS MED";
 require_once ("../Layout/head.php");
 ?>

  <?php
    // LINK EDIT
    $link_edit = "edit_cons_med_id.php";
      $id ="id_code_cons_med";
      $id_id ="id_cons_med";
      $brands ="brand_cons_med";
      $Descriptions ="Descriptions";
      $stock ="stock";
    // LINK IDENTIFICATION
    $link_identif ="edit_cons_med_a_identifications_edit.php";
  ?>

  <!-- BODY -->
  <?php require_once ("layout_cons/a_identifications.php");?>
   
<!-- FOOTER -->
<?php
  require_once ("../Layout/footer.php");
?>