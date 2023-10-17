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
      $head_table = "F-20- Storages";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_storages.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- TECHNICALS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="technical_storage-<?=strip_tags($prod["$id_id"])?>" value="1"  id="technical_storage" <?php $technical_storage = $edits_aut_temporary[0]["technical_storage"];if($technical_storage =="1"){echo"checked";}?>></div></td>
        <!-- MEDICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="medical_storage-<?=strip_tags($prod["$id_id"])?>" value="1"  id="medical_storage" <?php $medical_storage = $edits_aut_temporary[0]["medical_storage"];if($medical_storage =="1"){echo"checked";}?>></div></td>
        <!-- NOT MEDICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="no_medical_storage-<?=strip_tags($prod["$id_id"])?>" value="1"  id="no_medical_storage" <?php $no_medical_storage = $edits_aut_temporary[0]["no_medical_storage"];if($no_medical_storage =="1"){echo"checked";}?>></div></td>
         <!-- EDIT -->
         <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
  </tr>
  <?php 
      endforeach;
  ?> 
  <?php
  // FOOT TABLE
      require_once ("../../Layout/Products_edit/foot_table.php");
  ?>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>