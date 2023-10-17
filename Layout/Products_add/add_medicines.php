<!-- HEAD -->
<?php
  $B_head ="Medicals";
  $titre = "Products";
  $link_2 = "../../Layout/products_add/add.php";
  $title_2 = "Add Products";
  $title_3 = "Add New Medicines";
  $title ="Title/title_three.php";
  $section = "section Medicine";

  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="row">
  <div class="col-lg-12">
    <?php
      require_once ("../../Layout/Products_add/items_new/medicals/medicine.php")
    ?>
    <script src="../../Layout/Products_add/items_new/medicals/items_medicines/add_more_actival_name.js"></script>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>