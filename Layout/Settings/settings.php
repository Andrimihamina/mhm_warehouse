<!-- HEAD -->
<?php
  $B_head ="Settings";
  $titre = "Settings";
  $title_2 = "Settings";
  $title ="Title/title_two.php";
  $section = "section Settings";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
    <?php
      require_once ("items/Forms.php");
      require_once ("items/Classifications.php");
      require_once ("items/Units.php");
      require_once ("items/med_loc.php");
      require_once ("items/med_cons_loc.php");
      require_once ("items/med_mat_loc.php");
      require_once ("items/log_cons_loc.php");
      require_once ("items/log_mat_loc.php");
      require_once ("items/tec_cons_loc.php");
      require_once ("items/tec_mat_loc.php");
      require_once ("items/itc_cons_loc.php");
      require_once ("items/itc_mat_loc.php");
      require_once ("items/foo_cons_loc.php");
      require_once ("items/foo_mat_loc.php");
      require_once ("items/imo_mat_loc.php");
    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>