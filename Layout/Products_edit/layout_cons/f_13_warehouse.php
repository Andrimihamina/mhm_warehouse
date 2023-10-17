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
      $head_table = "F-13- Warehouse";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_warehouse.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- Warehouse -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="Warehouse-<?=strip_tags($prod["$id_id"])?>" value="1"  id="Warehouse" <?php $Warehouse = $edits_aut_passive[0]["Warehouse"];if($Warehouse =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
 </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLE -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </div>
</div>
