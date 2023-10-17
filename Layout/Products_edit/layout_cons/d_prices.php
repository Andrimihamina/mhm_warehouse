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
      $head_table = "D- Prices";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_prices.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>
      <tr>   
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- PRICES -->
        <td><?php echo "$prod[price_quantity]$prod[box_name] = Ar $prod[price]"?></td>
        <!-- MODIFICATION -->
        <td><div class="col-md-8"><textarea class="form-control" name="qt-<?=strip_tags($prod["$id_id"])?>" id="floatingTextarea" style="height: 30px;"><?=strip_tags($prod["price_quantity"])?></textarea></div></td>
        <td><div class="col-md-16"><?php include("../../sql/list/dosage/boxes/list_boxes_1.php");?><select name="unit-<?=strip_tags($prod["$id_id"])?>" id="inputState" class="form-select"><option selected value ="<?=$prod["box"]?>"><?=$prod["box_name"]?></option><?php include("../../sql/list/dosage/boxes/list_boxes_2.php");?></select></div></td>
        <td><div class="col-md-16"><textarea class="form-control" name="price-<?=strip_tags($prod["$id_id"])?>" id="floatingTextarea" style="height: 30px;"><?=strip_tags($prod["price"])?></textarea></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
    </tr>
  <?php endforeach; ?> 

  <!-- FOOT TABLES -->
  <?php    require_once ("../../Layout/Products_edit/foot_table.php");?>
  </form>
  </div>
</div>
