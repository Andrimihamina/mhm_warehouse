<!-- HEAD -->
<?php
  $B_head ="History";
  $titre = "History";
  $title ="Title/title_two.php";
  $title_2 = "Purchases";
  $section = "section";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
    <?php
      require_once ("items_purchases/all.php");
      require_once ("items_purchases/medical.php");
      require_once ("items_purchases/logistics.php");
      require_once ("items_purchases/technicals.php");
      require_once ("items_purchases/itc.php");
      require_once ("items_purchases/foods.php");

    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>