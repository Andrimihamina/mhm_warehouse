<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Bulding Outside";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");
 require_once ("../../php/products_edit/medicals/medicines/authorizations/bulding_outside.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-18- Bulding Outside";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_bulding_outside.php");
  ?>
  <?php 
    foreach($prods_med as $prod_med): 
  ?>
    <tr>   
        <?php require("../../sql/Products/edit_medicine_aut_passive.php");?>
        <!-- ITEMS-->
        <th scope="row"><?= $prod_med["id_code_med"]?></th>
        <td><?= $prod_med["commercial_name"]?></td>
        <td><?= $prod_med["Descriptions"]?></td>
        <!-- TECHNICAL SITE -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_technical-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="bulding_outside_technical" <?php $bulding_outside_technical = $edits_aut_passive[0]["bulding_outside_technical"];if($bulding_outside_technical =="1"){echo"checked";}?>></div></td>
        <!-- CANTEEN -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_canteen-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="bulding_outside_canteen" <?php $bulding_outside_canteen = $edits_aut_passive[0]["bulding_outside_canteen"];if($bulding_outside_canteen =="1"){echo"checked";}?>></div></td>
        <!-- YARD -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_yard-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="bulding_outside_yard" <?php $bulding_outside_yard = $edits_aut_passive[0]["bulding_outside_yard"];if($bulding_outside_yard =="1"){echo"checked";}?>></div></td>
        <!-- VILLA KB -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_villa_kb-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="bulding_outside_villa_kb" <?php $bulding_outside_villa_kb = $edits_aut_passive[0]["bulding_outside_villa_kb"];if($bulding_outside_villa_kb =="1"){echo"checked";}?>></div></td>
        <!-- SECURITY SAFETY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_security-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="bulding_outside_security" <?php $bulding_outside_security = $edits_aut_passive[0]["bulding_outside_security"];if($bulding_outside_security =="1"){echo"checked";}?>></div></td>
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