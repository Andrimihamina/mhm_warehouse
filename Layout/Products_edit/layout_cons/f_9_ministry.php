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
      $head_table = "F-9- Ministry";
      require_once ("../../Layout/Products_edit/items_edit/head/head_table_ministry.php");
    ?>

    <!-- TABLES -->
    <?php foreach($prods as $prod): ?>

    <tr>   
        <?php require("../../sql/Products/$link_authorization");?>  
        <!-- ITEMS-->
        <th scope="row"><?= $prod["$id"]?></th>
        <td><?= $prod["$brands"]?></td>
        <td><?= $prod["$Descriptions"]?></td>
        <!-- CHAPLINCY -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="social_chaplincy-<?=strip_tags($prod["$id_id"])?>" value="1"  id="social_chaplincy" <?php $social_chaplincy = $edits_aut_active[0]["social_chaplincy"];if($social_chaplincy =="1"){echo"checked";}?>></div></td>
        <!-- KID CLUBS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="social_kids_club-<?=strip_tags($prod["$id_id"])?>" value="1"  id="social_kids_club" <?php $social_kids_club = $edits_aut_active[0]["social_kids_club"];if($social_kids_club =="1"){echo"checked";}?>></div></td>
       <!-- PLAYMOBIL -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="social_playmobil-<?=strip_tags($prod["$id_id"])?>" value="1"  id="social_playmobil" <?php $social_playmobil = $edits_aut_active[0]["social_playmobil"];if($social_playmobil =="1"){echo"checked";}?>></div></td>
        <!-- PRAYER -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="social_prayer-<?=strip_tags($prod["$id_id"])?>" value="1"  id="social_prayer" <?php $social_prayer = $edits_aut_active[0]["social_prayer"];if($social_prayer =="1"){echo"checked";}?>></div></td>
        <!-- SENSIBILIZATIONS -->
        <td><div class="form-check"><input class="form-check-input" type="checkbox" name="social_sensibilizations-<?=strip_tags($prod["$id_id"])?>" value="1"  id="social_sensibilizations" <?php $social_sensibilizations = $edits_aut_active[0]["social_sensibilizations"];if($social_sensibilizations =="1"){echo"checked";}?>></div></td>
        <!-- EDIT -->
        <td><button type="submit" class="btn btn-info" name="<?=strip_tags($prod["$id_id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
 </tr>
  <?php endforeach;?> 

  <!-- FOOT TABLES -->
  <?php require_once ("../../Layout/Products_edit/foot_table.php");?>
  </div>
</div>
