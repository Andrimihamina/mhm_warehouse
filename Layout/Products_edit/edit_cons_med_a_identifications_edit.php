<!-- HEAD -->
<?php
 $B_head ="Medicals";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_med.php";
 $link_3 = "../../Layout/Products_edit/edit_cons_med_a_identifications.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title_4 = "Edit Identifications";
 $title_5 = "Id";
 $title ="Title/title_five.php";
 $section = "section cons_med";
 require_once ("../Layout/head.php");
 ?>

<!-- BODY -->
<div class="row">
  <div class="col-lg-12">
    <?php
      // REQUEST
      require_once ("../../sql/Products/edit_cons_med_id_1.php");
      require ("../../sql/Products/edit_cons_med_id_units.php");

      require_once ("../../php/products_edit/medicals/consumables/identifications/add.php");

      require_once ("../../Layout/Products_edit/items_edit/medicals/cons_med/1_identifications.php");
    ?> 
  </div>
</div>

</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>