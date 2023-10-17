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
      $head_table = "F-7- Cooperations";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_cooperations.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- O THERPAY GNTP -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="o_therapy-<?=strip_tags($prod["$id_id"])?>" value="1"  id="o_therapy" <?php $o_therapy = $edits_aut_active[0]["o_therapy"];if($o_therapy =="1"){echo"checked";}?>></div></td>
        <!-- GERMAN DOCS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="german_docs-<?=strip_tags($prod["$id_id"])?>" value="1"  id="german_docs" <?php $german_docs = $edits_aut_active[0]["german_docs"];if($german_docs =="1"){echo"checked";}?>></div></td>
       <!-- EYES -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="eye-<?=strip_tags($prod["$id_id"])?>" value="1"  id="eye" <?php $eye = $edits_aut_active[0]["eye"];if($eye =="1"){echo"checked";}?>></div></td>
        <!-- DEMATHOLOGY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="external_dermathology-<?=strip_tags($prod["$id_id"])?>" value="1"  id="external_dermathology" <?php $external_dermathology = $edits_aut_active[0]["external_dermathology"];if($external_dermathology =="1"){echo"checked";}?>></div></td>
        <!-- OTHERS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="external_others-<?=strip_tags($prod["$id_id"])?>" value="1"  id="external_others" <?php $external_others = $edits_aut_active[0]["external_others"];if($external_others =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
  </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLES -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </div>
</div>
