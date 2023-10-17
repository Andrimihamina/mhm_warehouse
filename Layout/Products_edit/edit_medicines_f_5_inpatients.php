<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit InPatients";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 
 require_once ("../../php/products_edit/medicals/medicines/authorizations/inpatients.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-5- InPatients";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_inpatients.php");
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
        <!-- BABY ROOM -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_Baby_Room-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="inpatients_Baby_Room" <?php $inpatients_Baby_Room = $edits_aut_active[0]["inpatients_Baby_Room"];if($inpatients_Baby_Room =="1"){echo"checked";}?>></div></td>
        <!-- STORCK CENTER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_Stork_Center-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="inpatients_Stork_Center" <?php $inpatients_Stork_Center = $edits_aut_active[0]["inpatients_Stork_Center"];if($inpatients_Stork_Center =="1"){echo"checked";}?>></div></td>
        <!-- NEONAT INTENSIVE CARE -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_Neonatal_Intensive-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="inpatients_Neonatal_Intensive" <?php $inpatients_Neonatal_Intensive = $edits_aut_active[0]["inpatients_Neonatal_Intensive"];if($inpatients_Neonatal_Intensive =="1"){echo"checked";}?>></div></td>
        <!-- NEONAT KANGORO -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_Neonatal_Kangaroo-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="inpatients_Neonatal_Kangaroo" <?php $inpatients_Neonatal_Kangaroo = $edits_aut_active[0]["inpatients_Neonatal_Kangaroo"];if($inpatients_Neonatal_Kangaroo =="1"){echo"checked";}?>></div></td>
        <!-- PED ONE -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_pediatric_one-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="inpatients_pediatric_one" <?php $inpatients_pediatric_one = $edits_aut_active[0]["inpatients_pediatric_one"];if($inpatients_pediatric_one =="1"){echo"checked";}?>></div></td>
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