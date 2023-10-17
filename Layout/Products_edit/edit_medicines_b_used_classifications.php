<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Classifications";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/classifications/edit.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <form method="post" enctype="multipart/form-data" action ="">
  <?php
  // QUANTITY
    require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
    $head_table = "B- Used";
  // HEAD TABLE
    require_once ("../../Layout/Products_edit/items_edit/head/head_table_med_used_classification.php");
  ?>
    <?php foreach($prods_med as $prod_med):?>
      <tr>   
        <?php require("../../sql/Products/edit_medicine_used.php");?>
        <!-- ITEMS-->
        <th scope="row"><?= $prod_med["id_code_med"]?></th>
        <td><?= $prod_med["commercial_name"]?></td>
        <td><?= $prod_med["Descriptions"]?></td>
        <!-- CLASSIFICATIONS -->
        <td><?= $prod_med["med_affiche_classification"]?></td>
        <td><div class="col-md-16"><?php include("../../sql/list/classifications/classifications/list_classifications_1.php");?><select name="class_0-<?=strip_tags($prod_med["id_med"])?>" id="inputState" class="form-select"><option selected value="<?=$id_classifications_0?>"><?=$classifications_0?></option><?php include("../../sql/list/classifications/classifications/list_classifications_2.php");?></select></div></td>
        <td><div class="col-md-16"><?php include("../../sql/list/classifications/subclassifications/list_subclassifications_1.php");?><select name="class_1-<?=strip_tags($prod_med["id_med"])?>" id="inputState" class="form-select"><option selected value="<?=$id_classifications_1?>"><?=$classifications_1?></option><?php include("../../sql/list/classifications/subclassifications/list_subclassifications_2.php");?></select></div></td>
        <td><div class="col-md-16"><?php include("../../sql/list/classifications/subclassifications/list_subclassifications_1.php");?><select name="class_2-<?=strip_tags($prod_med["id_med"])?>" id="inputState" class="form-select"><option selected value="<?=$id_classifications_2?>"><?=$classifications_2?></option><?php include("../../sql/list/classifications/subclassifications/list_subclassifications_2.php");?></select></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod_med["id_med"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
      </tr>
    <?php endforeach; ?> 
  <?php // FOOT TABLE
    require_once ("../../Layout/Products_edit/foot_table.php");
  ?>
  </form>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>