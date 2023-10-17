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
      $head_table = "E- From";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_from.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>
      <tr>   
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- GENRAMY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="froms_germany-<?=strip_tags($prod["$id_id"])?>" value="1"  id="from_germany" <?php $germany = $prod["germany"];if($germany =="1"){echo"checked";}?>></div></td>
        <!-- MADAGASKAR -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="froms_madagaskar-<?=strip_tags($prod["$id_id"])?>" value="1"  id="from_mada" <?php $madagaskar = $prod["madagaskar"];if($madagaskar =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
    </tr>
    <?php endforeach;?> 

    <!-- FOOT TABLES -->
    <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </form>
  </div>
</div>
