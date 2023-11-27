<!-- HEAD -->
<?php
 $B_head ="Office Supplies";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_log.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Identifications";
 $title ="Title/title_four.php";
 $section = "section CONS MED";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK EDIT
    $link_edit = "edit_mat_log_id.php";
      $id ="id_code_mat_log";
      $id_id ="id_mat_log";
    // LINK IDENTIFICATION
    $link_identif ="edit_mat_log_a_identifications_edit.php";
  ?>

  <!-- BODY -->
  <?php require_once ("layout_mat/a_identifications.php");?>
   
<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>

