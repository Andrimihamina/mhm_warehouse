<!-- HEAD -->
<?php
  $B_head ="Dashboard";
  $titre = "Admin";
  $title_2 = "Dashboard";
  $title ="Title/title_two.php";
  $section = "section dashboard";
  require_once ("../Layout/head.php");
?>   

<!-- BODY -->
<div class="row">
  <!-- Left side columns -->
  <div class="col-lg-8"> 
    <div class="row">
    <!-- STOCK REPRESENTATIVE -->
      <?php
        require_once ("../../php/body/dashboard/quantity.php");
      // LOGISTICS
        require_once ("../Dashboard/Items/left/Users/Logistics/consumables.php");
        require_once ("../Dashboard/Items/left/Users/Logistics/materials.php");
      
      // TECHNICALS
        require_once ("../Dashboard/Items/left/Users/Technicals/consumables.php");
        require_once ("../Dashboard/Items/left/Users/Technicals/materials.php");
      
      // IT AND COMM
        require_once ("../Dashboard/Items/left/Users/It_C/consumables.php");
        require_once ("../Dashboard/Items/left/Users/It_C/materials.php");
      
      // FOODS
        require_once ("../Dashboard/Items/left/Users/Foods/consumables.php");
        require_once ("../Dashboard/Items/left/Users/Foods/materials.php");

      // REAL ESTATE
        require_once ("../Dashboard/Items/left/Users/real_estate/immo.php")
      ?>
    </div>
  </div>
  <!-- End Left side columns -->

  <!-- Right side columns -->
  <div class="col-lg-4">
    <?php
      require ("../../sql/news/news_and_update.php");
      require ("../Dashboard/Items/right/admin_news.php");
    ?>
  </div>
 <!-- End Right side columns -->

</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>