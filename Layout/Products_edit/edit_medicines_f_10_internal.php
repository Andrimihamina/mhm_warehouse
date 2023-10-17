<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Training Internal";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");


 require_once ("../../php/products_edit/medicals/medicines/authorizations/internal.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-10- Training Internal";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_internal.php");
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
        <!-- ADMIN -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="training_internal_admin-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="training_internal_admin" <?php $training_internal_admin = $edits_aut_active[0]["training_internal_admin"];if($training_internal_admin =="1"){echo"checked";}?>></div></td>
        <!-- MEDICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="training_internal_medical-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="training_internal_medical" <?php $training_internal_medical = $edits_aut_active[0]["training_internal_medical"];if($training_internal_medical =="1"){echo"checked";}?>></div></td>
       <!-- SOCIAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="training_internal_social-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="training_internal_social" <?php $training_internal_social = $edits_aut_active[0]["training_internal_social"];if($training_internal_social =="1"){echo"checked";}?>></div></td>
        <!-- TECHNICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="training_internal_technical-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="training_internal_technical" <?php $training_internal_technical = $edits_aut_active[0]["training_internal_technical"];if($training_internal_technical =="1"){echo"checked";}?>></div></td>
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