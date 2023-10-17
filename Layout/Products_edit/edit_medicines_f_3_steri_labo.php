<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Sterilizations & Laboratory";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 
 require_once ("../../php/products_edit/medicals/medicines/authorizations/steri_labo.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-3- Edit Sterilizations & Laboratory";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_steri.php");
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
        <!-- STERILIZATIONS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="sterilizations-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="sterilizations" <?php $sterilizations = $edits_aut_active[0]["sterilizations"];if($sterilizations =="1"){echo"checked";}?>></div></td>
        <!-- lABORATORY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="laboratory-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="laboratory" <?php $laboratory = $edits_aut_active[0]["laboratory"];if($laboratory =="1"){echo"checked";}?>></div></td>
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