<?php
    $titre = "VIEW";
    //ON INCLU LE HEADER
    require_once ("../html/header/header_login.php");

    //ON IMPLIMANT LE DINAMIQUE HEADER 
    include_once("../env/dns_warehouse.php");

    //ON INCLU LE HEADER AND SIDBAR
    include_once ("../html/sidebar/sidebar/view/sidebar.php");
?> 

<main id="main" class="main">
<?php
    //ON INC LE TITRE
    include_once ("../html/header/products/head_products_all_view.php");
?> 

<?php
  // CHECK IF SESSION OPEN
    session_start();
    if(!empty($_SESSION["user"])){   
    $id_resp = $_SESSION["user"]["responsibility"];  
    if($id_resp !="" ){
      $id_abrev = $_GET['idProduit'];
      header("Location: ../Layout/Products_view/Qr_code.php?idProduit=$id_abrev");
    }
  }
?>

<section class="section dashboard">
  <div class="row">
    <div class="col-lg-12">
      <?php 
        include_once ("view.php"); 
      ?>
    </div>
  </div>
</section>

</main>
<!-- End #main -->

<?php
//On inclut le footer avec les liens Java
include_once ("../boostrap/js_login/script.php");
?>
