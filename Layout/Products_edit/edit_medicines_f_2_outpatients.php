<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit OutPatients";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/authorizations/outpatients.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-2- OutPatients";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_outpatients.php");
  ?>
  <?php 
    foreach($prods_med as $prod_med): 
  ?>
    <tr>   
        <?php require("../../sql/Products/edit_medicine_aut_active.php");?>
        <!-- ITEMS-->
        <th scope="row"><?= $prod_med["id_code_med"]?></th>
        <td><?= $prod_med["commercial_name"]?></td>
        <td><?= $prod_med["Descriptions"]?></td>
        <!-- JOY CENTER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Joy_Center-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outpatients_Joy_Center" <?php $outpatients_Joy_Center = $edits_aut_active[0]["outpatients_Joy_Center"];if($outpatients_Joy_Center =="1"){echo"checked";}?>></div></td>
        <!-- EMERGENCY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Emergency-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outpatients_Emergency" <?php $outpatients_Emergency = $edits_aut_active[0]["outpatients_Emergency"];if($outpatients_Emergency =="1"){echo"checked";}?>></div></td>
        <!-- GRAC CENTER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Grace_Center-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outpatients_Grace_Center" <?php $outpatients_Grace_Center = $edits_aut_active[0]["outpatients_Grace_Center"];if($outpatients_Grace_Center =="1"){echo"checked";}?>></div></td>
        <!-- OT -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_occupational_therapy-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outpatients_occupational_therapy" <?php $outpatients_occupational_therapy = $edits_aut_active[0]["outpatients_occupational_therapy"];if($outpatients_occupational_therapy =="1"){echo"checked";}?>></div></td>
        <!-- GENERAL DOC -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_general_Doctors-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outpatients_general_Doctors" <?php $outpatients_general_Doctors = $edits_aut_active[0]["outpatients_general_Doctors"];if($outpatients_general_Doctors =="1"){echo"checked";}?>></div></td>
        <!-- PEDIATRIC -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_pediatric-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outpatients_pediatric" <?php $outpatients_pediatric = $edits_aut_active[0]["outpatients_pediatric"];if($outpatients_pediatric =="1"){echo"checked";}?>></div></td>
        <!-- DENTAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_dental-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outpatients_dental" <?php $outpatients_dental = $edits_aut_active[0]["outpatients_dental"];if($outpatients_dental =="1"){echo"checked";}?>></div></td>
        <!-- DEMATOLOGY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_dermathology-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outpatients_dermathology" <?php $outpatients_dermathology = $edits_aut_active[0]["outpatients_dermathology"];if($outpatients_dermathology =="1"){echo"checked";}?>></div></td>
        <!-- US -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Ultrasound-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outpatients_Ultrasound" <?php $outpatients_Ultrasound = $edits_aut_active[0]["outpatients_Ultrasound"];if($outpatients_Ultrasound =="1"){echo"checked";}?>></div></td>
        <!-- OBSTETRICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_obstetrical-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outpatients_obstetrical" <?php $outpatients_obstetrical = $edits_aut_active[0]["outpatients_obstetrical"];if($outpatients_obstetrical =="1"){echo"checked";}?>></div></td>
        <!-- PF -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Planning_Familial-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outpatients_Planning_Familial" <?php $outpatients_Planning_Familial = $edits_aut_active[0]["outpatients_Planning_Familial"];if($outpatients_Planning_Familial =="1"){echo"checked";}?>></div></td>
        <!-- YUCKY ROOM -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Yuck_Room-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outpatients_Yuck_Room" <?php $outpatients_Yuck_Room = $edits_aut_active[0]["outpatients_Yuck_Room"];if($outpatients_Yuck_Room =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod_med["id_med"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
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