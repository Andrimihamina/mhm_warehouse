<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Locations";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/locations/edit.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <form method="post" enctype="multipart/form-data" action ="">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "C- Locations";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_locations.php");
  ?>
  <?php foreach($prods_med as $prod_med): ?>
    <tr>   
        <?php require("../../sql/Products/edit_medicine_locations.php");?>
        <!-- ITEMS-->
        <th scope="row"><?= $prod_med["id_code_med"]?></th>
        <td><?= $prod_med["commercial_name"]?></td>
        <td><?= $prod_med["Descriptions"]?></td>
        <!-- CLASSIFICATIONS -->
        <td><?= $prod_med["med_affiche_location"]?></td>
        <td><div class="col-md-16"><?php include("../../sql/list/locations/locations/list_locations_1.php");?><select name="location_0-<?=strip_tags($prod_med["id_med"])?>"  id="inputState" class="form-select"><option selected value="<?=$id_locations_0?>"><?=$location_0?></option><?php include("../../sql/list/locations/locations/list_locations_2.php");?></select></div></td>
        <td><div class="col-md-16"><?php include("../../sql/list/locations/sublocations/list_sublocations_1.php");?><select name="location_1-<?=strip_tags($prod_med["id_med"])?>"  id="inputState" class="form-select"><option selected value="<?=$id_locations_1?>"><?=$location_1?></option><?php include("../../sql/list/locations/sublocations/list_sublocations_2.php");?></select></div></td>
        <td><div class="col-md-16"><?php include("../../sql/list/locations/subsublocations/list_subsublocations_1.php");?><select name="location_2-<?=strip_tags($prod_med["id_med"])?>"  id="inputState" class="form-select"><option selected value="<?=$id_locations_2?>"><?=$location_2?></option><?php include("../../sql/list/locations/subsublocations/list_subsublocations_2.php");?></select></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod_med["id_med"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
    </tr>
  <?php endforeach; ?> 
  <?php
  // FOOT TABLE
      require_once ("../../Layout/Products_edit/foot_table.php");
  ?>
  </form>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>