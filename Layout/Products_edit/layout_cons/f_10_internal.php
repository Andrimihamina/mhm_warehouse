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
      $head_table = "F-10- Training Internal";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_internal.php");
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
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="training_internal_admin-<?=strip_tags($prod["$id_id"])?>" value="1"  id="training_internal_admin" <?php $training_internal_admin = $edits_aut_active[0]["training_internal_admin"];if($training_internal_admin =="1"){echo"checked";}?>></div></td>
        <!-- MEDICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="training_internal_medical-<?=strip_tags($prod["$id_id"])?>" value="1"  id="training_internal_medical" <?php $training_internal_medical = $edits_aut_active[0]["training_internal_medical"];if($training_internal_medical =="1"){echo"checked";}?>></div></td>
       <!-- SOCIAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="training_internal_social-<?=strip_tags($prod["$id_id"])?>" value="1"  id="training_internal_social" <?php $training_internal_social = $edits_aut_active[0]["training_internal_social"];if($training_internal_social =="1"){echo"checked";}?>></div></td>
        <!-- TECHNICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="training_internal_technical-<?=strip_tags($prod["$id_id"])?>" value="1"  id="training_internal_technical" <?php $training_internal_technical = $edits_aut_active[0]["training_internal_technical"];if($training_internal_technical =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
  </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLES -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </div>
</div>
