<!-- HEAD -->
<?php
  $B_head ="Catalogs IT & Communications";
  $titre = "Purchases";
  $link_2 = "../../Layout/Purchases/catalogs.php";
  $title_2 = "catalogs";
  $title_3 = "Consumables";
  $title ="Title/title_three.php";
  $section = "section Purchase";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">

    <?php
    // TITLE TABLE
      $head_table = "Consumables";
    // HEAD TABLE
      require_once ("../../Layout/purchases/head_table.php");
    // QUANTITY
      require_once ("../../sql/purchases/catalogs.php");
    // ITEMS
      require_once ("items_cat/itc/cons_itc.php");
    // FOOT TABLE
      require_once ("../../Layout/purchases/foot_table.php");

    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>