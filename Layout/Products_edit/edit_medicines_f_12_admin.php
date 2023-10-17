<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Admin";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/authorizations/admin.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-12- Admin";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_admin.php");
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
        <!-- ADMIN -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="admin_admin-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="admin_admin" <?php $admin_admin = $edits_aut_passive[0]["admin_admin"];if($admin_admin =="1"){echo"checked";}?>></div></td>
        <!-- LOGISTIC -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="admin_logistic-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="admin_logistic" <?php $admin_logistic = $edits_aut_passive[0]["admin_logistic"];if($admin_logistic =="1"){echo"checked";}?>></div></td>
        <!-- FINANCE -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="admin_finance-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="admin_finance" <?php $admin_finance = $edits_aut_passive[0]["admin_finance"];if($admin_finance =="1"){echo"checked";}?>></div></td>
        <!-- IT -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="admin_it-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="admin_it" <?php $admin_it = $edits_aut_passive[0]["admin_it"];if($admin_it =="1"){echo"checked";}?>></div></td>
        <!-- QM -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="admin_qm-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="admin_qm" <?php $admin_qm = $edits_aut_passive[0]["admin_qm"];if($admin_qm =="1"){echo"checked";}?>></div></td>
        <!-- COMMUNICATION -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="admin_communication-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="admin_communication" <?php $admin_communication = $edits_aut_passive[0]["admin_communication"];if($admin_communication =="1"){echo"checked";}?>></div></td>
        <!-- HR -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="HR-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="HR" <?php $HR = $edits_aut_passive[0]["HR"];if($HR =="1"){echo"checked";}?>></div></td>
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