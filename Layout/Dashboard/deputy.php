<!-- HEAD -->
<?php
  $B_head ="Dashboard";
  $titre = "Deputy";
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
        // MEDICALS
         require_once ("../Dashboard/Items/left/Admin/Medicals/medicals.php");
  
        // LOGISTICS
          require_once ("../Dashboard/Items/left/Admin/Logistics/logistics.php");
        
        // TECHNICALS
          require_once ("../Dashboard/Items/left/Admin/Technicals/technicals.php");
        
        // IT AND COMM
          require_once ("../Dashboard/Items/left/Admin/It_C/itc.php");
        
        // FOODS
          require_once ("../Dashboard/Items/left/Admin/Foods/foods.php");
  
        // REAL ESTATE
          require_once ("../Dashboard/Items/left/Admin/real_estate/immo.php")
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