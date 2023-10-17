<!-- HEAD -->
<?php
  $B_head ="Prospecting IT & Communications";
  $titre = "Purchases";
  $link_2 = "../../Layout/Purchases/prospecting.php";
  $title_2 = "Prospectings";
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
      require_once ("../../Layout/purchases/head_table.php");
    // QUANTITY
      require_once ("../../sql/purchases/prospectings.php");
    // ITEMS
      require_once ("items/itc/mat_itc.php");
    // FOOT TABLE
      require_once ("../../Layout/purchases/foot_table.php");

    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>