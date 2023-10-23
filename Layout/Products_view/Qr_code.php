<!-- HEAD -->
<?php
$B_head ="View";
$titre = "View";
$title_2 = "Products";
$link_2 ="../../Layout/Products_all/all.php";
$title_3 ="View";
$title ="Title/title_three.php";
$section = "section Settings";
require_once ("../Layout/head.php");

require_once ("../../sql/functions/products_view/affiche_qr_code.php");
?>  

<?php
if($id_resp == 1 or $id_resp == 4){
?>

<!-- BODY -->
<?php require_once ("../../php/products_edit/qr_edit/edit.php");?>

<form method="POST" enctype="multipart/form-data" action ="">
<div class="row align-items-top">
  <div class="card mb-3">
    <div class="row g-4">
 
    <div class="col-md-4">
      <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
        <img src="<?=$link_image;?>" class="img-fluid rounded-start" alt="IMG">
    
        <div class="pt-2">
          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
        </div>
      </div>  
    </div>

    
      <div class="col-md-8">
          <p class="card-text">
            <div class="alert alert-Light alert-dismissible fade show" role="alert">
              <div class="text-center"><h2><?=$categories?></h2></div>
              <hr>
              
              <h4><?=$id_code?> 
                <p><?=$Descriptions?></p>
              </h4>
              <hr>
              <p class="mb-0"><?=$Used_for?></p>
              <hr>
              <p class="mb-0"><?=$Prices_quantity?> <?=$Prices_Box_name?> Cost <?=$Prices?> </p>
              <hr>
                <!-- EDIT ID -->
                <input type="hidden"  name="id" class="form-control" value="<?=$id?>">
                <input type="hidden"  name="categories" class="form-control" value="<?=$categories?>">
                <input type="hidden"  name="id_code" class="form-control" value="<?=$id_code?>">

              <p class="mb-0"><?=$Location?></p>
                <!-- EDIT LOCATION -->
                <div class="col-md-16"><?php include("../../sql/list/$link_man_loc_1");?><select name="location_0"  id="inputState" class="form-select"><option selected value="<?=$id_locations_0?>"><?=$location_00?></option><option>Choose...</option><?php include("../../sql/list/$link_man_loc_2");?></select></div>
                <div class="col-md-16"><?php include("../../sql/list/$link_sub_loc_1");?><select name="location_1"  id="inputState" class="form-select"><option selected value="<?=$id_locations_1?>"><?=$location_11?></option><option>Choose...</option><?php include("../../sql/list/$link_sub_loc_2");?></select></div>
                <div class="col-md-16"><?php include("../../sql/list/$link_sub_sub_loc_1");?><select name="location_2"  id="inputState" class="form-select"><option selected value="<?=$id_locations_2?>"><?=$location_22?></option><option>Choose...</option><?php include("../../sql/list/$link_sub_sub_loc_2");?></select></div>
              <hr>

              <p class="mb-0">CURRENT STOCK : <?=$Qt?></p>
                <!-- EDIT QUANTITY -->
                <div class="col-sm-8"><input type="number"  name="stock" class="form-control" value="<?=$Qt?>"></div>
                <div class="col-sm-8">MIN: <input type="number"  name="quantity_minimal" class="form-control" value="<?=$quantity_minimal?>"></div>
                <div class="col-sm-8">AVAR: <input type="number"  name="quantity_avarage" class="form-control" value="<?=$quantity_avarage?>"></div>

              <hr>
            </div>
            <div class="text-center"><div class="row mb-3"><div class="col-sm-10"><button type="submit" name="edit" class="btn btn-primary" value = "done">EDIT</button></div></div></div>
          </p>
        </div>
      </div>

    </div>
  </div>
</div>
</form>

<?php
}
?>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>