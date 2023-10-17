<!-- HEAD -->
<?php
 $B_head ="Foods";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_foo.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_foo_a_identifications.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Identifications";
 $title_5 = "Id";
 $title ="Title/title_five.php";
 $section = "section mat_foo";
 require_once ("../Layout/head.php");
 ?>

<!-- BODY -->
<div class="row">
  <div class="col-lg-12">
    <?php
      // REQUEST
      require_once ("../../sql/Products/edit_mat_foo_id_1.php");

      require ("../../sql/Products/edit_mat_foo_id_check.php");

      require_once ("../../php/products_edit/foods/materials/identifications/add.php");

      require_once ("../../Layout/Products_edit/items_edit/foods/mat/1_identifications.php");
    ?>
  </div>
</div>

</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>