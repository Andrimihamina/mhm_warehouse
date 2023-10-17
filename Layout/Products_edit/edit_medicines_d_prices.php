<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Prices";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/prices/edit.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <form method="post" enctype="multipart/form-data" action ="">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "D- Prices";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_prices.php");
  ?>
  <?php foreach($prods_med as $prod_med): ?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><?= $prod_med["id_code_med"]?></th>
        <td><?= $prod_med["commercial_name"]?></td>
        <td><?= $prod_med["Descriptions"]?></td>
        <!-- PRICES -->
        <td><?php echo "$prod_med[price_quantity]$prod_med[box_name] = Ar $prod_med[price]"?></td>
        <td><div class="col-md-8"><textarea class="form-control" name="qt-<?=strip_tags($prod_med["id_med"])?>" id="floatingTextarea" style="height: 30px;"><?=strip_tags($prod_med["price_quantity"])?></textarea></div></td>
        <td><div class="col-md-16"><?php include("../../sql/list/dosage/boxes/list_boxes_1.php");?><select name="unit-<?=strip_tags($prod_med["id_med"])?>" id="inputState" class="form-select"><option selected value ="<?=$prod_med["box"]?>"><?=$prod_med["box_name"]?></option><?php include("../../sql/list/dosage/boxes/list_boxes_2.php");?></select></div></td>
        <td><div class="col-md-16"><textarea class="form-control" name="price-<?=strip_tags($prod_med["id_med"])?>" id="floatingTextarea" style="height: 30px;"><?=strip_tags($prod_med["price"])?></textarea></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod_med["id_med"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
    </tr>
  <?php endforeach; ?> 
  <?php    require_once ("../../Layout/Products_edit/foot_table.php");?>
  </form>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>