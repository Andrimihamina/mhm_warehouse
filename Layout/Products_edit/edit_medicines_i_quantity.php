<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Quantity";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/quantity/edit.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <form method="POST" enctype="multipart/form-data" action ="">
    <?php
    // QUANTITY
    require_once ("../../sql/products/edit_medicine_id.php");
    // TITLE TABLE
    $head_table = "I- Quantity";
    // HEAD TABLE
    require_once ("../../Layout/Products_edit/items_edit/head/head_table_quantity.php");
    ?>
    <?php foreach($prods_med as $prod_med): ?>
      <tr>   
          <?php require("../../sql/Products/edit_medicine_used.php");?>
          <!-- ITEMS-->
          <th scope="row"><?= $prod_med["id_code_med"]?></th>
          <td><?= $prod_med["commercial_name"]?></td>
          <td><?= $prod_med["Descriptions"]?></td>
          <!-- PRICES -->
          <td><div class="col-sm-12"><input type="number"  name="stock-<?=$prod_med["id_med"]?>" class="form-control" value="<?=$prod_med["stock"]?>"></div></td>
          <td><div class="col-sm-12"><input type="number"  name="quantity_minimal-<?=$prod_med["id_med"]?>" class="form-control" value="<?=$prod_med["quantity_minimal"]?>"></div></td>
          <td><div class="col-sm-12"><input type="number"  name="quantity_avarage-<?=$prod_med["id_med"]?>" class="form-control" value="<?=$prod_med["quantity_avarage"]?>"></div></td>
          <!-- EDIT -->
          <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod_med["id_med"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
      </tr>
    <?php endforeach;?> 
    <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </form>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>