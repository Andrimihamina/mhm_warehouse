<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Operations";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/authorizations/operations.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-14- Operations";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_operations.php");
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
        <!-- CLEANNING -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="Operation_Cleaning-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="Operation_Cleaning" <?php $Operation_Cleaning = $edits_aut_passive[0]["Operation_Cleaning"];if($Operation_Cleaning =="1"){echo"checked";}?>></div></td>
        <!-- COOKING -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="Operation_Cooking-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="Operation_Cooking" <?php $Operation_Cooking = $edits_aut_passive[0]["Operation_Cooking"];if($Operation_Cooking =="1"){echo"checked";}?>></div></td>
        <!-- LAUNDRY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="Operation_Laundry-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="Operation_Laundry" <?php $Operation_Laundry = $edits_aut_passive[0]["Operation_Laundry"];if($Operation_Laundry =="1"){echo"checked";}?>></div></td>
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