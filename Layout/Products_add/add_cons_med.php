<!-- HEAD -->
<?php
  $B_head ="Medicals";
  $titre = "Products";
  $link_2 = "../../Layout/products_add/add.php";
  $title_2 = "Add Products";
  $title_3 = "Add New Consumables";
  $title ="Title/title_three.php";
  $section = "section Consumables";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="row">
  <div class="col-lg-12">
    <?php
      require_once ("../../Layout/Products_add/items_new/medicals/cons_med.php")
    ?>
  </div>
</div>

<!-- FOOTER -->
<?php
  require_once ("../Layout/footer.php");
?>