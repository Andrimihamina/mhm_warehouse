<!-- HEAD -->
<?php
  $B_head ="IT & Communications";
  $titre = "Products";
  $link_2 = "../../Layout/products_add/add.php";
  $title_2 = "Add Products";
  $title_3 = "Add New Materials";
  $title ="Title/title_three.php";
  $section = "section Materials";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="row">
  <div class="col-lg-12">
    <?php
      require_once ("../../Layout/Products_add/items_new/itc/mat.php")
    ?>
  </div>
</div>

<!-- FOOTER -->
<?php
  require_once ("../Layout/footer.php");
?>