<!-- HEAD -->
<?php
  $B_head ="Catalogs";
  $titre = "Catalogs";
  $title_2 = "Catalogs";
  $title ="Title/title_two.php";
  $section = "section Purchase";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
    <?php
    // QUANTITY
      require_once ("../../php/body/purchases/prospectings/prospectings.php");
    // ITEMS
      require_once ("items_cat/medicals/medicals.php");
      require_once ("items_cat/logistics/logistics.php");
      require_once ("items_cat/technicals/technicals.php");
      require_once ("items_cat/itc/itc.php");
      require_once ("items_cat/foods/foods.php");
      require_once ("items_cat/real_estate/real_estate.php");
    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>