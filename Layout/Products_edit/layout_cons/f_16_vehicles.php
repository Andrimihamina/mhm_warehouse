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
      $head_table = "F-16- Vehicles";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_vehicles.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- ISUZU BLUE -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_isuzu_bleu-<?=strip_tags($prod["$id_id"])?>" value="1"  id="vehicles_isuzu_bleu" <?php $vehicles_isuzu_bleu = $edits_aut_passive[0]["vehicles_isuzu_bleu"];if($vehicles_isuzu_bleu =="1"){echo"checked";}?>></div></td>
        <!-- ISUZU GREEN -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_isuzu_green-<?=strip_tags($prod["$id_id"])?>" value="1"  id="vehicles_isuzu_green" <?php $vehicles_isuzu_green = $edits_aut_passive[0]["vehicles_isuzu_green"];if($vehicles_isuzu_green =="1"){echo"checked";}?>></div></td>
        <!-- GALOPPER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_galopper-<?=strip_tags($prod["$id_id"])?>" value="1"  id="vehicles_galopper" <?php $vehicles_galopper = $edits_aut_passive[0]["vehicles_galopper"];if($vehicles_galopper =="1"){echo"checked";}?>></div></td>
        <!-- DAIHATSU -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_daihatsu-<?=strip_tags($prod["$id_id"])?>" value="1"  id="vehicles_daihatsu" <?php $vehicles_daihatsu = $edits_aut_passive[0]["vehicles_daihatsu"];if($vehicles_daihatsu =="1"){echo"checked";}?>></div></td>
        <!-- LAND CRUSER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_prado-<?=strip_tags($prod["$id_id"])?>" value="1"  id="vehicles_prado" <?php $vehicles_prado = $edits_aut_passive[0]["vehicles_prado"];if($vehicles_prado =="1"){echo"checked";}?>></div></td>
        <!-- STAREX -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_starex-<?=strip_tags($prod["$id_id"])?>" value="1"  id="vehicles_starex" <?php $vehicles_starex = $edits_aut_passive[0]["vehicles_starex"];if($vehicles_starex =="1"){echo"checked";}?>></div></td>
        <!-- SPRINTER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_sprinter-<?=strip_tags($prod["$id_id"])?>" value="1"  id="vehicles_sprinter" <?php $vehicles_sprinter = $edits_aut_passive[0]["vehicles_sprinter"];if($vehicles_sprinter =="1"){echo"checked";}?>></div></td>
        <!-- MOTOR BAIKE -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_motorbike_honda-<?=strip_tags($prod["$id_id"])?>" value="1"  id="vehicles_motorbike_honda" <?php $vehicles_motorbike_honda = $edits_aut_passive[0]["vehicles_motorbike_honda"];if($vehicles_motorbike_honda =="1"){echo"checked";}?>></div></td>
        <!-- SCOOTER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_scooter_bleu-<?=strip_tags($prod["$id_id"])?>" value="1"  id="vehicles_scooter_bleu" <?php $vehicles_scooter_bleu = $edits_aut_passive[0]["vehicles_scooter_bleu"];if($vehicles_scooter_bleu =="1"){echo"checked";}?>></div></td>
        <!-- OTHERS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_others-<?=strip_tags($prod["$id_id"])?>" value="1"  id="vehicles_others" <?php $vehicles_others = $edits_aut_passive[0]["vehicles_others"];if($vehicles_others =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
  </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLES -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");
  ?>
  </div>
</div>
