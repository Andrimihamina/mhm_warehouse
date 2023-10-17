<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Ministry";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 require_once ("../../php/products_edit/medicals/medicines/authorizations/ministry.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-9- Ministry";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_ministry.php");
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
        <!-- CHAPLINCY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="social_chaplincy-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="social_chaplincy" <?php $social_chaplincy = $edits_aut_active[0]["social_chaplincy"];if($social_chaplincy =="1"){echo"checked";}?>></div></td>
        <!-- KID CLUBS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="social_kids_club-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="social_kids_club" <?php $social_kids_club = $edits_aut_active[0]["social_kids_club"];if($social_kids_club =="1"){echo"checked";}?>></div></td>
       <!-- PLAYMOBIL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="social_playmobil-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="social_playmobil" <?php $social_playmobil = $edits_aut_active[0]["social_playmobil"];if($social_playmobil =="1"){echo"checked";}?>></div></td>
        <!-- PRAYER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="social_prayer-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="social_prayer" <?php $social_prayer = $edits_aut_active[0]["social_prayer"];if($social_prayer =="1"){echo"checked";}?>></div></td>
        <!-- SENSIBILIZATIONS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="social_sensibilizations-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="social_sensibilizations" <?php $social_sensibilizations = $edits_aut_active[0]["social_sensibilizations"];if($social_sensibilizations =="1"){echo"checked";}?>></div></td>
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