<!-- HEAD -->
<?php
  $B_head ="Profile";
  $titre = "Profile";
  $title_2 = "Profile";
  $title ="Title/title_two.php";
  $section = "section profile";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="row">
  <div class="col-xl-4"><?php include_once ("items/name.php");?></div>
  <div class="col-xl-8"><?php include_once ("items/profile.php");?></div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>