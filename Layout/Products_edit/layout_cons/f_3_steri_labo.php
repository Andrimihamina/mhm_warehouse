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
      $head_table = "F-3- Edit Sterilizations & Laboratory";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_steri.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- STERILIZATIONS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="sterilizations-<?=strip_tags($prod["$id_id"])?>" value="1"  id="sterilizations" <?php $sterilizations = $edits_aut_active[0]["sterilizations"];if($sterilizations =="1"){echo"checked";}?>></div></td>
        <!-- lABORATORY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="laboratory-<?=strip_tags($prod["$id_id"])?>" value="1"  id="laboratory" <?php $laboratory = $edits_aut_active[0]["laboratory"];if($laboratory =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
   </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLES -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </div>
</div>
