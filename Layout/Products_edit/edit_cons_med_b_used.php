<!-- HEAD -->
<?php
 $B_head ="Medicals";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_med.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title_4 = "Edit Used";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");
 ?>

  	<?php
    // LINK DYNAMIQUE
    $link_dynamique = "medicals/consumables/used/edit.php";
    // LINK EDIT
    $link_edit = "edit_cons_med_id.php";
      $id ="id_code_cons_med";
      $id_id ="id_cons_med";
      $brands ="brand_cons_med";
      $Descriptions ="Descriptions";
      $used ="used_for_cons_med";
    ?>

    <!-- BODY -->
    <?php require("layout_cons/b_used.php");?>

<!-- FOOTER -->
<?php
  require_once ("../Layout/footer.php");
?>