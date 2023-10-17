<!-- DINAMIQUE -->
<?php require_once ("../../php/products_edit/$link_dynamique");?>

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
  <form method="POST" enctype="multipart/form-data" action ="">

    <!-- EDIT LINKS -->
    <?php require_once ("../../sql/products/$link_edit"); ?>

    <!-- HEAD TABLES -->
    <?php
      $head_table = "F-12- Adminl";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_admin.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- ADMIN -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="admin_admin-<?=strip_tags($prod["$id_id"])?>" value="1"  id="admin_admin" <?php $admin_admin = $edits_aut_passive[0]["admin_admin"];if($admin_admin =="1"){echo"checked";}?>></div></td>
        <!-- LOGISTIC -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="admin_logistic-<?=strip_tags($prod["$id_id"])?>" value="1"  id="admin_logistic" <?php $admin_logistic = $edits_aut_passive[0]["admin_logistic"];if($admin_logistic =="1"){echo"checked";}?>></div></td>
        <!-- FINANCE -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="admin_finance-<?=strip_tags($prod["$id_id"])?>" value="1"  id="admin_finance" <?php $admin_finance = $edits_aut_passive[0]["admin_finance"];if($admin_finance =="1"){echo"checked";}?>></div></td>
        <!-- IT -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="admin_it-<?=strip_tags($prod["$id_id"])?>" value="1"  id="admin_it" <?php $admin_it = $edits_aut_passive[0]["admin_it"];if($admin_it =="1"){echo"checked";}?>></div></td>
        <!-- QM -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="admin_qm-<?=strip_tags($prod["$id_id"])?>" value="1"  id="admin_qm" <?php $admin_qm = $edits_aut_passive[0]["admin_qm"];if($admin_qm =="1"){echo"checked";}?>></div></td>
        <!-- COMMUNICATION -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="admin_communication-<?=strip_tags($prod["$id_id"])?>" value="1"  id="admin_communication" <?php $admin_communication = $edits_aut_passive[0]["admin_communication"];if($admin_communication =="1"){echo"checked";}?>></div></td>
        <!-- HR -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="HR-<?=strip_tags($prod["$id_id"])?>" value="1"  id="HR" <?php $HR = $edits_aut_passive[0]["HR"];if($HR =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
 </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLES -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php"); ?>
  </div>
</div>
