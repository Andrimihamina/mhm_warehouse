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
      $head_table = "I- Quantity";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_quantity.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
          <!-- PRICES -->
          <td><div class="col-sm-12"><input type="number"  name="stock-<?=$prod["$id_id"]?>" class="form-control" value="<?=$prod["stock"]?>"></div></td>
          <td><div class="col-sm-12"><input type="number"  name="quantity_minimal-<?=$prod["$id_id"]?>" class="form-control" value="<?=$prod["quantity_minimal"]?>"></div></td>
          <td><div class="col-sm-12"><input type="number"  name="quantity_avarage-<?=$prod["$id_id"]?>" class="form-control" value="<?=$prod["quantity_avarage"]?>"></div></td>
          <!-- EDIT -->
          <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
      </tr>
    <?php endforeach;?> 

    <!-- FOOT TABLES -->
    <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </form>
  </div>
</div>
