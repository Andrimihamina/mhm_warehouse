<!-- HEAD -->
<?php
  $B_head ="Orders";
  $titre = "History";
  $link_2 = "../../Layout/Analytics/orders_history.php";
  $title_2 = "History";
  $title_3 = "Ambulance New";
  $title ="Title/title_three.php";
  $section = "section dashboard";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">

    <?php
    // TITLE TABLE
      $head_table = "Ambulance New";
      $id_service = 7;

      require_once("body_orders.php");
    ?>
     
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>