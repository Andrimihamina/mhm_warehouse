<!-- HEAD -->
<?php
$B_head ="View";
$titre = "View";
$title_2 = "New Products";
$link_2 ="../../Layout/Products_add/add.php";
$title_3 = "View";
$title ="Title/title_three.php";
$section = "section Settings";
require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<?php require_once ("../../sql/functions/products_view/affiche.php");?>
<div class="row align-items-top">
  <div class="card mb-3">
    <div class="row g-4">
    
    <div class="col-md-4">
      <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
        <img src="../../../warehouse_img/img/med_img/<?=$image;?>" class="img-fluid rounded-start" alt="IMG">

        <div class="pt-2">
          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
        </div>
      </div> 
    </div>
 
      
      <div class="col-md-8">
          <p class="card-text">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <div class="text-center"><h2><?=$categories?></h2></div>
              <hr>
              <h4>Descriptions : <?=$Descriptions?></h4>
              <hr>
              <p class="mb-0">Used For : <?=$Used?> <?=$Used_class?></p>
              <hr>
              <p class="mb-0">Price    : <?=$locations?></p>
              <hr>
              <p class="mb-0">Location : <?=$qt?><?=$qt_units?> cost <?=$price?></p>
              <hr>
              <p class="mb-0">Quantity : <?=$stock?></p>
            </div>
          </p>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>