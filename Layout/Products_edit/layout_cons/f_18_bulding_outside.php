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
      $head_table = "F-18- Bulding Outside";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_bulding_outside.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- TECHNICAL SITE -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_technical-<?=strip_tags($prod["$id_id"])?>" value="1"  id="bulding_outside_technical" <?php $bulding_outside_technical = $edits_aut_passive[0]["bulding_outside_technical"];if($bulding_outside_technical =="1"){echo"checked";}?>></div></td>
        <!-- CANTEEN -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_canteen-<?=strip_tags($prod["$id_id"])?>" value="1"  id="bulding_outside_canteen" <?php $bulding_outside_canteen = $edits_aut_passive[0]["bulding_outside_canteen"];if($bulding_outside_canteen =="1"){echo"checked";}?>></div></td>
        <!-- YARD -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_yard-<?=strip_tags($prod["$id_id"])?>" value="1"  id="bulding_outside_yard" <?php $bulding_outside_yard = $edits_aut_passive[0]["bulding_outside_yard"];if($bulding_outside_yard =="1"){echo"checked";}?>></div></td>
        <!-- VILLA KB -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_villa_kb-<?=strip_tags($prod["$id_id"])?>" value="1"  id="bulding_outside_villa_kb" <?php $bulding_outside_villa_kb = $edits_aut_passive[0]["bulding_outside_villa_kb"];if($bulding_outside_villa_kb =="1"){echo"checked";}?>></div></td>
        <!-- SECURITY SAFETY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_security-<?=strip_tags($prod["$id_id"])?>" value="1"  id="bulding_outside_security" <?php $bulding_outside_security = $edits_aut_passive[0]["bulding_outside_security"];if($bulding_outside_security =="1"){echo"checked";}?>></div></td>
         <!-- EDIT -->
         <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
  </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLES -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </div>
</div>
