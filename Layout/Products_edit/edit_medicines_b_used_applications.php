<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Applications";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/applications/edit.php");
 ?>
<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <form method="post" enctype="multipart/form-data" >
    <?php
    // QUANTITY
    require_once ("../../sql/products/edit_medicine_id.php");
      // TITLE TABLE
        $head_table = "B- Used";
      // HEAD TABLE 
        require_once ("../../Layout/Products_edit/items_edit/head/head_table_med_used_application.php");
    ?>
    <?php foreach($prods_med as $prod_med):?>
      <tr>   
          <?php require("../../sql/Products/edit_medicine_used.php");?>
          <!-- ITEMS-->
          <th scope="row"><?= $prod_med["id_code_med"]?></th>
          <td><?= $prod_med["commercial_name"]?></td>
          <td><?= $prod_med["Descriptions"]?></td>
          <!-- APPLICATIONS -->
          <td><?= $prod_med["med_affiche_application"]?></td>
          <td><div class="col-md-16"><?php include("../../sql/list/applications/list_applications_1.php");?><select name="app-<?=$prod_med["id_med"]?>" id="inputState" class="form-select"><option selected value="<?=$id_application?>"><?=$applications?></option><?php include("../../sql/list/applications/list_applications_2.php");?></select></div></td>
          <!-- EDIT -->
          <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod_med["id_med"])?>" value ="edit"><i class="ri-edit-box-line" ></i></button></td>
      </tr>
    <?php endforeach;?> 
    <?php
    // FOOT TABLE
        require_once ("../../Layout/Products_edit/foot_table.php");
    ?>
    </div>
  </form>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>