<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Froms";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/froms/edit.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "E- Froms";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_from.php");
  ?>
  <?php 
    foreach($prods_med as $prod_med): 
  ?>
    <tr>   
        <?php require("../../sql/Products/edit_medicine_used.php");?>
        <!-- ITEMS-->
        <th scope="row"><?= $prod_med["id_code_med"]?></th>
        <td><?= $prod_med["commercial_name"]?></td>
        <td><?= $prod_med["Descriptions"]?></td>
        <!-- GENRAMY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="froms_germany-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="from_germany" <?php $germany = $prod_med["germany"];if($germany =="1"){echo"checked";}?>></div></td>
        <!-- MADAGASKAR -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="froms_madagaskar-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="from_mada" <?php $madagaskar = $prod_med["madagaskar"];if($madagaskar =="1"){echo"checked";}?>></div></td>
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