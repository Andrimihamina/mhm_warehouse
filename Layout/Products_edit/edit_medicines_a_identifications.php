<!-- HEAD -->
<?php
 $B_head ="Medicines";
 $titre = "Products";
 $link_2 = "../../Layout/Products_edit/edit.php";
 $link_3 = "../../Layout/Products_edit/edit_medicines.php";
 $title_2 = "Edit Products";
 $title_3 = "Edit Mediciens";
 $title_4 = "Edit Identifications";
 $title ="Title/title_four.php";
 $section = "section Medicines";
 require_once ("../Layout/head.php");
 ?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <?php
  // QUANTITY
  require_once ("../../sql/products/edit_medicine_id.php");
  // TITLE TABLE
      $head_table = "A- Identifications";
    // HEAD TABLE
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_med_identif.php");
  ?>
  <?php 
    foreach($edits_med as $edit_med): 
  ?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><?= $edit_med["id_code_med"]?></th>
        <td><?= $edit_med["commercial_name"]?></td>
        <td><?= $edit_med["Descriptions"]?></td>
        <td><?= $edit_med["forms_description"]?></td>
        <!-- EXPIRATION DATE -->
        <td><?= $edit_med["expiration_date"]?></td>
        <!-- QUANTITY -->
        <td><?= $edit_med["stock"];?></td>
        <!-- EDIT -->
        <td><a href="../../Layout/Products_edit/edit_medicines_a_identifications_edit.php?idProduct=<?=$edit_med["id_med"]?>"><button type="button" class="btn btn-info"><i class="ri-edit-box-line"></i></button></a></td>
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