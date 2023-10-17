<!-- HEAD -->
<?php
  $B_head ="Edit";
  $titre = "Products";
  $title_2 = "Edit Products";
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
      require_once ("items_edit/medicals/medicals.php");
      require_once ("items_edit/logistics/logistics.php");
      require_once ("items_edit/technicals/technicals.php");
      require_once ("items_edit/itc/itc.php");
      require_once ("items_edit/foods/foods.php");
      require_once ("items_edit/real_estate/real_estate.php");
    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>