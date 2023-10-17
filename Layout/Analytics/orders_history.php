<!-- HEAD -->
<?php
  $B_head ="History";
  $titre = "History";
  $title ="Title/title_two.php";
  $title_2 = "Orders";
  $section = "section";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
    <?php
    // MEDICAL
      require_once ("items/active/medical.php");
    // NOT MEDICAL
      require_once ("items/active/not_medical.php");
    // PASSIVE ADMIN
      require_once ("items/active/passive_admin.php");
    // PASSIVE VEHICLES
      require_once ("items/active/passive_vehicles.php");
    // PASSIVE BULDING INSIDE
      require_once ("items/active/Passive_bulding_inside.php");
    // PASSIVE BULDING OUTSIDE
      require_once ("items/active/Passive_bulding_outside.php");
    // TEMPORARY
      require_once ("items/active/Temporary.php");

    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>