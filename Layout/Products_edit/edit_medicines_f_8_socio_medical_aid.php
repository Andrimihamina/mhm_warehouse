<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Socio-Medical Aid";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");

 
 require_once ("../../php/products_edit/medicals/medicines/authorizations/socio_medical_aid.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "F-8- Socio-Medical Aid";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_socio_medico.php");
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
        <!-- MEDICAL SUPORT -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_medical_support-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="sponsorships_medical_support" <?php $sponsorships_medical_support = $edits_aut_active[0]["sponsorships_medical_support"];if($sponsorships_medical_support =="1"){echo"checked";}?>></div></td>
        <!-- MILK PROGRAM -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_milk_program-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="sponsorships_milk_program" <?php $sponsorships_milk_program = $edits_aut_active[0]["sponsorships_milk_program"];if($sponsorships_milk_program =="1"){echo"checked";}?>></div></td>
        <!-- FAMILIES -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_familles-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="sponsorships_familles" <?php $sponsorships_familles = $edits_aut_active[0]["sponsorships_familles"];if($sponsorships_familles =="1"){echo"checked";}?>></div></td>
        <!-- MHM STAFF KIDS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_mhm_staff_kids-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="sponsorships_mhm_staff_kids" <?php $sponsorships_mhm_staff_kids = $edits_aut_active[0]["sponsorships_mhm_staff_kids"];if($sponsorships_mhm_staff_kids =="1"){echo"checked";}?>></div></td>
        <!-- HELTHY FOODS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_healthy_foods-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="sponsorships_healthy_foods" <?php $sponsorships_healthy_foods = $edits_aut_active[0]["sponsorships_healthy_foods"];if($sponsorships_healthy_foods =="1"){echo"checked";}?>></div></td>
        <!-- MHM STAFF FAMILIES -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_mhm_staff_familles-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="sponsorships_mhm_staff_familles" <?php $sponsorships_mhm_staff_familles = $edits_aut_active[0]["sponsorships_mhm_staff_familles"];if($sponsorships_mhm_staff_familles =="1"){echo"checked";}?>></div></td>
        <!-- PREGNANCIES -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_preganancies-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="sponsorships_preganancies" <?php $sponsorships_preganancies = $edits_aut_active[0]["sponsorships_preganancies"];if($sponsorships_preganancies =="1"){echo"checked";}?>></div></td>
        <!-- KIDS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_kids-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="sponsorships_kids" <?php $sponsorships_kids = $edits_aut_active[0]["sponsorships_kids"];if($sponsorships_kids =="1"){echo"checked";}?>></div></td>
        <!-- SCHOOL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_school-<?=strip_tags($prod_med["id_med"])?>" value="1"  id="sponsorships_school" <?php $sponsorships_school = $edits_aut_active[0]["sponsorships_school"];if($sponsorships_school =="1"){echo"checked";}?>></div></td>
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