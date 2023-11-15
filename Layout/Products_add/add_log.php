<!-- HEAD -->
<?php
  $B_head ="Add News";
  $titre = "Products";
  $title_2 = "Add Products";
  $title ="Title/title_two.php";
  $section = "section Products";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
    <?php
    // QUANTITY
      require_once ("../../php/body/dashboard/quantity.php");
    // ITEMS
      require_once ("items_new/logistics/logistics.php");
      require_once ("items_new/foods/foods.php");
      require_once ("items_new/real_estate/real_estate.php");
    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>