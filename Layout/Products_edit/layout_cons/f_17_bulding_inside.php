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
      $head_table = "F-17- Bulding Insides";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_bulding_inside.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- WELL AND WATER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_well_and_water-<?=strip_tags($prod["$id_id"])?>" value="1"  id="bulding_inside_well_and_water" <?php $bulding_inside_well_and_water = $edits_aut_passive[0]["bulding_inside_well_and_water"];if($bulding_inside_well_and_water =="1"){echo"checked";}?>></div></td>
        <!-- SOLAR AND ELECTRICITY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_solar-<?=strip_tags($prod["$id_id"])?>" value="1"  id="bulding_inside_solar" <?php $bulding_inside_solar = $edits_aut_passive[0]["bulding_inside_solar"];if($bulding_inside_solar =="1"){echo"checked";}?>></div></td>
        <!-- GENERATOR AND ELECTRICITY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_generator-<?=strip_tags($prod["$id_id"])?>" value="1"  id="bulding_inside_generator" <?php $bulding_inside_generator = $edits_aut_passive[0]["bulding_inside_generator"];if($bulding_inside_generator =="1"){echo"checked";}?>></div></td>
        <!-- OPERATIONS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_operation-<?=strip_tags($prod["$id_id"])?>" value="1"  id="bulding_inside_operation" <?php $bulding_inside_operation = $edits_aut_passive[0]["bulding_inside_operation"];if($bulding_inside_operation =="1"){echo"checked";}?>></div></td>
        <!-- EQUIPEMENET AND MACHINERY DEVICE -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_equipement-<?=strip_tags($prod["$id_id"])?>" value="1"  id="bulding_inside_equipement" <?php $bulding_inside_equipement = $edits_aut_passive[0]["bulding_inside_equipement"];if($bulding_inside_equipement =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
  </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLES -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </div>
</div>
