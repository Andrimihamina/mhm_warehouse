<!-- HEAD -->
<?php
  $B_head ="Prospectings";
  $titre = "Purchases";
  $title_2 = "Prospectings";
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
      require_once ("items/medicals/medicals.php");
      require_once ("items/logistics/logistics.php");
      require_once ("items/foods/foods.php");
      require_once ("items/real_estate/real_estate.php");
    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>