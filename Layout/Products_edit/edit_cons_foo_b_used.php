<!-- HEAD -->
<?php
 $B_head ="Foods";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_foo.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title_4 = "Edit Used";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");
 ?>

<?php
    // LINK DYNAMIQUE
    $link_dynamique = "foods/consumables/used/edit.php";
    // LINK EDIT
    $link_edit = "edit_cons_foo_id.php";
      $id ="id_code_cons_foo";
      $id_id ="id_cons_foo";
      $brands ="brand_cons_foo";
      $Descriptions ="Descriptions";
      $used ="used_for";
    ?>

    <!-- BODY -->
    <?php require("layout_cons/b_used.php");?>

<!-- FOOTER -->
<?php require_once ("../Layout/footer.php");?>
