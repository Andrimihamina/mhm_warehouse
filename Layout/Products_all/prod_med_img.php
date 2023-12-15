<!-- HEAD -->
<?php
  $B_head ="Medicals";
  $titre = "Products_all";
  $link_2 = "../../Layout/Products_all/all.php";
  $title_2 = "Products";
  $title_3 = "Medicines";
  $title ="Title/title_three.php";
  $section = "section";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="row">
<?php  require_once ("../../sql/Products/all_img.php");?>

<?php foreach($prods_med as $prod_med): ?>

  <div class="col-lg-3">
    <div class="card">
      <div class="card-body">
          <h5 class="card-title"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_med["id_code_med"]?>"><?= $prod_med["id_code_med"]?></a> | <?= $prod_med["Descriptions"]?> | <?= $prod_med["stock"];?></h5>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../../../warehouse_img/img/med_img/<?=$prod_med["med_img"];?>" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
      </div>
  </div>
</div>

<?php endforeach;?> 
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>