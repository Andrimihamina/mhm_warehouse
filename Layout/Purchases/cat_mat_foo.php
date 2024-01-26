<!-- HEAD -->
<?php
  $B_head ="Catalogs Foods";
  $titre = "Purchases";
  $link_2 = "../../Layout/Purchases/catalogs.php";
  $title_2 = "catalogs";
  $title_3 = "Materials";
  $title ="Title/title_three.php";
  $section = "section Purchase";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">

    <?php
    // TITLE TABLE
      $head_table = "Materials";
    // HEAD TABLE
      require_once ("../../Layout/purchases/cat_head_table.php");
    // QUANTITY
      require_once ("../../sql/purchases/catalogs.php");
    // ITEMS
      require_once ("items_cat/foods/mat_foo.php");
    // FOOT TABLE
      require_once ("../../Layout/purchases/foot_table.php");

    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>