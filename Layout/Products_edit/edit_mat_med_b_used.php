<!-- HEAD -->
<?php
 $B_head ="Medicals";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_med.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Used";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
    $link_dynamique = "medicals/materials/used/edit.php";
    // LINK EDIT
    $link_edit = "edit_mat_med_id.php";
      $id ="id_code_mat_med";
      $id_id ="id_mat_med";
      $brands ="manufacturer_name";
      $Descriptions ="Descriptions";
      $used ="used_for_mat_med";
    ?>

    <!-- BODY -->
    <?php require("layout_cons/b_used.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>
