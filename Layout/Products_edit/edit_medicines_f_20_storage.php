<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Storages";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");
 require_once ("../../php/products_edit/medicals/medicines/authorizations/storage.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-20- Storages";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_storages.php");
  ?>
  <?php 
    foreach($prods_med as $prod_med): 
  ?>
    <tr>   
        <?php require("../../sql/Products/edit_medicine_aut_temporary.php");?>
        <!-- ITEMS-->
        <th scope="row"><?= $prod_med["id_code_med"]?></th>
        <td><?= $prod_med["commercial_name"]?></td>
        <td><?= $prod_med["Descriptions"]?></td>
        <!-- TECHNICALS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="technical_storage-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="technical_storage" <?php $technical_storage = $edits_aut_temporary[0]["technical_storage"];if($technical_storage =="1"){echo"checked";}?>></div></td>
        <!-- MEDICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="medical_storage-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="medical_storage" <?php $medical_storage = $edits_aut_temporary[0]["medical_storage"];if($medical_storage =="1"){echo"checked";}?>></div></td>
        <!-- NOT MEDICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="no_medical_storage-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="no_medical_storage" <?php $no_medical_storage = $edits_aut_temporary[0]["no_medical_storage"];if($no_medical_storage =="1"){echo"checked";}?>></div></td>
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