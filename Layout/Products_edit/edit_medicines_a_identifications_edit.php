<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines_a_identifications.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Identifications";
 $title_5 = "Id";
 $title ="Title/title_five.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");
 ?>

<!-- BODY -->
<div class="row">
  <div class="col-lg-12">
    <?php
      // REQUEST
      require_once ("../../sql/Products/edit_medicine_id_1.php");
      require ("../../sql/Products/edit_medicine_id_units.php");
      
      require_once ("../../php/products_edit/medicals/medicines/identifications/add.php");

      require_once ("../../Layout/Products_edit/items_edit/medicals/medicines/1_identifications.php");
    ?>
  </div>
</div>

</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>