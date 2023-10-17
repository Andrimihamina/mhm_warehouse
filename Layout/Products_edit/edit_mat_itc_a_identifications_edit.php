<!-- HEAD -->
<?php
 $B_head ="It & Communications";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_itc.php";
 $link_3 = "../../Layout/Products_edit/edit_mat_itc_a_identifications.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Materials";
 $title_4 = "Edit Identifications";
 $title_5 = "Id";
 $title ="Title/title_five.php";
 $section = "section mat_itc";
 require_once ("../Layout/head.php");
 ?>

<!-- BODY -->
<div class="row">
  <div class="col-lg-12">
    <?php
      // REQUEST
      require_once ("../../sql/Products/edit_mat_itc_id_1.php");

      require ("../../sql/Products/edit_mat_itc_id_check.php");

      require_once ("../../php/products_edit/itc/materials/identifications/add.php");

      require_once ("../../Layout/Products_edit/items_edit/itc/mat/1_identifications.php");
    ?>
  </div>
</div>

</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>