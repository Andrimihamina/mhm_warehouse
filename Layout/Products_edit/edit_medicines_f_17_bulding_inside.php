<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Bulding Inside";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/authorizations/bulding_inside.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-17- Bulding Inside";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_bulding_inside.php");
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
        <!-- WELL AND WATER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_well_and_water-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="bulding_inside_well_and_water" <?php $bulding_inside_well_and_water = $edits_aut_passive[0]["bulding_inside_well_and_water"];if($bulding_inside_well_and_water =="1"){echo"checked";}?>></div></td>
        <!-- SOLAR AND ELECTRICITY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_solar-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="bulding_inside_solar" <?php $bulding_inside_solar = $edits_aut_passive[0]["bulding_inside_solar"];if($bulding_inside_solar =="1"){echo"checked";}?>></div></td>
        <!-- GENERATOR AND ELECTRICITY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_generator-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="bulding_inside_generator" <?php $bulding_inside_generator = $edits_aut_passive[0]["bulding_inside_generator"];if($bulding_inside_generator =="1"){echo"checked";}?>></div></td>
        <!-- OPERATIONS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_operation-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="bulding_inside_operation" <?php $bulding_inside_operation = $edits_aut_passive[0]["bulding_inside_operation"];if($bulding_inside_operation =="1"){echo"checked";}?>></div></td>
        <!-- EQUIPEMENET AND MACHINERY DEVICE -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_equipement-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="bulding_inside_equipement" <?php $bulding_inside_equipement = $edits_aut_passive[0]["bulding_inside_equipement"];if($bulding_inside_equipement =="1"){echo"checked";}?>></div></td>
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