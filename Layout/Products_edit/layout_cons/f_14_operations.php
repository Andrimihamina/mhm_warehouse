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
      $head_table = "F-14- Operations";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_operations.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- CLEANNING -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="Operation_Cleaning-<?=strip_tags($prod["$id_id"])?>" value="1"  id="Operation_Cleaning" <?php $Operation_Cleaning = $edits_aut_passive[0]["Operation_Cleaning"];if($Operation_Cleaning =="1"){echo"checked";}?>></div></td>
        <!-- COOKING -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="Operation_Cooking-<?=strip_tags($prod["$id_id"])?>" value="1"  id="Operation_Cooking" <?php $Operation_Cooking = $edits_aut_passive[0]["Operation_Cooking"];if($Operation_Cooking =="1"){echo"checked";}?>></div></td>
        <!-- LAUNDRY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="Operation_Laundry-<?=strip_tags($prod["$id_id"])?>" value="1"  id="Operation_Laundry" <?php $Operation_Laundry = $edits_aut_passive[0]["Operation_Laundry"];if($Operation_Laundry =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
 </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLES -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </div>
</div>
