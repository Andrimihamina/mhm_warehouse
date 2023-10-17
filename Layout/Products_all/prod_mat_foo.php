<!-- HEAD -->
<?php
  $B_head ="Foods";
  $titre = "Products_all";
  $link_2 = "../../Layout/Products_all/all.php";
  $title_2 = "Products";
  $title_3 = "Materials";
  $title ="Title/title_three.php";
  $section = "section Medicine";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
    <?php
    // TITLE TABLE
      $head_table = "Materials";
    // HEAD TABLE
      require_once ("../../Layout/Products_all/head_table_1.php");
    // QUANTITY
      require_once ("../../sql/Products/all.php");
    // ITEMS
      require_once ("items/foods/mat_foo.php");
    // FOOT TABLE
      require_once ("../../Layout/Products_all/foot_table.php");
    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>