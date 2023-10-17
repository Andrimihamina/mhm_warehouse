<!-- HEAD -->
<?php
  $B_head ="Users";
  $titre = "Users";
  $title_2 = "Users";
  $title ="Title/title_two.php";
  $section = "section dashboard";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-xl-12">
  <div class="row">
    <?php 
    require_once("../../sql/users/users.php");
    require_once("items/users.php");
    ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>