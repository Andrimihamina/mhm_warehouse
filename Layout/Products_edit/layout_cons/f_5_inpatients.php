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
      $head_table = "F-5- InPatients";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_inpatients.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- BABY ROOM -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_Baby_Room-<?=strip_tags($prod["$id_id"])?>" value="1"  id="inpatients_Baby_Room" <?php $inpatients_Baby_Room = $edits_aut_active[0]["inpatients_Baby_Room"];if($inpatients_Baby_Room =="1"){echo"checked";}?>></div></td>
        <!-- STORCK CENTER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_Stork_Center-<?=strip_tags($prod["$id_id"])?>" value="1"  id="inpatients_Stork_Center" <?php $inpatients_Stork_Center = $edits_aut_active[0]["inpatients_Stork_Center"];if($inpatients_Stork_Center =="1"){echo"checked";}?>></div></td>
        <!-- NEONAT INTENSIVE CARE -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_Neonatal_Intensive-<?=strip_tags($prod["$id_id"])?>" value="1"  id="inpatients_Neonatal_Intensive" <?php $inpatients_Neonatal_Intensive = $edits_aut_active[0]["inpatients_Neonatal_Intensive"];if($inpatients_Neonatal_Intensive =="1"){echo"checked";}?>></div></td>
        <!-- NEONAT KANGORO -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_Neonatal_Kangaroo-<?=strip_tags($prod["$id_id"])?>" value="1"  id="inpatients_Neonatal_Kangaroo" <?php $inpatients_Neonatal_Kangaroo = $edits_aut_active[0]["inpatients_Neonatal_Kangaroo"];if($inpatients_Neonatal_Kangaroo =="1"){echo"checked";}?>></div></td>
        <!-- PED ONE -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_pediatric_one-<?=strip_tags($prod["$id_id"])?>" value="1"  id="inpatients_pediatric_one" <?php $inpatients_pediatric_one = $edits_aut_active[0]["inpatients_pediatric_one"];if($inpatients_pediatric_one =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
    </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLE -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </div>
</div>
