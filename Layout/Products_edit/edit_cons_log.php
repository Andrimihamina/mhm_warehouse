<!-- HEAD -->
<?php
 $B_head ="Logistics";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Consumables";
 $title ="Title/title_three.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
    <?php
    // QUANTITY
      require_once ("../../php/body/dashboard/quantity.php");
    // ITEMS
      require_once ("items_edit/logistics/cons/subdivisions.php");


    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>