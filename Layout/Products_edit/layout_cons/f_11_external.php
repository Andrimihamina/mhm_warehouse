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
      $head_table = "F-11- Training external";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_external.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- ADMIN -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="training_external_admin-<?=strip_tags($prod["$id_id"])?>" value="1"  id="training_external_admin" <?php $training_external_admin = $edits_aut_active[0]["training_external_admin"];if($training_external_admin =="1"){echo"checked";}?>></div></td>
        <!-- MEDICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="training_external_medical-<?=strip_tags($prod["$id_id"])?>" value="1"  id="training_external_medical" <?php $training_external_medical = $edits_aut_active[0]["training_external_medical"];if($training_external_medical =="1"){echo"checked";}?>></div></td>
       <!-- SOCIAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="training_external_social-<?=strip_tags($prod["$id_id"])?>" value="1"  id="training_external_social" <?php $training_external_social = $edits_aut_active[0]["training_external_social"];if($training_external_social =="1"){echo"checked";}?>></div></td>
        <!-- TECHNICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="training_external_technical-<?=strip_tags($prod["$id_id"])?>" value="1"  id="training_external_technical" <?php $training_external_technical = $edits_aut_active[0]["training_external_technical"];if($training_external_technical =="1"){echo"checked";}?>></div></td>
         <!-- EDIT -->
         <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
  </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLES -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </div>
</div>
