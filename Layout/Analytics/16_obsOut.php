<!-- HEAD -->
<?php
  $B_head ="Orders";
  $titre = "History";
  $link_2 = "../../Layout/Analytics/orders_history.php";
  $title_2 = "History";
  $title_3 = "Obstetric Outpatients";
  $title ="Title/title_three.php";
  $section = "section dashboard";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">

    <?php
    // TITLE TABLE
      $head_table = "Obstetric Outpatients";
      $id_service = 16;

      require_once("body_orders.php");
    ?>
     
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>