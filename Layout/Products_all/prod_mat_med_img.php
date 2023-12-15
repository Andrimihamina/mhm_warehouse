<!-- HEAD -->
<?php
  $B_head ="Medicals";
  $titre = "Products_all";
  $link_2 = "../../Layout/Products_all/all.php";
  $title_2 = "Products";
  $title_3 = "Materials Medicals";
  $title ="Title/title_three.php";
  $section = "section";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="row">
<?php  require_once ("../../sql/Products/all_img.php");?>

<?php foreach($prods_mat_med as $prod): ?>

  <div class="col-lg-3">
    <div class="card">
      <div class="card-body">
          <h5 class="card-title"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod["id_code_mat_med"]?>"><?= $prod["id_code_mat_med"]?></a> | <?= $prod["Descriptions"]?> | <?= $prod["stock"];?></h5>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../../../warehouse_img/img/mat_med_img/<?=$prod["mat_med_image"];?>" class="d-block w-100" alt="...">
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