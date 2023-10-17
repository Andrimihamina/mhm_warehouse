<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Mobile Medical Care";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/authorizations/mobile_medical.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-1- Mobile Medical Care";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_mobile_medical.php");
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
        <!-- ULM -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="ulm-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="ulm" <?php $ulm = $edits_aut_active[0]["ulm"];if($ulm =="1"){echo"checked";}?>></div></td>
        <!-- MIDMOB -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="midmob-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="midmob" <?php $midmob = $edits_aut_active[0]["midmob"];if($midmob =="1"){echo"checked";}?>></div></td>
        <!-- DETMOB -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="detmob-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="detmob" <?php $detmob = $edits_aut_active[0]["detmob"];if($detmob =="1"){echo"checked";}?>></div></td>
        <!-- AMBULANCE 1 -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="ambulance_1-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="ambulance_1" <?php $ambulance_1 = $edits_aut_active[0]["ambulance_1"];if($ambulance_1 =="1"){echo"checked";}?>></div></td>
        <!-- AMBULANCE 2 -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="ambulance_2-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="ambulance_2" <?php $ambulance_2 = $edits_aut_active[0]["ambulance_2"];if($ambulance_2 =="1"){echo"checked";}?>></div></td>
        <!-- AUTREACHES -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="outreaches_with_parteners-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="outreaches_with_parteners" <?php $outreaches_with_parteners = $edits_aut_active[0]["outreaches_with_parteners"];if($outreaches_with_parteners =="1"){echo"checked";}?>></div></td>
        
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