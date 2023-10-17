<!-- DINAMIQUE -->
<?php  require_once ("../../php/products_edit/$link_dynamique");?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">

  <form method="POST" enctype="multipart/form-data">

    <!-- EDIT LINKS -->
    <?php require_once ("../../sql/products/$link_edit");?>

    <!-- HEAD TABLES -->
    <?php
      $head_table = "B- Used";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_cons_used.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>
      <tr> 
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- USED -->
        <td><textarea class="form-control"  name="used-<?=$prod["$id_id"]?>" style="height: 50px;"><?=$prod["$used"]?></textarea></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
      </tr>
    <?php endforeach;?> 
 
    <!-- FOOTER TABLES -->
    <?php require_once ("../../Layout/Products_edit/foot_table.php");?>

  </form>

  </div>
</div>
