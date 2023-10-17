<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Cooperations";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");
 
 require_once ("../../php/products_edit/medicals/medicines/authorizations/cooperations.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-7- Cooperations";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_cooperations.php");
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
        <!-- O THERPAY GNTP -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="o_therapy-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="o_therapy" <?php $o_therapy = $edits_aut_active[0]["o_therapy"];if($o_therapy =="1"){echo"checked";}?>></div></td>
        <!-- GERMAN DOCS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="german_docs-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="german_docs" <?php $german_docs = $edits_aut_active[0]["german_docs"];if($german_docs =="1"){echo"checked";}?>></div></td>
       <!-- EYES -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="eye-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="eye" <?php $eye = $edits_aut_active[0]["eye"];if($eye =="1"){echo"checked";}?>></div></td>
        <!-- DEMATHOLOGY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="external_dermathology-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="external_dermathology" <?php $external_dermathology = $edits_aut_active[0]["external_dermathology"];if($external_dermathology =="1"){echo"checked";}?>></div></td>
        <!-- OTHERS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="external_others-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="external_others" <?php $external_others = $edits_aut_active[0]["external_others"];if($external_others =="1"){echo"checked";}?>></div></td>
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