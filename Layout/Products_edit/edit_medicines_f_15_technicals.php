<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Technicals";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/authorizations/technical.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-15- Technicals";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_technicals.php");
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
        <!-- TECHNICLS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="technical_technical-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="technical_technical" <?php $technical_technical = $edits_aut_passive[0]["technical_technical"];if($technical_technical =="1"){echo"checked";}?>></div></td>
        <!-- BIOMED -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="technical_Biomed-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="technical_Biomed" <?php $technical_Biomed = $edits_aut_passive[0]["technical_Biomed"];if($technical_Biomed =="1"){echo"checked";}?>></div></td>
        <!-- MECHANICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="technical_Mechanical-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="technical_Mechanical" <?php $technical_Mechanical = $edits_aut_passive[0]["technical_Mechanical"];if($technical_Mechanical =="1"){echo"checked";}?>></div></td>
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