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
      $head_table = "F-15- Technicals";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_technicals.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- TECHNICLS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="technical_technical-<?=strip_tags($prod["$id_id"])?>" value="1"  id="technical_technical" <?php $technical_technical = $edits_aut_passive[0]["technical_technical"];if($technical_technical =="1"){echo"checked";}?>></div></td>
        <!-- BIOMED -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="technical_Biomed-<?=strip_tags($prod["$id_id"])?>" value="1"  id="technical_Biomed" <?php $technical_Biomed = $edits_aut_passive[0]["technical_Biomed"];if($technical_Biomed =="1"){echo"checked";}?>></div></td>
        <!-- MECHANICAL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="technical_Mechanical-<?=strip_tags($prod["$id_id"])?>" value="1"  id="technical_Mechanical" <?php $technical_Mechanical = $edits_aut_passive[0]["technical_Mechanical"];if($technical_Mechanical =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
 </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLES -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </div>
</div>
