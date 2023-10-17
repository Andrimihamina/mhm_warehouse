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
      $head_table = "F-2- OutPatients";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_outpatients.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- JOY CENTER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Joy_Center-<?=strip_tags($prod["$id_id"])?>" value="1"  id="outpatients_Joy_Center" <?php $outpatients_Joy_Center = $edits_aut_active[0]["outpatients_Joy_Center"];if($outpatients_Joy_Center =="1"){echo"checked";}?>></div></td>
        <!-- EMERGENCY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Emergency-<?=strip_tags($prod["$id_id"])?>" value="1"  id="outpatients_Emergency" <?php $outpatients_Emergency = $edits_aut_active[0]["outpatients_Emergency"];if($outpatients_Emergency =="1"){echo"checked";}?>></div></td>
        <!-- GRAC CENTER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Grace_Center-<?=strip_tags($prod["$id_id"])?>" value="1"  id="outpatients_Grace_Center" <?php $outpatients_Grace_Center = $edits_aut_active[0]["outpatients_Grace_Center"];if($outpatients_Grace_Center =="1"){echo"checked";}?>></div></td>
        <!-- OT -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_occupational_therapy-<?=strip_tags($prod["$id_id"])?>" value="1"  id="outpatients_occupational_therapy" <?php $outpatients_occupational_therapy = $edits_aut_active[0]["outpatients_occupational_therapy"];if($outpatients_occupational_therapy =="1"){echo"checked";}?>></div></td>
        <!-- GENERAL DOC -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_general_Doctors-<?=strip_tags($prod["$id_id"])?>" value="1"  id="outpatients_general_Doctors" <?php $outpatients_general_Doctors = $edits_aut_active[0]["outpatients_general_Doctors"];if($outpatients_general_Doctors =="1"){echo"checked";}?>></div></td>
        <!-- PEDIATRIC -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_pediatric-<?=strip_tags($prod["$id_id"])?>" value="1"  id="outpatients_pediatric" <?php $outpatients_pediatric = $edits_aut_active[0]["outpatients_pediatric"];if($outpatients_pediatric =="1"){echo"checked";}?>></div></td>
        <!-- DENTAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_dental-<?=strip_tags($prod["$id_id"])?>" value="1"  id="outpatients_dental" <?php $outpatients_dental = $edits_aut_active[0]["outpatients_dental"];if($outpatients_dental =="1"){echo"checked";}?>></div></td>
        <!-- DEMATOLOGY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_dermathology-<?=strip_tags($prod["$id_id"])?>" value="1"  id="outpatients_dermathology" <?php $outpatients_dermathology = $edits_aut_active[0]["outpatients_dermathology"];if($outpatients_dermathology =="1"){echo"checked";}?>></div></td>
        <!-- US -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Ultrasound-<?=strip_tags($prod["$id_id"])?>" value="1"  id="outpatients_Ultrasound" <?php $outpatients_Ultrasound = $edits_aut_active[0]["outpatients_Ultrasound"];if($outpatients_Ultrasound =="1"){echo"checked";}?>></div></td>
        <!-- OBSTETRICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_obstetrical-<?=strip_tags($prod["$id_id"])?>" value="1"  id="outpatients_obstetrical" <?php $outpatients_obstetrical = $edits_aut_active[0]["outpatients_obstetrical"];if($outpatients_obstetrical =="1"){echo"checked";}?>></div></td>
        <!-- PF -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Planning_Familial-<?=strip_tags($prod["$id_id"])?>" value="1"  id="outpatients_Planning_Familial" <?php $outpatients_Planning_Familial = $edits_aut_active[0]["outpatients_Planning_Familial"];if($outpatients_Planning_Familial =="1"){echo"checked";}?>></div></td>
        <!-- YUCKY ROOM -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Yuck_Room-<?=strip_tags($prod["$id_id"])?>" value="1"  id="outpatients_Yuck_Room" <?php $outpatients_Yuck_Room = $edits_aut_active[0]["outpatients_Yuck_Room"];if($outpatients_Yuck_Room =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
    </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLES -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </div>
</div>
