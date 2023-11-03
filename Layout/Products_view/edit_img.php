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
<?php require_once ("../../php/products_edit/qr_edit/edit_img.php");?>

<form method="POST" enctype="multipart/form-data" action ="">
<div class="row align-items-top">
  <div class="card mb-3">
    
          <p class="card-text">
            <div class="alert alert-Light alert-dismissible fade show" role="alert">
                  <!-- CATEGORIE -->
                  <div class="text-center"><h2><?=$categories?></h2><hr><h4><?=$id_code?><p><?=$Descriptions?></p></h4><hr></div>
                  <!-- PICTURES -->
                  <div class="row mb-3"><label for="inputNumber" class="col-sm-2 col-form-label">Upload New Picture </label><div class="col-sm-10"><input class="form-control" name="med_img" type="file" id="formFile"></div></div>
                  <div class="text-center"><img src="<?=$link_image;?>" class="img-fluid rounded-start" alt="IMG"></div>
                  <!-- EDIT ID -->
                  <input type="hidden"  name="id" class="form-control" value="<?=$id?>">
                  <input type="hidden"  name="categories" class="form-control" value="<?=$categories?>">
                  <input type="hidden"  name="id_code" class="form-control" value="<?=$id_code?>">
            </div>
                <div class="text-center"><div class="row mb-3"><div class="col-sm-10"><button type="submit" name="edit" class="btn btn-primary" value = "done">EDIT</button></div></div></div>
          </p>
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