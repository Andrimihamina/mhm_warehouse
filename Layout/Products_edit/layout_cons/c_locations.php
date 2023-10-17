<!-- DINAMIQUE -->
<?php require_once ("../../php/products_edit/$link_dynamique");?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <form method="POST" enctype="multipart/form-data" action ="">

    <!-- EDIT LINKS -->
    <?php require_once ("../../sql/products/$link_edit"); ?>

    <!-- HEAD TABLES -->
    <?php
      $head_table = "C- Locations";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_locations.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>
      <tr>   
          <?php require("../../sql/Products/$link_location");?>
          <!-- ITEMS-->
          <th scope="row"><?= $prod["$id"]?></th>
          <td><?= $prod["$brands"]?></td>
          <td><?= $prod["$Descriptions"]?></td>
          <!-- CLASSIFICATIONS -->
          <td><?= $prod["$loc"]?></td>
          <td><div class="col-md-16"><?php include("../../sql/list/$link_man_loc_1");?><select name="location_0-<?=strip_tags($prod["$id_id"])?>"  id="inputState" class="form-select"><option selected value="<?=$id_locations_0?>"><?=$location_0?></option><option>Choose...</option><?php include("../../sql/list/$link_man_loc_2");?></select></div></td>
          <td><div class="col-md-16"><?php include("../../sql/list/$link_sub_loc_1");?><select name="location_1-<?=strip_tags($prod["$id_id"])?>"  id="inputState" class="form-select"><option selected value="<?=$id_locations_1?>"><?=$location_1?></option><option>Choose...</option><?php include("../../sql/list/$link_sub_loc_2");?></select></div></td>
          <td><div class="col-md-16"><?php include("../../sql/list/$link_sub_sub_loc_1");?><select name="location_2-<?=strip_tags($prod["$id_id"])?>"  id="inputState" class="form-select"><option selected value="<?=$id_locations_2?>"><?=$location_2?></option><option>Choose...</option><?php include("../../sql/list/$link_sub_sub_loc_2");?></select></div></td>
          <!-- EDIT -->
          <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
      </tr>
    <?php endforeach; ?> 

    <!-- FOOT TABLES -->
    <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </form>
  </div>
</div>
