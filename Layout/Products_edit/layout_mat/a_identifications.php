<!-- BODY -->
<div class="col-lg-12">
  <div class="row">

  <form method="POST" enctype="multipart/form-data" action ="">

    <!-- EDIT LINKS -->
    <?php require_once ("../../sql/products/$link_edit");?>
    <!-- HEAD TABLES -->
    <?php
    $head_table = "A- Identifications";
    require_once ("../../Layout/Products_edit/items_edit/head/head_table_mat_med_identif.php");
    ?>
    
    <!-- TABLES -->
    <?php foreach($edits as $edit): ?>
      <tr>   
          <!-- ITEMS-->
        <th scope="row"><?= $edit["$id"]?></th>
        <td><?= $edit["manufacturer_name"]?></td>
        <td><?= $edit["Descriptions"]?></td>
        <td><?= $edit["model"]?></td>
        <td><?= $edit["sereal_number"]?></td>
        <!-- QUANTITY -->
        <td><?= $edit["stock"];?></td>
          <!-- EDIT -->
          <td><a href="../../Layout/Products_edit/<?=$link_identif?>?idProduct=<?=$edit["$id_id"]?>"><button type="button" class="btn btn-info"><i class="ri-edit-box-line"></i></button></a></td>
      </tr>
    <?php endforeach;?> 

    <!-- FOOT TABLES -->
    <?php require_once ("../../Layout/Products_edit/foot_table.php"); ?>

  </form>
  </div>
</div>

